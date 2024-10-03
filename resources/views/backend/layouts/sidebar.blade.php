<div class="offcanvas offcanvas-start navbar-dark text-nowrap" tabindex="-1" id="sidebar" aria-label="sidebar">

    <div class="offcanvas-header px-3">
        <a href="javascript:void(0)" class="logo nav-link px-0 d-flex align-items-center">
            <svg width="24" height="24" viewbox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="90" height="90" rx="25" fill="#6366F1" />
                <path d="M63.312 29.16C63.568 29.64 63.712 30.072 63.744 30.456C63.808 30.84 63.84 31.4 63.84 32.136V58.776C63.84 60.984 63.232 62.28 62.016 62.664C61.408 62.856 60.64 62.952 59.712 62.952C58.784 62.952 58.048 62.872 57.504 62.712C56.96 62.552 56.544 62.36 56.256 62.136C55.968 61.912 55.744 61.592 55.584 61.176C55.424 60.632 55.344 59.8 55.344 58.68V42.6C54.544 43.592 53.376 45.176 51.84 47.352C50.304 49.496 49.328 50.84 48.912 51.384C48.496 51.928 48.208 52.312 48.048 52.536C47.888 52.728 47.488 53.016 46.848 53.4C46.24 53.752 45.568 53.928 44.832 53.928C44.128 53.928 43.472 53.768 42.864 53.448C42.288 53.096 41.872 52.76 41.616 52.44L41.232 51.912C40.592 51.112 39.328 49.416 37.44 46.824C35.552 44.2 34.528 42.792 34.368 42.6V58.776C34.368 59.512 34.336 60.072 34.272 60.456C34.24 60.808 34.096 61.208 33.84 61.656C33.36 62.52 32.112 62.952 30.096 62.952C28.144 62.952 26.928 62.52 26.448 61.656C26.192 61.208 26.032 60.792 25.968 60.408C25.936 60.024 25.92 59.448 25.92 58.68V32.04C25.92 31.304 25.936 30.76 25.968 30.408C26.032 30.024 26.192 29.592 26.448 29.112C26.928 28.28 28.176 27.864 30.192 27.864C31.056 27.864 31.792 27.976 32.4 28.2C33.04 28.392 33.456 28.6 33.648 28.824L33.936 29.112L44.832 43.416C50.272 36.216 53.904 31.464 55.728 29.16C56.272 28.296 57.552 27.864 59.568 27.864C61.616 27.864 62.864 28.296 63.312 29.16Z" fill="white" />
            </svg>
            <span class="h5 mb-0 text-reset ms-3">{{__('Touran')}}</span>
        </a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-2 py-3 h-100" data-simplebar>
        <ul class="navbar-nav mb-4" id="mainMenu">
            <li class="nav-label px-2 small mt-3"><small>{{__('MENU')}}</small></li>
            <li class="nav-item">
                <a class="nav-link px-2 d-flex align-items-center gap-3" href="{{ route('admin.dashboard') }}" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="me-auto">{{__('Dashboard')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 d-flex align-items-center gap-3" href="{{route('admin.user.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>{{__('Users')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 d-flex align-items-center gap-3" href="{{route('admin.partner.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>{{__('Partners')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 d-flex align-items-center gap-3 dropdown-toggle" href="#pages" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboard-collapse">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>{{__('Pages')}}</span>
                </a>
                <div class="ms-5 collapse" id="pages" data-bs-parent="#mainMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.pages.privacy.index') }}">{{__("Privacy Policy")}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.pages.terms.index') }}">{{__("Terms of Service")}}</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 d-flex align-items-center gap-3" href="{{route('admin.testimonial.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>{{__('Testimonial')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 d-flex align-items-center gap-3 dropdown-toggle" href="#settings" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboard-collapse">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <span class="me-auto">{{__('Settings')}}</span>
                </a>
                <div class="ms-5 collapse" id="settings" data-bs-parent="#mainMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.general.index') }}">{{__("General Settings")}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.email.index') }}">{{__("Email Configuration")}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.payment.index') }}">{{__("Payment Settings")}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.email-template.index') }}">{{__("Email Templates")}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.recaptcha.index') }}">{{__('Recaptcha Setting')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.social-login.index') }}">{{__('Social Login Setting')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.sms.index') }}">{{__('SMS Setting')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.settings.clear.index') }}">{{__('Cache Setting')}}</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
