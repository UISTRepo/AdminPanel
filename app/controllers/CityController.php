<?php

class CityController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cities = City::orderBy('id', 'DESC')->get();
		return $cities;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$city = City::create(array(
			'name' => Input::get('name')
		));

		if($city){
			return $city->id;
		}
		else {
			return Response::json(['message'=>'Error while saving new city']);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$city = City::find($id);

		$i=0;
		foreach($city->transporters as $transporter){
			$city['transporters'][$i] = $transporter;
			$i++;
		}

		return Response::json($city);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$city = City::find($id);

		if(!$city)
			return false;

		$city->delete();
	}


}
