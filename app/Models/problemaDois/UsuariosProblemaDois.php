<?php

namespace App\Models\problemaDois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosProblemaDois extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'livro_id',
        'profissao_id'

    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function livro() {
        return $this->hasMany(problemaDois::class) ;
    }
    public function profissao()
    {
        return $this->belongsTo(ProfissaoProblemaDois::class, 'profissao_id');
    }
}