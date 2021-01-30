<?php namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data['title'] = 'About - ci4';

		echo view('templates/header', $data);
		echo view('about');
		echo view('templates/footer');
	}
}
