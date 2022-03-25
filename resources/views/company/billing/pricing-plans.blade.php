@extends('layouts.company')



@section('content')

<div class="hm-top">

<div class="hm-cam-head">
         <small>SELECT A PLAN</small>
         <h2>Empower your audience</h2>
         <p>Start now for free, and upgrade as you grow.</p>
         <div class="interval-toggle">
        <a href="#" class="monthly active">Monthly</a>
        <a href="#" class="yearly">Yearly</a>
    </div>
     </div>


<script>
$(document).ready(function() {

    $('.interval-toggle .monthly').on("click", function(e) {
        e.preventDefault();
        $('.interval-toggle .yearly').removeClass('active');
        $(this).addClass("active");
        $('.price-list').removeClass("yearly-active");
    });

    $('.interval-toggle .yearly').on("click", function(e) {
        e.preventDefault();
        $('.interval-toggle .monthly').removeClass('active');
        $(this).addClass("active");
        $('.price-list').addClass("yearly-active");
    });


});
</script>




<ul class="price-list">
            @foreach ($plans as $plan)


<li class="price-list-item @if (in_array($plan->interval, ['monthly'])) monthly @else yearly @endif">


                        <div>
                        <h5>
                            {{ $plan->title }}
                        </h5>

                        <!-- Price -->
                        <h2>
                            <sup>$</sup>
                            <strong data-min-value="19" data-max-value="29">{{ $plan->price }}</strong>
                            <sup>( {{ $plan->interval }} )</sup>
                        </h2>

                        <!-- List -->
                        <ul class="list-checked">
                            @foreach (explode("\n", str_replace("\r", "", $plan->description)) as $feature)
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg> {{ $feature }}</li>
                            @endforeach
                        </ul>

</div>

                        <div class="form">
                        @if ($subscription && $subscription->active() && $plan->id == $subscription->plan_id)

                        <button class="button-submit" disabled>Current Plan</button>

                        @else
                        <form action="{{ route('company.payment.show') }}" method="GET">
                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                            <button class="button-submit">{{ __('Choose Plan') }}</button>
                        </form>
                        @endif
                        </div>

</li>

            @endforeach
</ul>

</div>



        </div>
    </div>
</section>









@endsection
