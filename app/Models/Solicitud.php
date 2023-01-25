<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'Solicitud';
    protected $primaryKey = 'ID_solicitud';
    protected $fillable = ['ID_Portatilesp','user_id','timestamps'];


}