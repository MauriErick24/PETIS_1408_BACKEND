<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    public function eventos()
    {
        return $this->belongsToMany(Evento::class);
    }
}
