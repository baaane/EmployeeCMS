<?php

namespace WebApp\Repositories;

use DB;

class TodoRepository
{
	/**
     * Query of wishlist
     */
    public function query()
    {
    	$details = DB::table('todo')
                		->select('*');
      	return $details;
    }
}