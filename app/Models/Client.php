<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model


{
    protected $table = "clients";

    protected $fillable = [
        'nome', 'cpf', 'data_nasc',
        'data_cadastro', 'renda'
    ];

    use HasFactory;
}
