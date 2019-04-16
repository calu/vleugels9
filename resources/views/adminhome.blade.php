@extends('layouts.vleugelslayout')

@section('content')
<div class="container">
	<h1 class="d-flex justify-content-center">Dashboard van de beheerder</h1>
	<div class="row">
		<div class="col md-4">
 		@include(
			'admin.partials.card', 
			[
				'header' => 'klanten', 
               	'icon' => 'fa-users',
               	'text' => 'Een overzicht van alle klanten (en admins). Je kan deze editeren, aanvullen of verwijderen',
               	'button' => 'klanten',
               	'href' => '#'
           	])
		</div>
		<div class="col md-4">	   
 		@include(
			'admin.partials.card', 
			[
				'header' => 'intake aanvragen', 
               	'icon' => 'fa-envelope',
               	'text' => 'Een overzicht van alle vragen. Er zijn 2 soorten : behandeld / nog te behandelen. Je kan ze editeren, aanvullen of verwijderen',
               	'button' => 'aanvragen',
               	'href' => '/intakes'
           	])
		</div>
 	</div>
</div>
@endsection