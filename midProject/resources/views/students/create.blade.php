@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="/GET">
        {!! csrf_field() !!}
        <label>Name</label>
    <br>

    <input type="text" name="age" id="age"  class="form-control">
    <br>

        <label>Umur</label>
    <br>
    <input type="number" name="age" id="age"  class="form-control">
    <br>

        <label>Alamat</label>
    <br>
    <input type="text" name="address" id="address" class="form-control">
    <br>

        

        <label>No. telp</label>
    <br>
    <input type="text" name="mobile" id="mobile"  class="form-control">
    <br>

    
        <input type="submit" value="Save" class="btn btn-success">
    <br>

    </form>
  
  </div>
</div>
@stop