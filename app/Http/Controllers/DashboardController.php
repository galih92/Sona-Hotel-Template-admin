<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function Dashboard1()
	{
		return view('/admin/dashboard.dashboard');
	}

	public function Dashboard()
	{
		return view('pengunjung.dashboard');
	}
}
