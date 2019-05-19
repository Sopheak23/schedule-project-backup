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
    <a href="{{ route('buildings.create')}}" class="btn btn-primary">Add Building</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Building Name</td>
          <td>Total Floors</td>
          <td>Total Rooms</td>
          <td>Total Rooms per Floor</td>
          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($buildings as $building)
        <tr>
            <td>{{$building->id}}</td>
            <td>{{$building->building_name}}</td>
            <td>{{$building->total_floors}}</td>
            <td>{{$building->total_rooms}}</td>
            <td>{{$building->total_rooms_per_floor}}</td>
            <td><a href="{{ route('buildings.edit',$building->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('buildings.destroy', $building->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td><a href="{{ route('buildings.show',$building->id)}}" class="btn btn-primary">Rooms</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
