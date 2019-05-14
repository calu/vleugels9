@extends('layouts.vleugelslayout')

@section('content')
<div class="container" id="app">
	<vraagformulier @completed="vermelden"></vraagformulier>
</div>
@endsection
