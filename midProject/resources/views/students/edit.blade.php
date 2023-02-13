@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">#</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>id</label>
    <br>

        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
    <br>

        <label>Nama</label>
    <br>

        <input type="text" name="address" id="address" value="{{$students->age}}" class="form-control"></br>
    <br>

        <label>Umur</label>
    <br>

        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
    <br>

        <label>Alamat</label>
    <br>

        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
    <br>
        <label>No. telp</label>

    <br>

        <input type="submit" value="Update" class="btn btn-success">
    <br>

    </form>
  
  </div>
</div>
@stop