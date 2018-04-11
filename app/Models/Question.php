<?php

namespace Doge\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $table = 'questions';
    
    /**
     * Get list of users who liked the question
     */
    public function likes()
    {
        return $this->hasManyThrough(User::class, Like::class);
    }
    
}
