<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;
    // los datos o campos que aceptara del formulario hacia la bd
    protected $fillable = ['title', 'description', 'age'];
}
