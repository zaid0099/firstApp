<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];

    public function tweets()
    {
        return $this->BelongsTo(Tweet::class);
    }
}
