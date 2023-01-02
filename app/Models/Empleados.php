<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $fillable=['nombre','alias','correo','nacimiento','domicilio','telefono','ingreso','salario','password','id_area','id_perfil'];
}
