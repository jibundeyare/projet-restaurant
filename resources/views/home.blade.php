@extends('base')

@section('content')
<h1>{{ $title }}</h1>

<h2>{{ $actu->titre }}</h2>
<div>{{ $actu->image }}</div>
<p>{{ $actu->message }}</p>
<p>{{ $actu->date_publication }}</p>
@endsection
