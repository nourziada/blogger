@extends('layouts.app2')


@section('content')


    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Create New User</div>

        <div class="panel-body">

            <form action="/admin/user" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">User Email</label>
                    <input type="email" name="email" class="form-control">
                </div>


                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit User</button>
                    </div>

                </div>




            </form>
        </div>
    </div>



    <div class="panel panel-default">
        <div class="panel-heading">All Users</div>

        <div class="panel-body">

            <table class="table table-hover">


                <thead>

                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Permission</th>
                <th>Delete</th>
                </thead>


                <tbody>

                <?php $no = 1; ?>

                @if(count($users) > 0)

                    @foreach($users as $user)


                        <tr>

                            <td>

                                {{ $no++ }}

                            </td>

                            <td>

                                <img src="{{ asset($user->profile->avatar) }}" width="60px" height="60px" style="border-radius: 50%">

                            </td>


                            <td>
                                {{ $user->name }}
                            </td>

                            <td>

                                @if($user->admin == 1)

                                    <a href="/admin/user/{{$user->id}}/deleteadmin" class="btn btn-danger">Remove Permission</a>

                                @else

                                    <a href="/admin/user/{{$user->id}}/makeadmin" class="btn btn-success">Make Admin</a>

                                @endif
                            </td>

                            <td>

                                @if(Auth::user()->id !== $user->id)

                                    <form action="/admin/user/{{$user->id}}" method="post">
                                        {{ csrf_field() }}

                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>

                                @endif



                            </td>


                        </tr>




                    @endforeach

                @else

                    <tr>

                        <td colspan="5" class="text-center">There is No Users Add</td>
                    </tr>

                @endif



                </tbody>




            </table>

        </div>

    </div>



@stop