@extends('layouts.frontend')

@section('content')
<h1 class="cover-heading">Thanks for your business</h1>
<p class="lead">Your payment was successful</p>
<p class="lead">
    <img src="{{ url("/asset/image/{$purchase_ref}") }}">
</p>
@endsection
