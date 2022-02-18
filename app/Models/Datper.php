<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datper extends Model
{
    use HasFactory;
    protected $fillable = ['nac','cedula','nombre1','nombre2','apellido1','apellido2',
    'fechnac','sexo','estatura','peso','edocivil','email','celular','telfcasa','direc'];
}
