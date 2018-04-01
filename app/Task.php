<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    protected $fillable = [
        'name',
        'project_id',
        'hours',
        'company_id',
        'user_id',
        'days',
    ];

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function Project() {
        return $this->belongsTo('App\Project');
    }

    public function Company() {
        return $this->belongsTo('App\Company');
    }

    public function Users() {
        return $this->belongsToMany('App\User');
    }
    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

}
