<div class="index-header">
    <div>
        <a class="back" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="170.826" height="36" viewBox="0 0 170.826 36">
  <g id="Group_8597" data-name="Group 8597" transform="translate(3.999 -10.085)">
    <path id="Rectangle_4113" data-name="Rectangle 4113" d="M0,0H36a0,0,0,0,1,0,0V36a0,0,0,0,1,0,0H15A15,15,0,0,1,0,21V0A0,0,0,0,1,0,0Z" transform="translate(-3.999 10.085)" fill="#2b8dd8"/>
    <path id="Path_66" data-name="Path 66" d="M14.7-2.663H10.863L.378-18.009H4.216ZM7.414-12.119l3.655-5.89h3.495L9.1-9.749Zm.64,2.853L3.9-2.663H.469l5.8-8.7Z" transform="translate(12.109 42.543)" fill="#fff"/>
    <path id="Path_65" data-name="Path 65" d="M41.715-3.254V-18.067H51.783v2.421H44.8v3.753h6.081V-9.45h-6.1v3.775h7v2.421Zm25.626,0V-18.067h2.748l8.2,11.037-.878,1.777V-18.067H80.27V-3.254h-2.5l-8.379-11.1.811-1.355V-3.254Zm35.2.266A8.263,8.263,0,0,1,98.7-3.82a5.6,5.6,0,0,1-2.466-2.532,9.522,9.522,0,0,1-.856-4.3,8.005,8.005,0,0,1,1.858-5.741,6.994,6.994,0,0,1,5.3-1.943,8.263,8.263,0,0,1,3.84.833,5.6,5.6,0,0,1,2.466,2.532,9.522,9.522,0,0,1,.856,4.3,8.005,8.005,0,0,1-1.858,5.741A6.994,6.994,0,0,1,102.54-2.987Zm0-2.532a4.4,4.4,0,0,0,2.219-.511,3.15,3.15,0,0,0,1.34-1.654,8.281,8.281,0,0,0,.45-2.987,8.171,8.171,0,0,0-.45-2.987,3.153,3.153,0,0,0-1.34-1.632,4.4,4.4,0,0,0-2.219-.511,4.325,4.325,0,0,0-2.219.522,3.21,3.21,0,0,0-1.34,1.643,8.171,8.171,0,0,0-.45,2.987,8.171,8.171,0,0,0,.45,2.987,3.152,3.152,0,0,0,1.34,1.632A4.4,4.4,0,0,0,102.54-5.519Zm22.27,2.265V-18.067h3.153l5.271,7.462-1.712.111,5.5-7.573H140.1V-3.254H137.04V-15.668l.7.8L132.31-7.607l-5.271-7.284.721-.622V-3.254Zm31.009,0V-18.067h10.068v2.421H158.9v3.753h6.081V-9.45h-6.1v3.775h7v2.421Z" transform="translate(0.94 42.888)" fill="#010910"/>
  </g>
</svg>



        </a>

        @guest

        <div class="guest-ctas">

                <a href="{{ route('login') }}" class="but">{{ __('Log in') }}</a>

                <a href="{{ route('register') }}" class="but but-green">{{ __('Try Xenome') }}<span class="hide-mobile"> {{ __('for free') }}<span></p></a>
        </div>


        @endguest

        @auth


    <ul class="mid-menu">
    <li><a class="campaigns-active" href="/">Campaigns</a></li>
    <li><a class="plans-active" href="{{ route('company.billing.plans') }}">Plans</a></li>
    </ul>


        <a href="#" id="burger-menu" class="i-burger">
            <i>
            {{ substr($user->name, 0, 1) }}
            </i>

            <div class="name">

            <strong>{{ $user->name }}</strong>

            <small>

            @if($surveys->count() == 1)

            {{ $surveys->count() }} campaign

            @else

                {{ $surveys->count() }} campaigns

            @endif
            </small>
            </div>
            <span></span>
        </a>

        @endauth

        <!-- <a class="add" href="{{ route('company.surveys.templates.index') }}">Add</a> -->

    </div>
</div>


<div class="index-menu">
    <ul>


        @auth


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
                        <p>Notifcations</p>

                    </div>

                    @if (\Auth::user()->unreadNotifications->count() > 0)
                        <span class="badge badge-light badge-bell">
                            {{ \Auth::user()->unreadNotifications->count() }}
                        </span>
                    @endif

                </a></li>

            <li><a href="{{ route('company.account.edit') }}" class="thumb-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <div class="inside">
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
                        <p>
                            Logout</p>

                    </div>
                </a>
                <form class="logout-class-side" id="logout-form-sidebar" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}</form>
            </li>






        @endauth
        <!-- note the end auth -->



        @guest




            <li>

                <a href="{{ route('login') }}" class="thumb-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                    <div class="inside">

                        <!-- <h6>Billing
    </h6> -->
                        <p>
                            {{ __('Sign in') }}</p>

                    </div>
                </a>
            </li>


            <li>
                <a href="{{ route('register') }}" class="thumb-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <div class="inside">

                        <!-- <h6>Billing
    </h6> -->
                        <p>
                            {{ __('Register') }}</p>

                    </div>
                </a>
            </li>

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




        @endguest



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
       $('body').addClass('scrolled-body');
    } else {
       $('.index-header').removeClass('scrolled');
       $('body').removeClass('scrolled-body');
    }
});
</script>
