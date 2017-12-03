@extends('layouts.app2')



@section('content')


    @include('admin.includes.errors')




    <div class="panel panel-default">
        <div class="panel-heading">All Trashed Posts</div>

        <div class="panel-body">

            <table class="table table-hover">


                <thead>

                <th>No</th>
                <th>Image</th>
                <th>Post Title</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Restore</th>
                <th>Delete</th>
                </thead>


                <tbody>

                <?php $no = 1; ?>

                @if(count($posts) > 0)

                    @foreach($posts as $post)


                        <tr>

                            <td>

                                {{ $no++ }}

                            </td>

                            <td>

                                <img src="{{ $post->featured }}" width="50px" height="50px">
                            </td>

                            <td>

                                {{ $post->title }}
                            </td>


                            <td>

                                {{  \App\Category::find($post->category_id)->name }}
                            </td>

                            <td>
                                <a href="/admin/post/{{$post->id}}/edit" class="btn btn-info"> Edit</a>
                            </td>

                            <td>
                                <a href="/admin/post/trash/{{$post->id}}/restore" class="btn btn-success"> Restore</a>
                            </td>

                            <td>

                                <a href="/admin/post/trash/{{$post->id}}/delete" class="btn btn-danger">Delete</a>


                            </td>


                        </tr>




                    @endforeach

                @else

                    <tr>

                        <td colspan="7" class="text-center">There is No Trash Posts</td>
                    </tr>

                @endif



                </tbody>




            </table>

        </div>

    </div>



@stop