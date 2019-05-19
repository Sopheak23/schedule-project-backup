@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Building
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
      <form method="post" action="{{ route('buildings.update', $building->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Building Name:</label>
          <input type="text" class="form-control" name="building_name" value={{ $building->building_name }} />
        </div>
        <div class="form-group">
          <label for="price">Total Floors:</label>
          <input type="text" class="form-control" name="total_floors" value={{ $building->total_floors }} />
        </div>
        <div class="form-group">
          <label for="quantity">Total Rooms:</label>
          <input type="text" class="form-control" name="total_rooms" value={{ $building->total_rooms }} />
        </div>
        <div class="form-group">
          <label for="quantity">Total Rooms per Floor:</label>
          <input type="text" class="form-control" name="total_rooms_per_floor" value={{ $building->total_rooms_per_floor }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
