@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Task table</div>

                <div class="panel-body">
                <a href="manha/create"class="btn btn-primary">Add New</a>
                <table class="table table-bordered table-responsive" style="margin-top: 10px">
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->body}}</td>
                        <td>
                            <a href=" {{route('manha.edit',$task->id)}}" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
