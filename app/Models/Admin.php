<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
