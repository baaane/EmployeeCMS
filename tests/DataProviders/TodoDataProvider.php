<?php

namespace Tests\DataProviders;

class TodoDataProvider
{
	/**
     * Response data
     *
     * @return array
     */

	public function lists()
	{
		$lists = [
			[
				'id' => 1,
				'todo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat.'
			]
		];

		$lists = json_encode($lists);

		return[
			array($lists)
		];
	}
}