@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        Add A New Post
    </div>
    <div class="card-body">
    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="post title"> Title:</label>
            <input type="text" class="form-control" name="title"  placeholder="Add New Post">

            </div>
            
            <div class="form-group">
                <label for="post description"> Description:</label>
           <textarea class="form-control"  rows="2" name="description" placeholder="Add The Description"></textarea>

            </div>
            
            <div class="form-group">
                <label for="post content"> Content:</label>
                <textarea class="form-control"  rows="4" name="content" placeholder="Add The Content"></textarea>

            </div>
            
            <div class="form-group">
                <label for="post image"> Image:</label>
            <input type="file" class="form-control"  name="image">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>
@endsection