<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukutamu extends Model
{
    use HasFactory;
    protected $table = "bukutamu";
    protected $primaryKey = 'id';
    protected $fillable = ['namatamu', 'jabatantamu', 'tanggal', 'tujuan'];
}
