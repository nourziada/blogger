@extends('layouts.app2')



@section('content')


    @include('admin.includes.errors')




    <div class="panel panel-default">
        <div class="panel-heading">All Posts</div>

        <div class="panel-body">

            <table class="table table-hover">


                <thead>

                <th>No</th>
                <th>Image</th>
                <th>Post Title</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Trash</th>
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
                                <form action="/admin/post/{{$post->id}}" method="post">
                                    {{ csrf_field() }}

                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Trash</button>
                                </form>

                            </td>


                        </tr>




                    @endforeach

                @else

                    <tr>

                        <td colspan="5" class="text-center">There is No Posts Add</td>
                    </tr>
                @endif


                </tbody>




            </table>

        </div>

    </div>



@stop