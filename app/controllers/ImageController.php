<?php

class ImageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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

		$transporter_id = Input::get('transporterId');

		if (Input::hasFile('file')) {

			// upload the file
			$file            = Input::file('file');
			$destinationPath = public_path() . '/docs/' . $transporter_id . '/';
			$filename        = $file->getClientOriginalName();
			$uploadSuccess   = $file->move($destinationPath, $filename);

			if($uploadSuccess){

				$link = URL() . '/docs/' . $transporter_id . '/' . $filename;

				$transporter = Transporter::find($transporter_id);

				$transporter->image_url = $link;
				$transporter->save();

				$response = [
					'message' => 'File uploaded',
					'transporter_id' => $transporter_id,
					'image_url' => $link
				];
				return Response::json($response);


			} else {
				$error['message'] = "Error while saving new image";
				return Response::json($error);
			}

		} else {
			$error['message'] = "Error while saving new image";
			return Response::json($error);
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
		//
	}


}
