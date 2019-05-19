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
    <a href="{{ route('faculties.create')}}" class="btn btn-primary">Add Faculty</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Faculty Name</td>
          <td colspan="3">Actions</td>
          </div>
        </tr>
    </thead>
    <tbody>
        @foreach($faculties as $faculty)
        <tr>
            <td>{{$faculty->id}}</td>
            <td>{{$faculty->faculty_name}}</td>
            <td><a href="{{ route('faculties.edit',$faculty->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('faculties.destroy', $faculty->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td><a href="{{ route('faculties.show',$faculty->id)}}" class="btn btn-primary">Depts</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
