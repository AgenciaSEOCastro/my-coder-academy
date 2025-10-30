@extends('layouts/app')
@section('meta')

<title>My Coder Academy | Open Source</title> 



@endsection 

@section('content')


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


@if(!Auth::user())   

@endif

<style type="text/css">

	
</style>

@include('inc/navbar')

<br>

<div class="container-fluid image">


</div>





<div class="row">

	<div class="container">

		<div class="card">

			<div class="card-body">

				<h1>My Coder Academy</h1>



			</div>

		</div>

	</div>

</div>








@include('inc/footer')
@endsection 




