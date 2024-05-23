<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'name',
        'email',
        'address',
        'phone',
        'dob',
        'profile_picture',
        'identification_card',
        'face_picture',
        'password',

        'body_id',
        'country_id',
        'gender_id',

        'ethnicity_id',
        'age_id',
        'gender_id',
        // Add other fields as necessary
    ];
     protected $table = 'talents';

    protected $hidden = [
        'password',
    ];
}
