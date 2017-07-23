<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Post;
use Gate;
use App\Http\Controllers\Controller;
class SiteController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view('portal.home.index');
    }

    public function update($idPost )
    {   
        $post = Post::find($idPost);
        // $this->authorize('update-post', $post);
        if(Gate::denies('update-post', $post)){
            abort(403, "sem autrização");
        }
        return view('update-post', compact('post'));
    }

    public function rolesPermissions (){
        // echo Auth::user();
        $nameUser = auth()->user()->name;
        print_r("<h1>{$nameUser}</h1>");
        foreach (auth()->user()->roles as $role) {
            echo $role->name." >  ";

            $permissions = $role->permissions;

            foreach ($permissions as $permission) {
                echo" $permission->name,  "; 
            }
            echo '<hr>';
        }
    }


}
