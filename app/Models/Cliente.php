<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'clientes'; // 👈 Asegúrate de que coincida con tu tabla real
    protected $primaryKey = 'ID_cliente';
}
