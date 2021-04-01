<?php

namespace App\Models\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_livro',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function locador() {
        return $this->hasOne(Usuario::class, 'id', 'livro_id');
    }
    public function emprestimo() {
        return $this->hasOne(Emprestimo::class, 'livro_id');
    }
}
