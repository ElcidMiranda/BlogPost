<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
    'Title',
    'Author',
    'category_id',
    'Content',
    'imagePath',
    'isPublished'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
