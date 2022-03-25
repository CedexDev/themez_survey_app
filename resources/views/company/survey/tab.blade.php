<nav class="tab-bar">

    <div>
        <ul role="tablist">
        <li class="nav-item">
                <a class="nav-link" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 36 36">
    <g id="Group_8654" data-name="Group 8654" transform="translate(3.999 -10.085)">
        <path id="Rectangle_4113" data-name="Rectangle 4113" d="M0,0H36a0,0,0,0,1,0,0V36a0,0,0,0,1,0,0H15A15,15,0,0,1,0,21V0A0,0,0,0,1,0,0Z" transform="translate(-3.999 10.085)" fill="#fff"/>
        <path id="Path_66" data-name="Path 66" d="M14.7-2.663H10.863L.378-18.009H4.216ZM7.414-12.119l3.655-5.89h3.495L9.1-9.749Zm.64,2.853L3.9-2.663H.469l5.8-8.7Z" transform="translate(12.109 42.543)" fill="#010911"/>
    </g>
    </svg></a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($activeTab == 'general') active @endif"
                    href="{{ route('company.surveys.edit', $survey) }}">{{ __('Setup') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($activeTab == 'questions') active @endif"
                    href="{{ route('company.surveys.questions.index', $survey) }}">{{ __('Build') }}</a>
            </li>
            @if ($survey->visibility)
                <li class="nav-item">
                    <a class="nav-link @if ($activeTab == 'share') active @endif"
                        href="{{ route('company.surveys.share.show', $survey) }}">{{ __('Share') }}</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link @if ($activeTab == 'result') active @endif"
                    href="{{ route('company.surveys.result.index', $survey) }}">{{ __('Results') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></a>
            </li>
        </ul>
    </div>
    <!-- {{ route('company.surveys.index', $survey) }} -->
</nav>
