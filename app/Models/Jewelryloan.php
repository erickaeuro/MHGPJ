<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewelryloan extends Model
{
    use HasFactory;
    protected $table = "jewelryloan";
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname','address','cpnum','birthdate','valid_id'];
}
