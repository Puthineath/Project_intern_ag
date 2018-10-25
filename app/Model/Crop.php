<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Crop extends Model
{
    //
    protected $table = 'crops';
    protected $fillable = ['crop_name','season_name','process','season_manager','started_date','end_date','description','crop_image'];
}
