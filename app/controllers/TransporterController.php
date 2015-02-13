<?php

class TransporterController extends \BaseController {

	function __construct()
	{

		$this->beforeFilter('auth.basic',['on'=>['post','put','delete']]);

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transporters = Transporter::orderBy('id', 'DESC')->get();
		return $transporters;
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
		$transporter = Transporter::create(array(
			'name' => Input::get('name'),
			'phone' => Input::get('phone'),
			'info' => Input::get('info')
		));

		if($transporter){
			return $transporter->id;
		}
		else {
			return Response::json(['message'=>'Error while saving new transporter']);
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

		$transporter = Transporter::find($id);

		$transporter->cities;

		return Response::json($transporter);

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
		$transporter = Transporter::find($id);

		if(!$transporter)
			return false;

		$transporter->delete();
	}


}
