@extends('dashboard.layout.master')
@section('content')
<div class="card">
  <div class="card-header">
    <h2>{{$message->title}}</h2>
  </div>
  <div class="card-body">
    <p>
      {{$message->body}}
    </p>
    <a href="{{route('messages.edit', $message->id)}}" class="btn btn-info">Edit</a>
        <form onsubmit="return confirm('Are you sure you want to delete this post?')" class="d-inline-block" method="post" action="{{route('messages.destroy', $message->id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
  </div>
</div>
@stop