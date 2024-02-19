<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_company',
        'name',
        'first_name',
        'last_name',
        'dni',
        'tel',
        'email',
        'status',
        'password',
        'company',
        'dob',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImage($value)
    {
        $img_user = User::where('id', $value)->first();
        if($img_user->image){
            $result = '/storage/app/public/'.$img_user->image;
            return $result;
        }
        $result = '';
        return $result;
    }

    public function getImageList($value)
    {
        $img_user = User::where('id', $value)->first();
        if($img_user->image){
            $result = '/storage/'.$img_user->image;
            return $result;
        }
        $result = '';
        return $result;
    }

    public function getUserRole($value){
        $result = 0;
        $query = DB::table('model_has_roles')->where('model_id', $value)->first();
        if($query){
            $result = $query->role_id;
        }

        return $result;
    }

    public function getUserRoleName($value){
        $result = 0;
        $query = DB::table('model_has_roles')->where('model_id', $value)->first();
        if($query){
            $role = DB::table('roles')->where('id', $query->role_id)->first();
            $result = $role->name;
        }
        return $result;
    }

    public function getUserCompany($value){
        $result = 'Freefee';
        $query = Company::where('id', $value)->first();
        if($query){
            $result = $query->name;
        }

        return $result;
    }
}
