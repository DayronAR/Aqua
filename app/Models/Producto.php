<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'capacidad', 'tecnologia', 'vida_util', 'ID_Categoria', 'Stock', 'precio'];

    protected $primaryKey = 'ID_Producto';
    public $incrementing = true;
    protected $keyType = 'int';
}
