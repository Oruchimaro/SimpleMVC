<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $fillable = ['title', 'body'];
}
