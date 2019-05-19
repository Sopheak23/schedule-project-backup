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
  <div class="card-header">
  Department of {{$departments->department_name}}<br>
  List of Professors
  {{$dept_prof}}
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Professor Name</td>
        </tr>
    </thead>
    <tbody>
      @foreach($dept_prof as $professor)
        <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->professor_name}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
<div>
@endsection
