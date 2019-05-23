<?php

namespace WebModules\Todo;

use DB;
use Illuminate\Http\Request;
use WebModules\Todo\TodoInterface;

class TodoSave implements TodoInterface
{
	public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Execute save function
     * 
     * @return true
     * 
     */
	public function action()
	{
		$data_request = $this->request->all();
        // dd($data_request);
        return $this->store($data_request['data']);
	}

	/**
     * Insert data inside table
     *
     * @param array $data
     * 
     * @return true
     * 
     * @throws \Exception
     */
	public function store($data)
	{
		if($data)
        {
            $this->data = $data;
            try{
                DB::transaction(function () 
                {
                    $insert = DB::table('todo')->insert($this->data);
                });

            }catch(\Exception $e){
                throw $e;
            }
        }

        return true;
	}
}