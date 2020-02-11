<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    public $table = 'videos';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'url',
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function videoComments()
    {
        return $this->hasMany(Comment::class, 'video_id', 'id');
    }
}