<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'First_name',
        'Middle_name',
        'Last_name',
        'city',
        'roles_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments() {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function Role() {
        return $this->belongsTo('App\Role');
    }

    public function Companies() {
        return $this->hasMany('App\Company');
    }

    public function Tasks() {
        return $this->belongsToMany('App\Task');
    }

    public function Projects() {
        return $this->belongsToMany('App\Project');
    }

}
