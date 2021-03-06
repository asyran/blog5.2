@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (Session::has('success'))
            <div class="alert alert-success">{{
                Session('success')
                }}
                
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-8"><h1>All Post</h1></div>
                    <div class="col-md-4"><span class="pull-right">
                    <a href = "{{route('post.create')}}" class="btn btn-primary">Create Post
                    </a></span></div>
                    </div>
                    </div>


                <div class="panel-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Udated</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ($postview as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td>
                            <div class="btn-group">
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-sm btn-default" style="background-color:pink"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                            <a href="{{route('post.delete',$post->id)}}" class="btn btn-sm btn-default" style="background-color:red"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                            </div>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
