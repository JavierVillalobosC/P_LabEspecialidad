<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'Usuarios';
    protected $primaryKey = 'ID';

    protected $fillable = ['name','email', 'password'];

}
