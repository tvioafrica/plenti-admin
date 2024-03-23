<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Enums\Status;
use Illuminate\Http\Request;
use App\Libraries\AppLibrary;
use App\Services\MenuService;
use Illuminate\Http\JsonResponse;
use App\Services\PermissionService;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\DefaultAccessService;
use App\Traits\DefaultAccessModelTrait;
use Smartisan\Settings\Facades\Settings;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PermissionResource;

class LoginController extends Controller
{
    use DefaultAccessModelTrait;
    public string $token;
    public DefaultAccessService $defaultAccessService;
    public PermissionService $permissionService;
    public MenuService $menuService;


    public function __construct(
        MenuService $menuService,
        PermissionService $permissionService,
        DefaultAccessService $defaultAccessService
    ) {
        $this->menuService          = $menuService;
        $this->permissionService    = $permissionService;
        $this->defaultAccessService = $defaultAccessService;
    }

    /**
     * @throws \Exception
     */
    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email'    => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->fails()) {
            return new JsonResponse([
                'errors' => $validator->errors()
            ], 422);
        }

        $request->merge(['status' => Status::ACTIVE]);

        if (!Auth::guard('web')->attempt($request->only('email', 'password', 'status'))) {
            return new JsonResponse([
                'errors' => ['validation' => trans('all.message.credentials_invalid')]
            ], 400);
        }

        $branchId = Auth::user()->branch_id;
        if (Auth::user()->branch_id == 0) {
            $branchId = Settings::group('site')->get('site_default_branch');
        }
        $this->defaultAccessService->storeOrUpdate(['branch_id' => $branchId]);
        $user        = User::where('email', $request['email'])->first();
        $this->token = $user->createToken('auth_token')->plainTextToken;

        if (!isset($user->roles[0])) {
            return new JsonResponse([
                'errors' => ['validation' => trans('all.message.role_exist')]
            ], 400);
        }

        $permission        = PermissionResource::collection($this->permissionService->permission($user->roles[0]));
        $defaultPermission = AppLibrary::defaultPermission($permission);

        return new JsonResponse([
            'message'           => trans('all.message.login_success'),
            'token'             => $this->token,
            'branch_id'         => (int)$user->branch_id,
            'user'              => new UserResource($user),
            'menu'              => MenuResource::collection(collect($this->menuService->menu($user->roles[0]))),
            'permission'        => $permission,
            'defaultPermission' => $defaultPermission,
        ], 201);
    }

    public function loginMobile(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'phone'    => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->fails()) {
            return new JsonResponse([
                'errors' => $validator->errors()
            ], 422);
        }
        $request->merge(['status' => Status::ACTIVE]);

        $user = User::where('phone', $request['phone'])->first();

        if($user == null){
            return new JsonResponse([
                'message' => trans('Invalid username and password')
            ], 400);
        }

        if (!Auth::guard('web')->attempt(
                ['email' => $user->email,'password' => $request['password'],'status' => $request['status']
            ])) {
            return new JsonResponse([
                'errors' => ['validation' => trans('all.message.credentials_invalid')]
            ], 400);
        }

        $branchId = Auth::user()->branch_id;
        if (Auth::user()->branch_id == 0) {
            $branchId = Settings::group('site')->get('site_default_branch');
        }
        $this->defaultAccessService->storeOrUpdate(['branch_id' => $branchId]);
        $user        = $user;
        $this->token = $user->createToken('auth_token')->plainTextToken;

        if (!isset($user->roles[0])) {
            return new JsonResponse([
                'errors' => ['validation' => trans('all.message.role_exist')]
            ], 400);
        }

        $permission        = PermissionResource::collection($this->permissionService->permission($user->roles[0]));
        $defaultPermission = AppLibrary::defaultPermission($permission);

        return new JsonResponse([
            'message'           => trans('all.message.login_success'),
            'token'             => $this->token,
            'branch_id'         => (int)$user->branch_id,
            'user'              => new UserResource($user),
            'menu'              => MenuResource::collection(collect($this->menuService->menu($user->roles[0]))),
            'permission'        => $permission,
            'defaultPermission' => $defaultPermission,
        ], 201);
    }

    public function createPin(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'phone'    => ['required', 'string', 'max:255'],
                'pin' => 'required|string|max:5|min:5',
            ]);

            if ($validator->fails()) {
                return $this->validationMessage($validator->errors());
            }

            $user = User::where('phone', $request['phone'])->first();
            if($user == null){
                return $this->shortMessage('Account does not exist',422);
            }
            $user->pin = Hash::make($request->pin);
            $user->save();
           return $this->shortMessage('PIN create sucessfully',201);

        } catch (\Throwable $th) {
            return $this->shortMessage($th->getMessage(), 422);
        }
    }

    public function loginWithPin(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'phone'    => ['required', 'string', 'max:255'],
            'pin' => ['required', 'string', 'min:5'],
        ]);

        if ($validator->fails()) {
            $this->validationMessage($validator->errors());
        }

        $request->merge(['status' => Status::ACTIVE]);
        $user = User::where('phone', $request['phone'])->first();

        if($user == null){
           return $this->shortMessage('Invalid phone number',422);
        }

        if (Hash::check($request->pin, $user->pin)) {
            $this->token = $user->createToken('auth_token')->plainTextToken;
            if (!isset($user->roles[0])) {
                return new JsonResponse([
                    'errors' => ['validation' => trans('all.message.role_exist')]
                ], 400);
            }

            $permission        = PermissionResource::collection($this->permissionService->permission($user->roles[0]));
            $defaultPermission = AppLibrary::defaultPermission($permission);
        } else {
           return $this->shortMessage('Invalid PIN',422);
        }

        return new JsonResponse([
            'message'           => trans('all.message.login_success'),
            'token'             => $this->token,
            'branch_id'         => (int)$user->branch_id,
            'user'              => new UserResource($user),
            'menu'              => MenuResource::collection(collect($this->menuService->menu($user->roles[0]))),
            'permission'        => $permission,
            'defaultPermission' => $defaultPermission,
        ], 201);
    }


    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();
        return new JsonResponse([
            'message' => trans('all.message.logout_success')
        ], 200);
    }

    public function findUserByMobile(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'phone'    => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return new JsonResponse([
                'errors' => $validator->errors()
            ], 422);
        }


       $user = User::where('phone', $request['phone'])->first();
        if( $user != null){
            return new JsonResponse([
                'message'           => trans('all.message.login_success'),
                'user'              => new UserResource($user),
            ], 201);
        }else{
            return new JsonResponse([
                'message'           => 'Invalid user',
            ], 422);
        }

    }

}
