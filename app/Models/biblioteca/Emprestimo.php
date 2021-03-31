<?php

namespace App\Models\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable = [
        'livro_id',
        'usuario_id',
        'entrega',
        'devolucao'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function livro() {
        return $this->belongsToMany(Livro::class, 'livro');
    }

}
