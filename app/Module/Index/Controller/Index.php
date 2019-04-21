<?php
namespace App\Module\Index\Controller;

use App\Model\User;

class Index {
	private $user;

	// DI Example
	public function __construct(User $user) {
		$this->user = $user;
	}

	public function IndexAction($request, $response) {
		$response->assign('message', 'Hello, Yesf!');
	}
}