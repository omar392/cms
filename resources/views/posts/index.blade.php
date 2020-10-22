@extends('layouts.app')
@section('content')
<div class="clearfix">
<a href="{{route('posts.create')}}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Post</a>
</div>
    <div class="card card-default">
        <div class="card-header">All Posts</div>
       
        

            <table class="table">
                <tbody>
                    @foreach ($posts as $post) 
                    <tr>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            <form class="float-right ml-2" action="{{route('posts.destroy',$post->id)}}" method="POST">
                            @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary float-right btn-sm">Edit</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

    </div>
@endsection