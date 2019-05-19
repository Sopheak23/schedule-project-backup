@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Building
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
      <form method="post" action="{{ route('buildings.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Building Name:</label>
              <input type="text" class="form-control" name="building_name"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Total Floors:</label>
              <input type="text" class="form-control" name="total_floors"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Total Rooms:</label>
              <input type="text" class="form-control" name="total_rooms"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Total Rooms per Floor:</label>
              <input type="text" class="form-control" name="total_rooms_per_floor"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
