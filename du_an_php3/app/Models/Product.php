<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table= 'product';
    protected $fillable = ['id','name','price','number','color','img','size','cpu','ram','rom','pin','company','id_category','status'];
}
