@extends('base')

@section('content')
<h1>admin contact</h1>

    <ul>
        @foreach($contacts as $contact)
            <li>
                {{ $contact->id }}
                {{ $contact->email }}
            </li>
        @endforeach
    </ul>
@endsection
