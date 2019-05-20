<?php

namespace WebApp\Http\Controllers\Site;

use WebApp\Http\Controllers\Controller;

class MainController extends Controller
{
	public function index()
	{
		return view('pages.main');
	}
}