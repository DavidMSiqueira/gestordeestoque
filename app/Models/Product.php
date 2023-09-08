<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable= ['inputName', 'inputCodigo', 'inputDescricao','inputEstMin','inputGrupo','inputFornecedor','inputFabricante', 'inputNCM', 'inputPreMedio', 'inputLote'];
}
