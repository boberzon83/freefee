<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'business_name',
        'cif',
        'address',
        'zip',
        'id_province',
        'id_town',
        'contact',
        'email',
        'tel',
        'link',
        'image',
        'status',
    ];

    public function getImageList($valor)
    {
        $img_provider = self::where('id', $valor)->first();
        if ($img_provider->image) {
            $image = '/storage/'.$img_provider->image;

            return $image;
        }
        $image = '';

        return $image;
    }
}
