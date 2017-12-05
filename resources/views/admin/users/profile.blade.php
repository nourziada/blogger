@extends ('layouts.app2')


@section('content')


    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Update Profile</div>

        <div class="panel-body">

            <form action="/admin/profile/{{$user->profile->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="title">User Name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Upload New Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Facebook</label>
                    <input type="text" name="facebook" value="{{$user->profile->facebook}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">YoutTube</label>
                    <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Twitter</label>
                    <input type="text" name="twitter" value="{{$user->profile->twitter}}" class="form-control">
                </div>



                <div class="form-group">
                    <label for="content">About You</label>
                    <textarea name="about" id="content" cols="5" rows="5" class="form-control">
                        {{$user->profile->about}}
                    </textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>

                </div>




            </form>
        </div>
    </div>

@stop