<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::with(['user'])->orderBy('created_at','desc')->paginate(5);
        $users = User::get();


        return view('pages.dashboard',[
            'categories' => $categories,
            'posts' => $posts,
            'users'=> $users
        ]);
    }
    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::with(['user'])->orderBy('created_at','desc')->where('categories_id', $category->id)->paginate(5);
        $users = User::get();
        
        return view('pages.dashboard',[
            'categories' => $categories,
            'posts' => $posts,
            'users'=> $users
        ]);
    }
      public function detailPost(Request $request, $id)
    {
        $posts = Post::with(['user'])->where('id', $id)->firstOrFail();
        $users = User::get();
        
        return view('pages.detail',[
            'posts' => $posts,
            'users'=> $users
        ]);
    }
}
