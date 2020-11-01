<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug','featured', 'photo', 'intro', 'body1',  'body2', 'body3', 'body4', 'body5', 'image1', 'image2', 'image3', 'image4', 'image5','category_id', 'user_id'];

public function user() {

    return $this->belongsTo(User::class);
}

public function category() {

    return $this->belongsTo(Category::class);
}

public function tags() {

    return $this->belongsToMany(Tag::class);
}

}
