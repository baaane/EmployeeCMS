<?php

namespace WebApp\Http\Controllers\Site;

use Illuminate\Http\Request;
use WebModules\Todo\TodoList;
use WebModules\Todo\TodoSave;
use WebModules\Todo\TodoUpdate;
use WebModules\Todo\TodoRemove;
use Library\ImageUploader\ImageUpload;
use WebApp\Repositories\TodoRepository;
use WebApp\Http\Controllers\Controller;

class MainController extends Controller
{
	public function index(TodoList $todo)
	{
		$todo_list = $todo->get()->all();
		return view('pages.main', compact('todo_list'));
	}

	public function todo(Request $request, TodoRepository $repo, TodoList $todo, TodoSave $save, TodoUpdate $edit, TodoRemove $delete)
	{
		if ($request->ajax()){
			$request->merge([
				'data' => [
					'id' => $request->id,
					'todo' => $_POST['todo'],
					'created_date' => now()
				]
			]);

			unset($request->id);
			unset($request->_todo);

			switch ($request->_action) {
				case 'save':
					# code...
					$lists = $todo->action($save);
					break;
				
				case 'edit':
					# code...
					$lists = $todo->action($edit);
					break;

				case 'delete':
					# code...
					$lists = $todo->action($delete);
					break;
				default:
					# code...
					break;
			}
			
			$result = $todo->get();
					    
		    return response()->json(['success' => 'Success', 'data' => $result]);
		}
	}

	public function upload()
	{
		$imageUploader = new ImageUpload();
		$result = $imageUploader->upload('ottakae');

		print_r($result);
	}
}