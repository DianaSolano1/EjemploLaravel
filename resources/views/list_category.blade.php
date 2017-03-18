@extends('app')
@section('content')
    <div class="container">
	<div class="row">
		{!! Form::open(['route' => 'category/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!} 
		<div class="form-group">
			<label for="exampleInputName2">Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<button type="submit" class="btn btn-default">Search</button>
		<a href="{{route('category.index')}}" class="btn btn-primary">All</a>
		<a href="{{route('category.create')}}" class="btn btn-primary">Create</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $categorie)
				<tr>
					<td>{{$categorie->name}}</td>
					<td>{{$categorie->description}}</td>
					<td>
						<a href="{{route('category.edit', ['id' => $categorie->id])}}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{{route('category/destroy', ['id' => $categorie->id])}}" class="btn btn-danger btn-xs">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection