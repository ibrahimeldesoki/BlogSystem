<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'content',
        'archived_at',
        'publish_at',
        'user_id',
        'category_id'
    ]; 

    
}
