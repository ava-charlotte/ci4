<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
    $db = db_connect();
    $query = $db->query('SELECT name, description FROM persons');
    $results = $query->getResult();
    $db->close();

    $data['persons'] = $results;

		return view('pages/home', $data);
	}
}
