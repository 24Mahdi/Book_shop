<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class shoppinCcarts extends Model
{
    use HasFactory;
    protected $guarded = [];



    use SoftDeletes;

    protected $fillable = ['book_name', 'image', 'price', 'quantity', 'total', 'shipping', 'governorate', 'phone', 'finaltotal'];

    protected $dates = ['deleted_at'];
}
