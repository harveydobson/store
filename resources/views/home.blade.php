@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your Account') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Your payment information is managed securely with Stripe') }}

                    <a href=" {{ Auth::user()->billingPortalUrl() }}">Manage your payment details here</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
