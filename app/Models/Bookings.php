<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{

    protected $fillable = [
        'name',
        'email',
        'contact',
        'service'
    ];
    use HasFactory;
}
