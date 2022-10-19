
@extends('main')

@section('container')

<h1 class="text-center text-secondary">Daftar Dosen Kampus Unsika</h1>

<div class="row py-5">
  @foreach ($data as $baris)
    <div class="py-2 col-md-6 ">
      <div class="list-group-item text-center bg-light"> {{$baris->nama}} </div>
    </div>
  @endforeach
</div>

@endsection