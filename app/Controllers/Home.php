<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Landing page'
		];

		return view('beranda/index', $data);
	}

	//--------------------------------------------------------------------

}
