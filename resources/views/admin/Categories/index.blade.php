@extends('layouts.app')



@section('content')


    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Create New Category</div>

        <div class="panel-body">

            <form action="/admin/category" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>



                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit Category</button>
                    </div>

                </div>




            </form>
        </div>
    </div>



    <div class="panel panel-default">
        <div class="panel-heading">Categories</div>

        <div class="panel-body">

            <table class="table table-hover">


                <thead>

                    <th>No</th>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>


                <tbody>

                    <?php $no = 1; ?>

                    @foreach($categories as $cat)


                        <tr>

                            <td>

                                {{ $no++ }}

                            </td>

                            <td>

                                {{ $cat->name }}
                            </td>

                            <td>
                                <a href="/admin/category/{{$cat->id}}/edit" class="btn btn-info"> Edit</a>
                            </td>

                            <td>
                                <form action="/admin/category/{{$cat->id}}" method="post">
                                    {{ csrf_field() }}

                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                            </td>


                        </tr>




                    @endforeach

                </tbody>




            </table>

        </div>

    </div>



@stop