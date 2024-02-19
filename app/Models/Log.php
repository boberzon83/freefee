<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'module',
        'action',
    ];

    public static function addLog($user,$module,$action)
    {
        if($user && $module && $action){
            //Guardar registro en el log.
            $log = Log::create([
                'id_user' => $user,
                'module' => $module,
                'action' => $action
            ]);
        }

    }
}
