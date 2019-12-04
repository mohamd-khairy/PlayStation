<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['id' , 'device_id' , 'start_time' , 'end_time' 
    , 'status' , 'market' , 'device_price' , 'market_price' , 'total_price' , 'user_id'];
    
     /** relations */
    
     public function device()
     {
         return $this->belongsTo(DeviceType::class , 'device_id');
     }
 
     public function user()
     {
         return $this->belongsTo(User::class , 'user_id');
     }
}
