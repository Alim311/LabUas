<?php

namespace App\Controllers;

use App\Models\ModelLaporanWarga;

class laporantr extends BaseController
{
	public function index()
	{
		$warga = new ModelLaporanWarga();
		$data = [
			'tampildata' => $warga->tampildata()->getResult()
		];


		echo view('datawarga/laporanwarga', $data);
	}

	public function jumlahkas()
	{
		$warga = new ModelLaporanWarga();
		$data = [
			'tampildata' => $warga->tampilkas()->getResult()
		];

		echo view('datawarga/jumlahkas', $data);
	}
}
