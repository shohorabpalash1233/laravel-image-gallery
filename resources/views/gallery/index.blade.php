@extends('layouts.main')

@section('content')
	    <div class="container">

      <h1 class="my-4 text-center text-lg-left">Photo Gallery</h1>
      <p>Create a gallery and start uploading</p>

      <div class="row text-center text-lg-left">
      @foreach($galleries as $gallery)
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery/show/{{ $gallery->id }}" >
            <img class="img-fluid img-thumbnail" src="/images/{{ $gallery->cover_image }}" style="height: 150px; width: 300px;">
          </a>
          <div class="d-block mb-4 h-100">
            <br>
            <h5>{{ $gallery->name }}</h5>
            <p>{{ $gallery->description }}</p>
          </div>
        </div>
      @endforeach
      </div>

    </div>
@endsection