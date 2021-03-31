<?php

namespace App\Models\problemaDois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfissaoProblemaDois extends Model
{
    use HasFactory;
    protected $fillable = [
        'profissao',
        'quantidade'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function usuario()
    {
        return $this->hasMany(UsuariosProblemaDois::class, 'profissao_id');
    }
}
