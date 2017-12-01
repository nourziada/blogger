@extends('layouts.app')



@section('content')


    @include('admin.includes.errors')


    <div class="panel panel-default">
        <div class="panel-heading">Update Category: {{ $cat->name }}</div>

        <div class="panel-body">

            <form action="/admin/category/{{ $cat->id }}" method="post" >
                {{ csrf_field() }}

                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$cat->name}}" class="form-control">
                </div>



                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Category</button>
                    </div>

                </div>




            </form>
        </div>
    </div>


@stop