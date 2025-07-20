<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
     protected $primaryKey = 'key';

    public $incrementing = false;

    protected $fillable = [
        'key',
        'value',
    ];

    public static function getInfoValue($key) {
        $info = CompanyInformation::where('key', $key)->first();
        return $info ? $info->value : null;
    }
}
