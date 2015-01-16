<?php
/**
 * Created by PhpStorm.
 * User: tunte
 * Date: 1/15/15
 * Time: 12:57 PM
 */
class City extends Eloquent {

    protected $guarded = [];

    public function transporters(){

        return $this->belongsToMany('Transporter');
        
    }

}