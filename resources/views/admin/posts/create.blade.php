@extends('layouts.app')

@section('content')
	
	
			
		 		 <div class="card card-default">
		 		 	
		 		 	<div class="card-header">
		 		 		Create new post
		 		 	</div>

		 		 	<div class="card-body">
			 		 		<form action="{{ url('/admin/post/store') }}" method="Post">
								@csrf
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Title" >
								 	
									 
								</div>
								<label>Featured Image</label>
								<div class="form-group">
									<input  type="file" > 
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Content" cols="10" rows="10"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-large btn-primary">Create</button>
								</div>
							</form>
		 		 	</div>
		 		 	 
		 		 </div>
	
@endsection