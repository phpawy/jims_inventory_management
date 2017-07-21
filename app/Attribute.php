<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo('App\Category', 'categories_id');
    }
    public function mastervalues()
    {
        return $this->hasMany('App\MasterValue', 'attributes_id');
    }

    public function mastervaluesString()
    {
        $mvs = $this->mastervalues;
        $mv_array    = array();
        foreach($mvs AS $mv) {
            $mv_array[] = $mv->master_value;
        }
        $mv_string = @implode(',', $mv_array);
        return $mv_string;
    }
}
