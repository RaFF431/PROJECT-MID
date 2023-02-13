@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Employee Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $students->name }}</h5>
        <p class="card-title">umur : {{ $students->age }}</p>
        <p class="card-text">Alamat : {{ $students->address }}</p>
        <p class="card-text">No. telp : {{ $students->mobile }}</p>
  </div>
      
    <hr>
  
  </div>
</div>