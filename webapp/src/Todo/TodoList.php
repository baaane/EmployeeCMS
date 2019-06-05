<?php

namespace WebModules\Todo;

use DB;
use WebModules\Todo\TodoInterface;
use WebApp\Repositories\TodoRepository;

class TodoList
{
	public function action(TodoInterface $exec)
	{
		return $exec->action();
	}

	public function get()
	{
		try{
			$repo = new TodoRepository();
			$result = $repo->query()->get();

			return $result;
		}catch(\Exception $e){
	        throw $e;
	    }
	}
}