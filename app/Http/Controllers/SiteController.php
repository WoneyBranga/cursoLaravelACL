<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Gate;
class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $post)
    {
        return view('portal.home.index');
    }

    public function update($idPost)
    {
        $post = Post::find($idPost);

        //$this->authorize('update-post', $post);
        //OU...

        if(Gate::denies('update-post', $post))
            abort(403,'Ops, Unauthorized!');

        return view('update-post', compact('post'));
    }

    public function rolesPermissions()
    {
        $nameUser = auth()->user()->name;
        echo "<H1>$nameUser</H1>";
        echo "<hr>";
        foreach ( auth()->user()->roles as $role) {
            echo $role->name;
            foreach ($role->permissions as $permission) {
                echo $permission->name;
            }

        }
    }
}
