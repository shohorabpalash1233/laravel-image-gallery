@extends('layouts.main')

@section('content')
	<div class="container">

      <h1 class="my-4 text-center text-lg-left">{{$photo->title}}</h1>
      <h2>{{$photo->description}}</h2>
      <p>{{$photo->location}}</p>

      <div class="row text-center text-lg-left">
		<img src="/images/{{$photo->image}}" alt="">
      </div>

    </div>
@endsection