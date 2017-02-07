<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_agency_id', 'car_generation_id', 'car_category_id','seat','door','bag_loadable','air_condition','automatic','net_rate','credit_card_fees','return_slowly','cancellation_before','active'
    ];


    public $timestamps = true;
}
