@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>

                <div class="panel-body">
                 <!-- <form action="" method="post" class="form-horizontal"> -->
                        {!! Form::open(['url' => 'manha' , 'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                         <!-- <label for="title" class="control-label col-md-2">Title</label> -->
                         {!!Form::label('title','Title',['class'=>'control-label col-md-2'])!!}
                         <div class="col-md-2">
                             <!-- <input type="text" name="title" class="form-control"> -->
                             {!!Form::text('title',null,['class'=>'form-control'])!!}
                              {!! $errors->has('title')?$errors->first('title'): '' !!}
                        </div> 
                     </div>

                     <div class="form-group">
                        <!--  <label for="description" class="control-label col-md-2">Body</label> -->
                        {!!Form::label('description','Body',['class'=>'control-label col-md-2'])!!}
                         <div class="col-md-2">
                          {!!Form::textarea('body',null,['class'=>'form-control'])!!}
                          {!! $errors->has('body')?$errors->first('body'): '' !!}
                             <!-- <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea> -->
                         </div>
                     </div>

                     <div class="form-group">
                        <form action="" method="post" class="form-horizontal">
                         <div class="col-md-offset 2 col-md-10">
                             <!-- <input type="submit" name="submit" value="submit" class="btn btn-success"> -->
                              {!!Form::submit('save',['class'=>'btn btn-primary'])!!}
                         </div>
                     </div>
                    
                <!-- </form> -->
                {!! Form::close() !!}
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
