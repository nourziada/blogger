<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $settings = Setting::all()->first();
        $title = Setting::all()->first()->title;
        $categories = Category::take(5)->get();
        $first_post = Post::orderBy('created_at' , 'desc')->first();
        $second_post = Post::orderBy('created_at' , 'desc')->skip(1)->first();
        $third_post = Post::orderBy('created_at' , 'desc')->skip(2)->take(1)->get()->first();

        $first_category = Category::orderBy('created_at' , 'asc')->first();
        $second_category = Category::orderBy('created_at' , 'asc')->skip(1)->first();


        return view('index',compact('settings','title' , 'categories' , 'first_post', 'second_post','third_post','first_category','second_category'));
    }

    public function singlePage($slug){


        $settings = Setting::all()->first();
        $categories = Category::take(5)->get();
        $post = Post::where('slug', $slug)->get()->first();
        $title = $post->title;

        $next_post_id = Post::where('id', '>' , $post->id)->min('id');
        $prev_post_id = Post::where('id' , '<' , $post->id)->max('id');

        $next_post = Post::find($next_post_id);
        $prev_post = Post::find($prev_post_id);
        $tags = Tag::all();

        return view('single',compact('settings' ,'categories' , 'title' ,'post' , 'next_post' , 'prev_post','tags'));
    }


    public function singleCategory($id) {
        $settings = Setting::all()->first();
        $categories = Category::take(5)->get();

        $category = Category::find($id);
        $title = $category->name;

        $posts = Post::where('category_id' , $id)->get();

        return view('category' ,compact('settings' , 'categories' , 'title' ,'category' ,'posts'));
    }
}
