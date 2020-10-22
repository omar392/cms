@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($category) ? "Edit Or Update The Category" : "Add a New Category" }}
    </div>
    <div class="card-body">
    <form action="{{isset($category) ? route('categories.update',$category->id) : route('categories.store')}}" method="POST">
            @csrf
            @if (isset($category))
            @method("PUT")
            @endif
            <div class="form-group">
                <label for="category">Category Name:</label>
            <input type="text" class="@error('name') isinvalid @enderror form-control" name="name"  placeholder="Add New Category"
             value="{{isset($category) ? $category->name : "" }}">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($category) ? "Update" : "Add" }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection