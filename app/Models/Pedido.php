<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'Id_Pedido';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'Fecha',
        'Total',
        'Estado_Envio',
        'Fecha_Entrega_Estimada',
        'Direccion_Envio',
        'Ciudad_Envio',
        'Codigo_Postal',
        'Telefono_Contacto',
        'ID_cliente',
        'Observaciones',
        'Metodo_Pago',
        'created_at',
        'updated_at',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'ID_cliente', 'ID_cliente');
    }
}
