<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    //use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';
    
    protected $primaryKey = 'id';
    
    protected $connection = 'mysql';
    
    protected $fillable = ['name','email','phone','message'];
}
