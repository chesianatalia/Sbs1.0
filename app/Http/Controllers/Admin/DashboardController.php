<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
class DashboardController extends Controller
{
     public function index()
    {
        $user = User::count();
        $post = Post::count();
        $categories = Category::all();
        $posts = Post::with(['user'])->paginate(5);
        $users = User::get();


        return view('pages.admin.dashboard',[
            'user' => $user,
            'post' => $post,
            'categories' => $categories,
            'posts' => $posts,
            'users'=> $users
         ]);
    }
}
