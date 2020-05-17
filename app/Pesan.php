<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = [
        'konten','inisial','id_tema'
    ];
    
    protected $attributes = [
        'is_checked' => false,
    ];
}
