@extends ('layouts.app2')


@section('content')


    @include('admin.includes.errors')


    <div class="panel panel-default">
        <div class="panel-heading">Update Post {{ $post->title }}</div>

        <div class="panel-body">

            <form action="/admin/post/{{$post->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>


                <div class="form-group">
                    <label for="featured">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"

                                @if($post->category_id == $category->id)

                                    selected

                                @endif

                            > {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-check-label">Select Tag:</label>

                    @foreach($tags as $tag)

                        <div class="checkbox">
                            <label><input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}"

                                @foreach($post->tags as $t)

                                    @if($tag->id == $t->id)

                                        checked

                                    @endif
                                @endforeach


                                > {{$tag->tag}}</label>
                        </div>
                    @endforeach


                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$post->content}}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Post</button>
                    </div>

                </div>




            </form>
        </div>
    </div>

@stop