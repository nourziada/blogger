<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $posts_number = $posts->count();

        $trashed = Post::onlyTrashed()->get();
        $trashed_number = $trashed->count();

        $categories = Category::all();
        $categories_number = $categories->count();

        $users = User::all();
        $users_number = $users->count();

        return view('home' ,compact('posts_number' , 'trashed_number' , 'categories_number', 'users_number'));
    }
}
