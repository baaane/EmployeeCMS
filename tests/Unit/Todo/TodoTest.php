<?php

use Tests\TestCase;

class TodoTest extends TestCase
{

	/**
	 * @test
	 */
	public function it_should_print_hello()
	{
		$print = 'hello world!';

		if(strpos($print, 'hello') !== false)
		{
			$result = true;
		}

		$this->assertTrue($result);
	}

	/**
	 * @test
	 * @dataProvider Tests\DataProviders\TodoDataProvider::lists()
	 */
	public function it_should_get_todo_list($lists)
	{
		$lists = json_decode($lists);
		$this->assertTrue(count($lists) > 0);
	}
}
