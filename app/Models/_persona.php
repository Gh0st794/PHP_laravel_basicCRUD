<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _persona extends Model
{
    protected $table = '_persona';
    protected $primarykey = 'id';
    protected $fillable = ['primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'cedula', 'fechanacimiento'];    
}
