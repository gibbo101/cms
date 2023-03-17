<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

  public function post() {
    return $this->hasOne('App\Models\Post');
  }

  public function posts() {
    return $this->hasMany('App\Models\Post');
  }

  public function roles() {
    return $this->belongsToMany('App\Models\Role')->withPivot('created_at');
  }

  public function photos() {
    return $this->morphMany('App\Models\Photo', 'imageable');
  }

  public function getNameAttribute($value) {
      return strtoupper($value);
  }

  public function setNameAttribute($value) {
      return $this->attributes['name'] = strtoupper($value);
  }

}
