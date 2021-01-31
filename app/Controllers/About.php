<?php namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data['content'] = view('pages/about');

		return view('layout', $data);
	}
}
