<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use Gate;
class PermissionController extends Controller
{
	private $permission;
	public function __construct(Permission $permission) {
		$this->permission = $permission;
		if(Gate::denies('adm'))
    		return abort(403, 'nem vem ');
	}



	public function index() {
		$permissions = $this->permission->all();

	
		return view('painel.permissions.index', compact('permissions'));

	}

	public function roles($id)
	{
		//recupera a role
		$permission = $this->permission->find($id);

		// recuperando permissions
		$roles = $permission->roles;

		return view('painel.permissions.roles', compact('permission', 'roles'));

	}
}
