<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['make', 'model', 'year', 'notes', 'owner_id'];

    public function owner() {
        return $this->belongsTo('App\Owner', 'owner_id');
    }
}
