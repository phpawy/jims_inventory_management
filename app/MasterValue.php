<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterValue extends Model {

    public $timestamps = false;
    protected $table = 'attributes_mastervalues';
    protected $fillable = ['master_value'];

}
