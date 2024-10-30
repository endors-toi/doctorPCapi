<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;

    protected $table = 'computadoras';

    protected $fillable = [
        'precio',
        'marca',
        'anio',
    ];

    public function propietario()
    {
        return $this->hasOne(Propietario::class, 'id_computadora', 'id');
    }
}
