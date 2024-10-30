<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $table = 'propietarios';

    protected $fillable = [
        'nombreApellido',
        'id_computadora'
    ];

    public function computador() {
        return $this->belongsTo(Computador::class, 'id_computadora', 'id');
    }
}
