<?php

namespace App\Controllers;

class Pages extends BaseController
{
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
		
	}
}
