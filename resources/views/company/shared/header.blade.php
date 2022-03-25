<div class="index-header">
    <div>
        <a class="back" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="229.537" height="61" viewBox="0 0 229.537 61">
  <g id="Group_123" data-name="Group 123" transform="translate(-8325 11585)">
    <g id="Rectangle_4113" data-name="Rectangle 4113" transform="translate(8325 -11585)" fill="none" stroke="#2b8dd8" stroke-width="3">
      <rect width="37" height="61" rx="8" stroke="none"/>
      <rect x="1.5" y="1.5" width="34" height="58" rx="6.5" fill="none"/>
    </g>
    <path id="Path_65" data-name="Path 65" d="M17.307,0H12.771L.378-18.009H4.914ZM8.694-11.1l4.32-6.912h4.131L10.692-8.316ZM9.45-7.749,4.536,0H.486L7.344-10.206ZM41.715,0V-18.009H53.784v2.943h-8.37V-10.5H52.7v2.97H45.387v4.59h8.4V0ZM79.677,0V-18.009h3.294L92.8-4.59,91.746-2.43V-18.009h3.429V0h-3L82.134-13.5l.972-1.647V0Zm49.437.324a9.79,9.79,0,0,1-4.6-1.012,6.762,6.762,0,0,1-2.957-3.078,11.718,11.718,0,0,1-1.026-5.224q0-4.617,2.228-6.979a8.318,8.318,0,0,1,6.358-2.363,9.79,9.79,0,0,1,4.6,1.013,6.762,6.762,0,0,1,2.957,3.078A11.718,11.718,0,0,1,137.7-9.018q0,4.617-2.227,6.979A8.318,8.318,0,0,1,129.114.324Zm0-3.078a5.215,5.215,0,0,0,2.66-.621,3.818,3.818,0,0,0,1.607-2.011,10.2,10.2,0,0,0,.54-3.631,10.063,10.063,0,0,0-.54-3.632,3.821,3.821,0,0,0-1.607-1.984,5.215,5.215,0,0,0-2.66-.621,5.126,5.126,0,0,0-2.659.635,3.891,3.891,0,0,0-1.607,2,10.063,10.063,0,0,0-.54,3.632,10.063,10.063,0,0,0,.54,3.631,3.821,3.821,0,0,0,1.607,1.985A5.215,5.215,0,0,0,129.114-2.754ZM163.053,0V-18.009h3.78l6.318,9.072L171.1-8.8l6.588-9.207h3.7V0h-3.672V-15.093l.837.972-6.507,8.829-6.318-8.856.864-.756V0Zm44.415,0V-18.009h12.069v2.943h-8.37V-10.5h7.29v2.97H211.14v4.59h8.4V0Z" transform="translate(8335 -11545.667)" fill="currentColor"/>
  </g>
</svg>
        </a>

        <a id="burger-menu" class="i-burger">
            Menu <span></span>
        </a>

        <!-- <a class="add" href="{{ route('company.surveys.templates.index') }}">Add</a> -->

    </div>
</div>


<div class="index-menu">
    <ul>
        <li><a class="thumb-item" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                <div class="inside">

                    <!-- <h6>xPolls
</h6> -->
                    <p>
                        Campaigns</p>

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

                    <!-- <h6>Recent</h6> -->
                    <p>Notifcations</p>

                </div>
                @auth
                    @if (\Auth::user()->unreadNotifications->count() > 0)
                        <span class="badge badge-light badge-bell">
                            {{ \Auth::user()->unreadNotifications->count() }}
                        </span>
                    @endif
                @endauth
            </a></li>

        <li><a href="{{ route('company.account.edit') }}" class="thumb-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <div class="inside">

                    <!-- <h6>Profile</h6> -->
                    <p>User settings</p>

                </div>
            </a></li>
        <li><a class="thumb-item" href="{{ route('company.billing.plans') }}" class="thumb-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-dollar-sign">
                    <line x1="12" y1="1" x2="12" y2="23"></line>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
                <div class="inside">

                    <!-- <h6>Pricing
</h6> -->
                    <p>
                        Pricing</p>

                </div>
            </a></li>
        <li><a href="{{ route('company.billing.index') }}" class="thumb-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file">
                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                    <polyline points="13 2 13 9 20 9"></polyline>
                </svg>
                <div class="inside">

                    <!-- <h6>Billing
</h6> -->
                    <p>
                        {{ __('Billing') }}</p>

                </div>
            </a></li>
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();"
                class="thumb-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-log-out">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <div class="inside">

                    <!-- <h6>Access
</h6> -->
                    <p>
                        Logout</p>

                </div>
            </a>
            <form class="logout-class-side" id="logout-form-sidebar" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}</form>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function() {
        $('.i-burger').on("click", function() {
            $(this).toggleClass("close");
            $('.index-menu').toggleClass("overlay");
        });
    });
    $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('.index-header').addClass('scrolled');
    } else {
       $('.index-header').removeClass('scrolled');
    }
});
</script>
