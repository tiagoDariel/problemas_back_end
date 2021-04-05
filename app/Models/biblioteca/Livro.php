<?php

namespace App\Models\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_livro',
        'entrega',
        'devolucao',
        'usuario_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function locador() {
        return $this->hasOne(Usuario::class, 'id', 'usuario_id');
    }
}
