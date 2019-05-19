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
    <a href="{{ route('subjects.create')}}" class="btn btn-primary">Add Subject</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Subject Name</td>
          <td colspan="2">Actions</td>
          </div>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->subject_name}}</td>
            <td><a href="{{ route('subjects.edit',$subject->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('subjects.destroy', $subject->id)}}" method="post">
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
