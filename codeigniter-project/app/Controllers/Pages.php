<?php

namespace App\Controllers;

class Pages extends BaseController
{
	private $validation = null;

	public function __construct()
	{
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		$data = [
			"title" => "home"
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			"title" => "about",
			"alamat" => [
				"type" => "rumah",
				"alamat" => "jalan hahaha",
				"no telp" => "0812931219"
			]
		];
		echo view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			"title" => "contact"
		];
		return view('pages/contact',$data);
	}

	public function contact_post()
	{
		//var_dump($this->request->getPost());
		$validData = $this->validation->run($this->request->getPost(), 'contact');
		//dd($validData, $this->validation->getError());
		$isError = false;
		$errorMessage = [];
		$data = [
			"title" => "contact",
			'error' => ['isError' => $isError, 'errorMessage' => $errorMessage]
		];
		if ($validData == false) {
			$isError = true;
			$errorMessage = $this->validation->getError();
			return view('pages/contact',$data);
			//$data['isError'] = $isError;
			//$data['errorMessage'] = $errorMessage;
			$data['error'] = ['isError' => $isError, 'errorMessage' => $errorMessage];
		}
	}
}
