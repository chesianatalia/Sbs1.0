<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // var_dump( Auth::user()->id);
        $categories = Category::all();
        $posts = Post::with(['user'])->where('user_id', Auth::user()->id)->get();
        $users = User::get();
        

        return view('pages.profile',[
            'categories' => $categories,
            'posts' => $posts,
            'users'=> $users
        ]);
    }

    }
