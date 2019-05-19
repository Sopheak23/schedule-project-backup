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
    {{$subjects->subject_name}}<br>
    {{$classes}}
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Department Name</td>
          <td colspan="3">Actions</td>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
  </table>
<div>
@endsection
