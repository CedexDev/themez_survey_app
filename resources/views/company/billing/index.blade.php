@extends('layouts.company')

@section('content')

<div class="i-heading">
    <div class="wrap">
        <!-- <small>XENOME PRICING</small> -->
        <h1>{{ __('Billing') }}</h1>
        <p>Empower your audience.</p>

    </div>
</div>






                @include('company.billing.current-subscription')

                @include('company.billing.cancel-subscription')

@endsection

