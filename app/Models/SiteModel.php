<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteModel extends Model
{
    use HasFactory;

    protected $table = 'cadastro_marketing';

    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'cpf',
        'cnpj',
        'anos_experiencia',
        'atuacao',
        'modalidade',
        'estado',
        'nota_fiscal',
        'link_site',
        'link_instagram',
        'link_linkedin',
        'mensagem',
    ];

}
