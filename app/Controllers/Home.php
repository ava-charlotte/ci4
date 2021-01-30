<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Home - ci4';

		echo view('templates/header', $data);
		echo view('home');
		echo view('templates/footer');
	}
}
