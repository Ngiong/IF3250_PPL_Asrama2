@extends('layouts.app')

@section('styling')
  <link href="{{ asset('css/announcement.css') }}" rel="stylesheet">
@endsection

@section('content')
    @foreach ($pengumuman as $item)
    <div class ="announcement">
      <h4>{{$item->updated_at}}</h4>
      <h2>{{$item->title}}</h2>
      <br>
      <p>{{$item->isi}}</p>
      <br>
    </div>
    @endforeach;
@endsection
