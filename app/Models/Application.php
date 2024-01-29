<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'description',
        'car_number',
        'user_id',
        'status_id',

    ];

    public function get_status(){
        return $this->belongsTo(Status::class,'status_id');
    }

    public function get_user(){
        return $this->belongsTo(User::class,'user_id');
        // обратная связь
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

}
