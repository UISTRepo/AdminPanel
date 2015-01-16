<?php
/**
 * Created by PhpStorm.
 * User: tunte
 * Date: 1/16/15
 * Time: 10:40 AM
 */
class Trip extends Eloquent{

    protected $guarded = [];

    public function city(){

        return $this->belongsTo('City');

    }

    public function transporter(){

        return $this->belongsTo('Transporter');

    }

}