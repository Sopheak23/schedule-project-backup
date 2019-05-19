@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Room
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('rooms.update', $room->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Room Name:</label>
          <input type="text" class="form-control" name="room_name" value={{ $room->room_name }} />
          <label for="name">Total Students:</label>
          <input type="text" class="form-control" name="total_students" value={{ $room->total_students }} />
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
