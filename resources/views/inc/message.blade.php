@if(session('errors'))

<div class="alert alert-danger">
	{{$errors}}
</div>

@endif
@if(session('suces'))
<div class="alert alert-success">
	{{session('suces')}}
</div>
@endif