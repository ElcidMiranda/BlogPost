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

    public function scopeFilter($query, array $filters){
        if ($filters['tag'] ?? false) {
            $query->where('category_id','like','%' .request('tag').'%');
            # code...
        };

        if ($filters['search'] ?? false) {
            $query->where('Title','like','%' .request('search').'%');
            # code...
        };

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
