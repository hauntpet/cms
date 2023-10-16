<?php

namespace Haunt\CMS\Extend\Model;

use Illuminate\Auth\Authenticatable as Auth;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kra8\Snowflake\HasShortflakePrimary;

class Authenticatable extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Auth;
    use CanResetPassword;
    use HasShortflakePrimary;
    use SoftDeletes;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
