@extends('layout.main')
@section('title', 'Laravel - ABOUT ME')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$ten['id']}}</h3>
        <h3>Nama_Admin :{{$ten['nama_admin']}}</h3>
      
        <h3>No_Tlp :{{$ten['no_tlp']}}</h3>
    </div>
</div>
@endsection