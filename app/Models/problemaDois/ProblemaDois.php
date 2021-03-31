<?php

namespace App\Models\problemaDois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemaDois extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_do_livro',
        'quantidade'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usuario() {
        return $this->hasOne(UsuariosProblemaDois::class, 'livro_id');
    }
}
