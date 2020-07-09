@extends('layouts.app')

@section('content')
    <h1>{{$todo->text}}</h1>
    <div>
    <span class="label label-danger">{{$todo->due}}</span>
    </div>
    <hr/>
    <p>{{$todo->body}}</p>
    <br>
    <br>
    <br>
    <div class="row">
    <div class="col-sm-6">
        <a href="{{url('/todo')}}/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    </div>
    <div class="col-sm-6">
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    </div>
    </div>
@endsection