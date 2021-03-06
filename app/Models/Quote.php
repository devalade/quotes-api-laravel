<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'author',
        'content',
        'category_id'
    ];
    public function category() 
    {
        return $this->hasOne(Category::class);
    }
}
