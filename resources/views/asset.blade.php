@extends('layouts.frontend')

@section('content')
<h1 class="cover-heading">Search Results {{ $purchase_ref ?? '' }}</h1>
<p class="lead">Is this correct?</p>
<p class="lead">
    <form method="post" action="./asset">
        @csrf
        <img src="{{ url("/asset/image/{$purchase_ref}") }}"><br/><br/>
        <a href="{{ url("/buy/{$purchase_ref}") }}" class="btn mt-2 btn-primary">Yes</a> <a href="{{ url('/') }}" class="btn mt-2 btn-secondary">No</a>
    </form>
</p>

@endsection
