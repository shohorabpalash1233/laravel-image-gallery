@extends('layouts.main')

@section('content')
	<div class="container">

      <h1 class="my-4 text-center text-lg-left">Photo Gallery</h1>
      <p>Create Gallery</p>

      <div class="row text-center text-lg-left">
		<div class="col-md-12">
		 	{!! Form::open(array('action' => 'GalleryController@store', 'enctype' => 'multipart/form-data')) !!}
				
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', $value = null, $attributes = ['placeholder' => 'Gallery Name', 'name' => 'name', 'class' => 'form-control']) !!}
			

			{!! Form::label('description', 'Description') !!}
			{!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Gallery Description', 'name' => 'description', 'class' => 'form-control']) !!}

			{!! Form::label('cover_image', 'Cover Image') !!}
			{!! Form::file('cover_image', $attributes = ['class' => 'form-control']) !!}

			<br>

			{!! Form::submit('Submit', $attributes = ['class' => 'form-control btn btn-primary']) !!}

		 	{!! Form::close() !!}
		 	<br>
		 </div> 
      </div>

    </div>
@endsection