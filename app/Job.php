<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['description', 'trackingNumber', 'status', 'owner_id', 'car_id'];

    public function owner() {
        return $this->belongsTo('App\Owner', 'owner_id');
    }
}
