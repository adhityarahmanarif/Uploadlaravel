<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaseeders extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'npm',
        'nama',
        'alamat',
        'no_hp',
    ];

}
