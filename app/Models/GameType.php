<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    protected $fillable = ['id' , 'type' , 'device_type_id' , 'price' , 'user_id'];

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
