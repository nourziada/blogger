@extends('layouts.app2')



@section('content')


    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Create New Tag</div>

        <div class="panel-body">

            <form action="/admin/tag" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" name="name" class="form-control">
                </div>



                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit Tag</button>
                    </div>

                </div>




            </form>
        </div>
    </div>



    <div class="panel panel-default">
        <div class="panel-heading">All Tags</div>

        <div class="panel-body">

            <table class="table table-hover">


                <thead>

                <th>No</th>
                <th>Tag Name</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>


                <tbody>

                <?php $no = 1; ?>

                @if(count($tags) > 0)

                    @foreach($tags as $tag)


                        <tr>

                            <td>

                                {{ $no++ }}

                            </td>

                            <td>

                                {{ $tag->tag }}
                            </td>

                            <td>
                                <a href="/admin/tag/{{$tag->id}}/edit" class="btn btn-info"> Edit</a>
                            </td>

                            <td>
                                <form action="/admin/tag/{{$tag->id}}" method="post">
                                    {{ csrf_field() }}

                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                            </td>


                        </tr>




                    @endforeach

                @else

                    <tr>

                        <td colspan="5" class="text-center">There is No Tags Add</td>
                    </tr>

                @endif



                </tbody>




            </table>

        </div>

    </div>



@stop