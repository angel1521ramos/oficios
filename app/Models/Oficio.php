<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    use HasFactory;
    protected $fillable = [
        'folio',
        'fecha',
        'hora',
        'noOficio',
        'dependencia',
        'remitente',
        'asunto',
        'telefono',
        'observacion',
        'recibe'
    ];
}
