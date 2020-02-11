<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'body',
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function postComments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
