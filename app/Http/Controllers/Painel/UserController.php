<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
	private $user;
	public function __construct(user $user) {
		$this->user = $user;
	}
	public function index() {
		$users = $this->user->all();
		return view('painel.users.index', compact('users'));
	}

	public function roles($id)
	{
		//recupera a user
		$user = $this->user->find($id);

		// recuperando permissions
		$roles = $user->roles;

		return view('painel.users.roles', compact('user', 'roles'));

	}
}
