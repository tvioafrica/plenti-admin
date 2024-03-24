<?php

namespace App\Traits;


use App\Models\DefaultAccess;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Smartisan\Settings\Facades\Settings;


trait DefaultAccessModelTrait
{
    public function branch()
    {
        if (!App::runningInConsole() && Auth::check()) {
            $access = DefaultAccess::where(['user_id' => Auth::id(), 'name' => 'branch_id'])->first();
            if ($access) {
                return $access->default_id;
            } elseif (Auth::user()->branch_id == 0) {
                return Settings::group('site')->get('site_default_branch');
            } else {
                return Auth::user()->branch_id;
            }
        } else {
            return Settings::group('site')->get('site_default_branch');
        }
    }

    public function setBranch($branchId)
    {
        if (!App::runningInConsole() && Auth::check()) {
            if ($branchId != '0' && ($branchId == '' || $branchId == null)) {
                $branchId = $this->branch();
            } elseif ($branchId == '0' && $branchId == Auth::user()->branch_id) {
                $branchId = 0;
            } else {
                $this->branch();
            }
        } elseif ($branchId != 0) {
            if (App::runningInConsole()) {
                $branchId = $branchId;
            } else {
                $branchId = Settings::group('site')->get('site_default_branch');
            }
        }
        return $branchId;
    }


    protected function pointEngine($branch, $amount_spent, $transaction=null)
    {
        $engine_constant = 2;
        $commision = $branch->plenti_commision/100;
        $customer_earnings = ($branch->customers_earnings/100);
        $point = round(($transaction == 'burn')? ($engine_constant* $amount_spent) : ($commision* $amount_spent * $customer_earnings  * $engine_constant), 0);
        return $point;
    }

    protected function convertAPIStringToArray($string){
        // Remove square brackets and split the string by comma and space
        $array = explode(', ', trim($string, '[]'));
        // Convert array elements to lowercase
        $array = array_map('strtolower', $array);
        return $array;
    }

    protected function shortMessage($message, $code){
        return new JsonResponse([
            'message' => $message
        ],  $code);
    }

    protected function validationMessage($message){
        return new JsonResponse([
            'message' => $message
        ], 422);
    }

}
