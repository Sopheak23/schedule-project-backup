@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div>
    <a href="{{ route('rooms.create')}}" class="btn btn-primary">Add Room</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Room Name</td>
          <td>Total Student</td>
          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{$room->id}}</td>
            <td>{{$room->room_name}}</td>
            <td>{{$room->total_students}}</td>
            <td><a href="{{ route('rooms.edit',$room->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('rooms.destroy', $room->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
