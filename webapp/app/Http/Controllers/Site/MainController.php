<?php

namespace WebApp\Http\Controllers\Site;

use Illuminate\Http\Request;
use WebModules\Todo\TodoList;
use WebApp\Repositories\TodoRepository;
use WebApp\Http\Controllers\Controller;

class MainController extends Controller
{
	public function index()
	{
		return view('pages.main');
	}

	public function todo(TodoRepository $repo, TodoList $todo)
	{
		try{
			$lists = $todo->get();
		}catch(\Exception $e){
	        throw $e;
	    }
	    
	    return response()->json(['success' => 'Success', 'data' => $lists]);
	}
}