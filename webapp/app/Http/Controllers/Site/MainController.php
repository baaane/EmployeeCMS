<?php

namespace WebApp\Http\Controllers\Site;

use Illuminate\Http\Request;
use WebModules\Todo\TodoList;
use WebModules\Todo\TodoSave;
use WebApp\Repositories\TodoRepository;
use WebApp\Http\Controllers\Controller;

class MainController extends Controller
{
	public function index(TodoList $todo)
	{
		$todo_list = $todo->get()->all();
		return view('pages.main', compact('todo_list'));
	}

	public function todo(Request $request, TodoRepository $repo, TodoList $todo, TodoSave $save)
	{
		if ($request->ajax()){
			$request->merge([
				'data' => [
						'todo' => $_POST['todo'],
						'created_date' => now()
					]
				]
			);
			$lists = $todo->action($save);
			$result = $todo->get();
					    
		    return response()->json(['success' => 'Success', 'data' => $result]);
		}
	}
}