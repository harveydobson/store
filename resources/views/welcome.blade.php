@extends('layouts.frontend')

@section('content')
    <h1 class="cover-heading">Welcome to the store</h1>
    <p class="lead">Please enter your purchase reference code</p>
    <p class="lead">
        <form method="post" action="./asset">
            @csrf
            <input class="form-control form-control-lg" name="purchase_ref" type="text" placeholder="i.e. DSC10023">
            @if ($status ?? '' )
                <div class="alert alert-danger mt-1">
                    {{ $status }}
                </div>
            @endif
            <button type="submit" class="btn mt-2 btn-secondary">Continue</button>
        </form>
    </p>
@endsection
