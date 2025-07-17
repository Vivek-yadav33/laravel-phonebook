<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'profile_image_path',
        'phone_number',
        'user_id'
    ];
    use HasFactory;

     public function contacts(){
        return $this->hasMany('App\Models\User','user_id');
    }

}
