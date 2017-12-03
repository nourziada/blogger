@extends('layouts.app2')



@section('content')


    @include('admin.includes.errors')


    <div class="panel panel-default">
        <div class="panel-heading">Update Tag: {{ $tag->tag }}</div>

        <div class="panel-body">

            <form action="/admin/tag/{{ $tag->id }}" method="post" >
                {{ csrf_field() }}

                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" name="name" value="{{$tag->tag}}" class="form-control">
                </div>



                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Tag</button>
                    </div>

                </div>




            </form>
        </div>
    </div>


@stop