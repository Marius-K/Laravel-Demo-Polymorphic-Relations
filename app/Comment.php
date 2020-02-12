<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    public $table = 'comments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'body',
        'commentable_id',
        'commentable_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }
}
