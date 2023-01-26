<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    use HasFactory;
    protected $table = 'Prestamo';
    protected $primaryKey = 'ID_Prestamo';
    protected $fillable = ['fecha_solicitud','fecha_recepcion','hora_recepcion', 'fecha_devolucion','user_id','timestamps'];


}