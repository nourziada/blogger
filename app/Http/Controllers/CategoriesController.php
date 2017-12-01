<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Session;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index' ,compact('categories'));
    }



    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|max:255'
        ]);

        $cat = new Category;
        $cat->name = $request->name;
        $cat->save();

        Session::flash('success' , 'Your Category Created Successfully');

        return redirect()->back();
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


    public function edit($id)
    {
        $cat = Category::find($id);

        return view('admin.Categories.edit' , compact('cat'));

    }



    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->save();

        Session::flash('success' , 'Your Category Updated Successfully');


        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        Session::flash('success' , 'Your Category Deleted Successfully');

        return redirect()->back();
    }
}
