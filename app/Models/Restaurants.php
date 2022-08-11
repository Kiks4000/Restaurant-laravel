<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $table = 'restaurants';
    protected $fillable = ['name', 'address', 'zipCode', 'town', 'country', 'description', 'review'];
}
