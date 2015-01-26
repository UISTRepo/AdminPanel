<?php
/**
 * Created by PhpStorm.
 * User: tunte
 * Date: 1/14/15
 * Time: 12:10 PM
 */
class HomeController extends BaseController{

    public function getIndex(){
        return View::make('main.index');
    }

    public function getCitiesByName($name){

        $results = City::where('name', 'LIKE', '%'.$name.'%')->take(20)->get();

        return Response::json($results);

    }

}