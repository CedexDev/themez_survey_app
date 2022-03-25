@extends('layouts.company')

@section('content')

<h1 class="i-heading">
    @if(isset($notification->data['title']))
                            {{ $notification->data['title'] }}
                        @endif
</h1>


						<p class="i-content">
                        @if(isset($notification->data['message']))
                            {{ $notification->data['message'] }}
                        @endif

</p>


                                @if(isset($notification->data['body']))

                                <p>
                                            {{ $notification->data['body']}}
</p>

                                 @endif


@endsection
