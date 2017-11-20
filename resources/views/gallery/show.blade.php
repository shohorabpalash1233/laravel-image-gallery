@extends('layouts.main')

@section('content')
	    <div class="container">
		<a href="/">Back To Galleries</a>
      <h1 class="my-4 text-center text-lg-left">{{$gallery->name}}</h1>
      <p>{{$gallery->description}}</p>
	  <a href="/photo/create/{{$gallery->id}}" class="btn btn-primary" title="">Upload Photo</a>
<br>
<br>
<hr>
      <div class="row text-center text-lg-left">
      @foreach($photos as $photo)
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="photo/show/{{ $photo->id }}" >
            <img class="img-fluid img-thumbnail" src="/images/{{$photo->image}}" alt="">
          </a>
          <div class="d-block mb-4 h-100">
          	<br>
            <h5>{{ $photo->title }}</h5>
            <p>{{ $photo->description }}</p>
          </div>
        </div>
      @endforeach
      </div>
	  <br>
    </div>
@endsection