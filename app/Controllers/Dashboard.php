<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard'
		];

		return view('/dashboard/index', $data);
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		$session->setFlashdata('pesan', 'Anda berhasil logout');
		return redirect()->to('/auth/login');
	}

	//--------------------------------------------------------------------

}
