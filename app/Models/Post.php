<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $directory = "/images/";

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'path'];

    protected $date = ['deleted_at'];

    public function user() {
      return $this->belongsTo('App\Models\User');
    }

    public function photos() {
      return $this->morphMany('App\Models\Photo', 'imageable');
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
      return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    public function getPathAttribute($value) {
        return $this->directory . $value;
    }

}
