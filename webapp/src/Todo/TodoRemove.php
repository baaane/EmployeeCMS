<?php

namespace WebModules\Todo;

use DB;
use Illuminate\Http\Request;
use WebModules\Todo\TodoInterface;

class TodoRemove implements TodoInterface
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
                    $delete = DB::table('todo')
                        ->where('id', '=', $this->data['id'])
                        ->delete();
                });

            }catch(\Exception $e){
                throw $e;
            }
        }

        return true;
	}
}