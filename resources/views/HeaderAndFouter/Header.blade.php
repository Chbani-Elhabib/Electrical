@section('Header')
    <header class="header" data-header>
        <div class="container">

            <a href="/" class="logo" style="width: 90px;height: 90px;">
                <img src="/logo/Logo.png" style="height: 100%;width: 100%;object-fit: cover;" alt="EduWeb logo">
            </a>

            <nav class="navbar" data-navbar>

                <div class="wrapper">
                <a href="#" class="logo" style="width: 90px;height: 90px;">
                    <img src="/logo/Logo.png"style="height: 100%;width: 100%;object-fit: cover;" alt="EduWeb logo">
                </a>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
                </div>

                <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="/" class='navbar-link @yield("home")' data-nav-link>{{ __('Header.Home') }}</a>
                </li>

                <li class="navbar-item">
                    <a href="/services" class="navbar-link @yield('services') " data-nav-link>{{ __('Header.Services') }}</a>
                </li>

                <li class="navbar-item">
                    <a href="/about" class="navbar-link @yield('about') " data-nav-link>{{ __('Header.About') }}</a>
                </li>

                <li class="navbar-item">
                    <a href="/new-order" class="navbar-link @yield('neworder') " data-nav-link>{{ __('Header.NewOrder') }}</a>
                </li>

                <li class="navbar-item">
                    <a href="/lange" class="navbar-link" data-nav-link>{{ __('Header.lang') }}</a>
                </li>

                </ul>

            </nav>

            <div class="header-actions">
                @isset($Person)
                    <div class="profile position-relative">
                        <div class="profile-image">
                            <img src="/users-image/{{$Person->Photo}}" alt="">
                        </div>
                        <div class="menu-profile position-absolute">

                            <ul class="ps-1">

                                <a href="{{ URL('/user/profile')}}">
                                    <li>
                                        <ion-icon name="person-outline"></ion-icon>
                                        {{ __('Header.Myprofile') }}
                                    </li>
                                </a>

                                <a href="{{ URL('/user/edit/profile')}}">
                                    <li>
                                        <ion-icon name="settings-outline"></ion-icon>
                                        {{ __('Header.Updateprofile') }}
                                    </li>
                                </a>

                                <a href="{{ URL('/user/edit/password')}}">
                                    <li>
                                        <ion-icon name="key-outline"></ion-icon>
                                        {{ __('Header.Updatepassword') }}
                                    </li>
                                </a>


                                <a href="/user/orders" >
                                    <li>
                                        <ion-icon name="bookmarks-outline"></ion-icon>
                                        {{ __('Header.Orders') }}
                                    </li>
                                </a>

                                <a href="/user/logout">
                                    <li>
                                        <ion-icon name="log-out-outline"></ion-icon>
                                        {{ __('Header.Logout') }}
                                    </li>
                                </a>

                            </ul>

                        </div>
                    </div>
                @else
                    <a class="btn has-before">
                        <span class="span">{{ __('Header.Signin') }}</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                @endisset

                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>

    </header>

    <div  class='sign'>
        <!-- start sign in  -->
        <div class="center in">
            <h1 class="tille">{{ __('Header.Loginto') }}</h1>
            <div class="g-signin2 google" data-onsuccess="onSignIn"></div>
            <div class="div-or">
                <span class="or"></span>
                <h1>{{ __('Header.or') }}</h1>
                <span class="or"></span>
            </div>
            <form id="login" method="post" action="{{ url('/logn') }}">
                @csrf
                <div class="txt_field">
                    <i class="fa-solid fa-user"></i>
                    <input class="input-sign" name="UserName" type="text" required>
                    <label class="label-sign">{{ __('Header.Username') }}</label>
                    <span class="span"></span>
                </div>
                <div class="txt_field">
                    <i class="fa-solid fa-lock"></i>
                    <input class="input-sign" name="Password" type="password" required>
                    <label class="label-sign">{{ __('Header.Password') }}</label>
                    <span class="span"></span>
                    <img class="eye" src="/image/close_eye.png" alt="eye">
                </div>
                <div class="pass">{{ __('Header.Forgotyourpassword') }}</div>
                <input type="submit" value="{{ __('Header.Signin1') }}" class="submit signin">
                <div class="signup_link">{{ __('Header.Notyourmember') }}<a>{{ __('Header.SignUp') }}</a></div>
            </form>
        </div>
        <!-- end sign in  -->
        <!-- start sign up  -->
        <div class="center up">
            <h1 class="tille tille-up">{{ __('Header.Logupto') }}</h1>
            <div class="g-signin2 google" data-onsuccess="onSignIn"></div>
            <div class="div-or or">
                <span class="or"></span>
                <h1>{{ __('Header.or') }}</h1>
                <span class="or"></span>
            </div>
            <form id="logup" method="POST" action="{{ url('/person/store') }}">
                @csrf
                <div class="txt_field">
                    <input class="input-sign" name="UserName" type="text" required>
                    <label class="label-sign">{{ __('Header.Username') }}</label>
                    <span class="span"></span>
                </div>
                <div class="txt_field">
                    <input class="input-sign"  name="Password" type="password" required>
                    <label class="label-sign">{{ __('Header.Password') }}</label>
                    <span class="span"></span>
                </div>
                <div class="txt_field">
                    <input class="input-sign" type="password" required>
                    <label class="label-sign">{{ __('Header.ConfirmPassword') }}</label>
                    <span class="span"></span>
                </div>
                <input type="submit" value="{{ __('Header.SignUp') }}" class="submit logup">
                <div class="signup_link link-in">{{ __('Header.Ihaveanaccount') }}<a>{{ __('Header.Signin') }}</a></div>
            </form>
        </div>
        <!-- end sign up  -->
    </div>
@endsection

