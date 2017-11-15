@extends('layouts.main')

@section('content')
	    <div class="container">
		<a href="/">Back To Galleries</a>
      <h1 class="my-4 text-center text-lg-left">{{$gallery->name}}</h1>
      <p>{{$gallery->description}}</p>
	  <a href="/photo/upload/{{$gallery->id}}" class="btn btn-primary" title="">Upload Photo</a>

      <div class="row text-center text-lg-left">
      	
      </div>
	  <br>
    </div>
@endsection