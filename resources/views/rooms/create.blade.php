@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Room
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
      <form method="post" action="{{ route('rooms.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Room Name:</label>
              <input type="text" class="form-control" name="room_name"/>
              <label for="name">Total Students:</label>
              <input type="text" class="form-control" name="total_students"/>
              <input type="hidden" name="building_id" value={{$building_id}}>
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
