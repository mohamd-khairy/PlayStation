<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceType extends Model
{
    protected $fillable = ['id' , 'type_name_ar' , 'type_name_en' , 'key' , 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
