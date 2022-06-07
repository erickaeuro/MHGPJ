<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;
    protected $table = "stocks";
    protected $primaryKey = 'id';
    protected $fillable = ['item_type','karat_gold','kind_of_stone','weight','tag_price','amount'];
}


