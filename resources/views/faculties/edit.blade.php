@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Faculty
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
      <form method="post" action="{{ route('faculties.update', $faculty->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Faculty Name:</label>
          <input type="text" class="form-control" name="faculty_name" value={{ $faculty->faculty_name }} />
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
