<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Session;
use Auth;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('admin.posts.index' ,compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        if(count($categories) == 0) {
            Session::flash('info', 'you must have some Categories');

            return redirect()->route('category.index');
        }elseif ( count($tags) == 0){
            Session::flash('info', 'you must have some Tags');

            return redirect()->route('tag.index');
        }


        return view('admin.posts.create' ,compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [

            'title' => 'required|max:255',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'


        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts' , $featured_new_name);



        $post = new Post;
        $post->title = $request->title;
        $post->featured = '/uploads/posts/' . $featured_new_name;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->user_id = Auth::user()->id;

        $post->save();

        $post->tags()->attach($request->tags);

        Session::flash('success', 'Your post Created Successfuly');

        return redirect()->route('post.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::withTrashed()->find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit' , compact('post' , 'categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::withTrashed()->find($id);


        $this->validate($request,[
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        if($request->hasFile('featured')){
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads/posts' , $featured_new_name);

            $post->featured = '/uploads/posts/' . $featured_new_name;
        }




        /*  Code of Content to get the summernot  */

        $detail=$request->input('content');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type,$data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/uploads/posts/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $detail = $dom->saveHTML();

        /* End Code of Upload Image  */


        $post->title = $request->title;
        $post->content = $detail;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->save();

        Session::flash('success', 'Your post Updated Successfuly');

        $post->tags()->sync($request->tags);

        if($post->deleted_at == null) {


        return redirect()->route('post.index');
        }

        return redirect()->route('posts.trash');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Post::find($id)->delete();
        Session::flash('success', 'Your post move to Trash Successfuly');

        return redirect()->back();



    }

    public function trash(){
        $posts = Post::onlyTrashed()->get();
        $categories = Category::all();
        return view('admin.posts.trash' ,compact('posts','categories'));
    }

    public function Forcedelete($id) {
        Post::onlyTrashed()->find($id)->forceDelete();

        Session::flash('success', 'Your post Deleted Successfuly');

        return redirect()->back();


    }

    public function restore($id){
        Post::onlyTrashed()->find($id)->restore();

        Session::flash('success', 'Your post Restore Successfuly');

        return redirect()->back();
    }


    public function uploadImage(Request $request)
    {
        // A list of permitted file extensions
        if(empty($_FILES['file']))
        {
            exit();
        }
        $errorImgFile = public_path()."/uploads/img/img_upload_error.jpg";
        $destinationFilePath = public_path().'/uploads/posts/'.$_FILES['file']['name'];
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
            echo $errorImgFile;
        }
        else{
            echo url('/').'/public/uploads/posts/'.$_FILES['file']['name'];
        }
    }
}
