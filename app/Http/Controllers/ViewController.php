<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
	public function dashboard()
	{
		return view('pengunjung.dashboard');
	}
	public function room()
	{
		return view('pengunjung.room');
	}
	public function about()
	{
		return view('pengunjung.about');
	}
	public function news()
	{
		return view('pengunjung.news');
	}
	public function detail_news()
	{
		return view('pengunjung.detail_news');
	}

	public function galery()
	{
		return view('pengunjung.galery');
	}
	public function contact()
	{
		return view('pengunjung.contact');
	}
}
