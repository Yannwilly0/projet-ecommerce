@extends('userlayouts.app')
@section('content')

<h4>Hello <strong>{{ $user->name }}</strong></h4>
<br>
<a href="{{ route('user.logout') }}">Sign out</a>


@endsection
