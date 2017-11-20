@extends('layouts.main')

@section('content')
	<div class="container">

      <h1 class="my-4 text-center text-lg-left">Photo Gallery</h1>
      <p>Upload Photo to the gallery</p>

      <div class="row text-center text-lg-left">
		<div class="col-md-12">
		 	{!! Form::open(array('action' => 'PhotoController@store', 'enctype' => 'multipart/form-data')) !!}
				
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', $value = null, $attributes = ['placeholder' => 'Photo Title', 'name' => 'title', 'class' => 'form-control']) !!}
			

			{!! Form::label('description', 'Description') !!}
			{!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Photo Description', 'name' => 'description', 'class' => 'form-control']) !!}

			{!! Form::label('location', 'Location') !!}
			{!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Photo Location', 'name' => 'location', 'class' => 'form-control']) !!}

			{!! Form::label('image', 'Photo') !!}
			{!! Form::file('image', $attributes = ['class' => 'form-control']) !!}

			<input type="hidden" value="{{ $gallery_id }}" name="gallery_id">

			<br>

			{!! Form::submit('Submit', $attributes = ['class' => 'form-control btn btn-primary']) !!}

		 	{!! Form::close() !!}
		 	<br>
		 </div> 
      </div>

    </div>
@endsection