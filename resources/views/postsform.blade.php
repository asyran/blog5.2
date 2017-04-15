@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-8"><h1>All Post</h1></div>
                    <div class="col-md-4"><span class="pull-right">
                    <a href = "{{route('post.index')}}" class="btn btn-primary">Cancel
                    </a></span></div>
                    </div>
                    </div>

                    @if (count($errors)>0)

                    <div class="alert alert-danger">

                        <ul>
                    @foreach ($errors -> all() as $error)
                            <li>{{$error}}</li>
                    @endforeach
                        </ul>

                    </div>

                    @endif


                <form name="frm" method="post" action="{{route('post.create.save')}}">
                <div class="panel-body">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-10 col-ms-offset-1">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control input-lg">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-10 col-ms-offset-1">
                            <label>Story</label>
                            <textarea name="story" class="form-control" col="5"></textarea>
                        </div>
                    </div>
                </div>
                

                  
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            <button type="submit" class="btn btn-block btn-success">Save</button>
                           
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
