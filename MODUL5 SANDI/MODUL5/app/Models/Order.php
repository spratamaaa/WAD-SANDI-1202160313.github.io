<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
	public $timestamps = true;
    protected $fillable = [
        'product_id','amount' ,'buyer_name' ,'buyer_contact','created_at' ,'updated_at',
    ];
}
