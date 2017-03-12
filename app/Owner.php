<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name', 'email', 'phoneNumber'];

    public function jobs() {
        return $this->hasMany('App\Job', 'owner_id');
    }
}
