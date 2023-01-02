<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = 'tb_customer';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['customer_name', 'phone_number', 'address','city'];

}
