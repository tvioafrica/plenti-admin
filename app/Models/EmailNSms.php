<?php

namespace App\Models;

use App\Models\Scopes\BranchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailNSms extends Model
{
    use HasFactory;

    protected $table = "email_sms";
    protected $fillable = [ 'recipients', 'type_of', 'title', 'content', 'branch_id'];
    protected $casts = [
        'id'          => 'integer',
        'recipients'  => 'string',
        'type_of'     => 'integer',
        'branch_id'   => 'integer',
        'title'       => 'string',
        'content'     => 'string',
    ];

    protected static function boot()
    {
        parent::boot();
       // static::addGlobalScope(new BranchScope());// not sure what this does
    }


}
