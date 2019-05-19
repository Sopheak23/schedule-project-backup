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
    <a href="{{ route('professors.create')}}" class="btn btn-primary">Add Professor</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Professor Name</td>
          <td colspan="3">Actions</td>
          </div>
        </tr>
    </thead>
    <tbody>
        @foreach($professors as $professor)
        <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->professor_name}}</td>
            <td><a href="{{ route('professors.edit',$professor->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('professors.destroy', $professor->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td><a href="{{ route('professors.show',$professor->id)}}" class="btn btn-primary">Depts</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
