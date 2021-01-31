<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['content'] = view('pages/home');

		return view('layout', $data);
	}
}
