<?php

namespace App\Modules\Admin\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Passport\HasApiTokens;
use App\Modules\Admin\Role\Models\Traits\UserRoles;

class User extends AuthUser
{
    use HasFactory, HasApiTokens, UserRoles;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'status',
    ];

    protected $hidden = [
        'password'
    ];
}
