<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "location", "date", "num_places", "validation",  "status", "image", "category_id", "user_id"];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
