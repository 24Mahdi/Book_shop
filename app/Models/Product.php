<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['book_name', 'book_description', 'Author', 'lang', 'price', 'Book_section', 'image'];

    public function category()
    {
        return $this->belongsTo(categories::class);
    }
}
