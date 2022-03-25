@extends('layouts.company')

@section('content')


<div class="hm-top">

<div class="hm-cam-head">
         <h2>{{ __('Notifications') }}</h2>
         <p>Tips, tricks, formalities and suggestions ...</p>
     </div>



                        @if(!$notifications->isEmpty())
                            <ul class="notification-list">
                                @foreach($notifications as $notification)

                                    @if(isset($notification->data['message']))
                                        <li role="alert" class="notification-list-item">
                                                <h4><a href="{{ route('company.notifications.show') }}?notification_id={{$notification->id}}" class="message">
      											{{ $notification->data['message']}}
                                                </a></h4>
      											<a href="{{ route('company.notifications.read') }}?id={{$notification->id}}" class="not-mark-read">{{ __('Mark as read') }}</a>
</li>
                                    @endif
                                    @if(isset($notification->data['title']))
                                        <li role="alert" class="notification-list-item">
                                                <h4>
                                                    <!-- <a href="{{ route('company.notifications.show') }}?id={{$notification->id}}" class="title"> -->
                                                {{ $notification->data['title']}}
                                                <!-- </a> -->
                                            </h4>
                                            @if(isset($notification->data['body']))

                                <p>
                                            {{ $notification->data['body']}}
</p>

                                 @endif

                                                <a href="{{ route('company.notifications.read') }}?notification_id={{$notification->id}}" class="not-mark-read">{{ __('Mark as read') }}</a>
</li>
                                    @endif
                                @endforeach
                                <!-- <li class="notification-list-end">
                                    <a href="{{ route('company.notifications.all.read') }}" class="not-mark-read">{{ __('Mark all as read') }}</a></li>
</li> -->
                            </ul>
                        @else
                            <ul class="notification-list">
                                <li role="alert" class="notification-list-item">{{ __('No notification(s) found!') }}</li>
                            </ul>
                        @endif

</div>
@endsection
