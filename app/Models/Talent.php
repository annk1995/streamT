<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'number',
        'dob',
        'profile_picture',
        'identification_picture',
        'password',
        'type_id',
        'country_id',
        'gender_id',

        'ethnicity_id',
        'age_id',
        'gender_id',
        // Add other fields as necessary
    ];
    // protected $table = 'talent';

    protected $hidden = [
        'password',
    ];
}
