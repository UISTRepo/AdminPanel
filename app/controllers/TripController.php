<?php

class TripController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$trips = Trip::orderBy('id', 'DESC')->get();

		$i = 0;

		foreach($trips as $trip){
			$trips[$i]['city'] = $trip->city->name;
			$trips[$i]['transporter'] = $trip->transporter->name;
			$i++;
		}

		return Response::json($trips);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$results = DB::table('city_transporter')
			->select('*')
			->where('city_id',Input::get('city_id'))
			->where('transporter_id',Input::get('transporter_id'))
			->get();

		if(!$results){
			$id = DB::table('city_transporter')->insertGetId(
				array(
					'city_id' => Input::get('city_id'),
					'transporter_id' => Input::get('transporter_id')
				)
			);
		}

		$trip = Trip::create(array(
			'city_id' => Input::get('city_id'),
			'transporter_id' => Input::get('transporter_id'),
			'time' => Input::get('time'),
			'price' => Input::get('price'),
			'seats' => Input::get('seats'),
		));

		if($trip){
			$trip['city'] = $trip->city->name;
			$trip['transporter'] = $trip->transporter->name;
			return $trip;
		}
		else {
			return Response::json(['message'=>'Error while saving new trip']);
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
		//
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
		$trip = Trip::find($id);

		if(!$trip)
			return false;

		$city_id = $trip->city_id;
		$transporter_id = $trip->transporter_id;

		$trip->delete();

		// check if this is the last trip with city_id and transporter_id
		// if it is delete the row from city_transporter
		$results = DB::table('trips')
			->select('*')
			->where('city_id',$city_id)
			->where('transporter_id',$transporter_id)
			->get();

		if(!$results){
			DB::table('city_transporter')
				->where('city_id', $city_id)
				->where('transporter_id', $transporter_id)
				->delete();
		}
	}


}
