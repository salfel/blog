<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function paragraphs()
    {
        return $this->hasMany(Paragraph::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
