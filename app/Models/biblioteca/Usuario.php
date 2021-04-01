<?php

namespace App\Models\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'profissao'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function livro() {
        return $this->belongsToMany(Livro::class, 'emprestimos');
    }
}