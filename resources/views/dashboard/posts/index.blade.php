@extends('dashboard.layout.master')

@section('content')
  <h1>All posts</h1>
  @foreach($messages as $message)
  <div class="card mt-4">
    <div class="card-body">
      <h2>
        <a href="{{route('messages.show', $message->id)}}">
          {{$message->title}}
        </a>
        <a href="{{route('messages.edit', $message->id)}}" class="btn btn-info">Edit</a>
        <form onsubmit="return confirm('Are you sure you want to delete this post?')" class="d-inline-block" method="post" action="{{route('messages.destroy', $message->id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </h2>

    </div>
  </div>
  @endforeach
  <div class="mt-4">
    {{$messages->links()}}
  </div>
@endsection
