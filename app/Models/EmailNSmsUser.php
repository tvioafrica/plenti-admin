<?php

namespace App\Models;

use App\Models\Scopes\BranchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailNSmsUser extends Model
{
    use HasFactory;

    protected $table = "email_sms_users";
    protected $fillable = [ 'status', 'email_sms_id', 'user_id'];
    protected $casts = [
        'id'               => 'integer',
        'status'           => 'string',
        'email_sms_id'     => 'integer',
        'user_id'          => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();
       // static::addGlobalScope(new BranchScope());// not sure what this does
    }

    public function email_sms() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(EmailNSms::class, 'email_sms_id', 'id');
    }

    public function user() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
