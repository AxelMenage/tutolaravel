	<?php
		if($post->id){
			$option=['method' => 'put', 'url' => action('PostsController@update', $post)];
		}else{
			$option=['method' => 'post', 'url' => action('PostsController@store')];
		}
	?>

	@include('errors')
	@include('flash')

	{!! Form::model($post, $option) !!}

		<div class="form-group">

			{!! Form::label('title', 'Titre') !!}
	
			{!! Form::text('title', null, ['class'=>'form-control']) !!}

		</div>
		<div class="form-group">

			{!! Form::label('slug', 'URL') !!}
	
			{!! Form::text('slug', null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('category_id', 'Catégorie') !!}
	
			{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('tags_list[]', 'Tags') !!}
	
			{!! Form::select('tags_list[]', App\Tag::pluck('name','id'), null, ['class'=>'form-control', 'multiple' => true]) !!}

		</div>

		<div class="form-group">

			{!! Form::label('content', 'Contenu') !!}
	
			{!! Form::textarea('content', null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">

			<label>
				{!! Form::checkbox('online', 1) !!}
				En ligne ?
			</label>

		</div>

		<button class="btn btn-primary">Envoyer</button>

	{!! Form::close() !!}