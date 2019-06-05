<?php

namespace WebModules\Todo;

use DB;
use Illuminate\Http\Request;
use WebModules\Todo\TodoInterface;

class TodoUpdate implements TodoInterface
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
                    $update = DB::table('todo')
                        ->where('id', '=', $this->data['id'])
                        ->update($this->data);
                });

            }catch(\Exception $e){
                throw $e;
            }
        }

        return true;
	}
}