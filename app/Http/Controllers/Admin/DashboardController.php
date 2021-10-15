<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class DashboardController extends Controller
{
     public function index()
    {
        $user = User::count();
        $post = Post::count();

        return view('pages.admin.dashboard',[
            'user' => $user,
            'post' => $post
         ]);
    }
}
