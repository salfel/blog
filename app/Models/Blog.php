<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Blog extends Model
{
    use HasFactory, Searchable;

    public function paragraphs() {
        return $this->hasMany(Paragraph::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function searchableAs() {
        return 'blogs_index';
    }

    public function toSearchableArray() {
        return [
            'title' => '',
            'description' => '',
            'author.name' => '',
            'tags' => ''
        ];
    }


}
