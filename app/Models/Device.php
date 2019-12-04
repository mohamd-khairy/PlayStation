<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['id' , 'pc_number' , 'device_type_id' , 'user_id'];

    /** relations */
    
    public function deviceType()
    {
        return $this->belongsTo(DeviceType::class , 'device_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
