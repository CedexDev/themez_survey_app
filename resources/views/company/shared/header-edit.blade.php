<div class="index-header dark">
    <div>

        <a id="burger-menu" class="i-burger">
            Menu <span></span>
        </a>

    </div>
</div>


<div class="index-menu dark">
    <ul>
    <li><a class="thumb-item" href="{{ route('company.surveys.index') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
    <div class="inside">

<h6>xPolls
</h6>
<p>
    Projects</p>

</div>
    </a></li>
    <li><a href="{{ route('company.notifications.index') }}" class="thumb-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-bell">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
        </svg>
        <div class="inside">

        <h6>Recent</h6>
        <p>Notifcations</p>

        </div>
        @auth
        @if(\Auth::user()->unreadNotifications->count() > 0)
        <span class="badge badge-light badge-bell">
            {{\Auth::user()->unreadNotifications->count()}}
        </span>
        @endif
        @endauth
    </a></li>

    <li><a href="{{route('company.account.edit')}}" class="thumb-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-user">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
        <div class="inside">

        <h6>Profile</h6>
        <p>User settings</p>

        </div>
    </a></li>
    <li><a class="thumb-item" href="{{ route('company.billing.plans')  }}" class="thumb-item">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg><div class="inside">

<h6>Pricing
</h6>
<p>
    Pricing</p>

</div>
    </a></li>
    <li><a href="{{ route('company.billing.index') }}" class="thumb-item">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
    <div class="inside">

<h6>Billing
</h6>
<p>
{{ __('Billing') }}</p>

</div></a></li>
    <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();"
        class="thumb-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            <div class="inside">

<h6>Access
</h6>
<p>
    Logout</p>

</div>
</a>
    <form class="logout-class-side" id="logout-form-sidebar" action="{{ route('logout') }}" method="POST">
        {{ csrf_field() }}</form></li>
</ul>
</div>
