<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'peoples';

    protected $fillable = [
        'imie',
        'nazwisko',
        'nr_telefonu',
        'ulice',
        'miasto',
        'kraj'
    ];
}


# php artisan db:seed --class=PeopleSeeder