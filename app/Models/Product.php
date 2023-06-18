<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    /**
     * Get the URL for the product's image.
     */
    public function getImageUrl()
    {
        // Assume the product images are stored in the 'public/images/products' directory
        return asset('images/products/' . $this->image);
    }

}
