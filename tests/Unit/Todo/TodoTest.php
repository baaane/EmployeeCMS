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
}
