<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = ['photo', 'name', 'email', 'phone_number', 'alamat', 'domisili'];
}
