<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocene extends Model
{
    use HasFactory;
    protected $table = 'ocene';
    protected $fillable = ['predmet', 'ocena', 'profesor', 'user_id'];
}
