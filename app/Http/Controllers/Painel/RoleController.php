<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
    private $role;
	public function __construct(role $role) {
		$this->role = $role;
	}
	public function index() {
		$roles = $this->role->all();
		return view('painel.roles.index', compact('roles'));
	}

	public function permissions($id)
	{
		//recupera a role
		$role = $this->role->find($id);

		// recuperando permissions
		$permissions = $role->permissions;

		return view('painel.roles.permissions', compact('role', 'permissions'));

	}
}
