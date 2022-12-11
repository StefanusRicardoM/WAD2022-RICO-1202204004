<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "table_product";
    use HasFactory;
    public $timestapms = false;

    protected $guarded = ['id'];
    
}
