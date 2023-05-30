@section('Header')
    <header class="header" data-header>
        <div class="container">

            <a href="/" class="logo">
                <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
            </a>

            <nav class="navbar" data-navbar>

                <div class="wrapper">
                <a href="#" class="logo">
                    <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
                </a>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
                </div>

                <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="/" class="navbar-link" data-nav-link>Home</a>
                </li>

                <li class="navbar-item">
                    <a href="#about" class="navbar-link" data-nav-link>About</a>
                </li>

                <li class="navbar-item">
                    <a href="#courses" class="navbar-link" data-nav-link>Services</a>
                </li>

                <li class="navbar-item">
                    <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
                </li>

                <li class="navbar-item">
                    <a href="/new-order" class="navbar-link" data-nav-link>New order</a>
                </li>

                </ul>

            </nav>

            <div class="header-actions">

                <a class="btn has-before">
                <span class="span">Sign in</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>

        <div  class='sign'>
            <!-- start sign in  -->
            <div class="center in">
                <i class="fa-solid fa-xmark"></i>
                <h1 class="tille">Log in to</h1>
                <div class="g-signin2 google" data-onsuccess="onSignIn"></div>
                <div class="div-or">
                    <span class="or"></span>
                    <h1>or</h1>
                    <span class="or"></span>
                </div>
                <form method="post" action="{{ url('sign') }}">
                    @csrf
                    <div class="txt_field">
                        <i class="fa-solid fa-user"></i>
                        <input class="input-sign" name="UserName" type="text" required>
                        <label class="label-sign">Username</label>
                        <span class="span"></span>
                    </div>
                    <div class="txt_field">
                        <i class="fa-solid fa-lock"></i>
                        <input class="input-sign" name="Password" type="password" required>
                        <label class="label-sign">Password</label>
                        <span class="span"></span>
                        <img class="eye" src="/image/close_eye.png" alt="eye">
                    </div>
                    <div class="pass">Forgot your password?</div>
                    <input type="submit" value="Login" class="submit">
                    <div class="signup_link">Not your member?<a>Sign Up</a></div>
                </form>
            </div>
            <!-- end sign in  -->
            <!-- start sign up  -->
            <div class="center up">
                <i class="fa-solid fa-xmark"></i>
                <h1 class="tille tille-up">Log up to</h1>
                <div class="g-signin2 google" data-onsuccess="onSignIn"></div>
                <div class="div-or or">
                    <span class="or"></span>
                    <h1>or</h1>
                    <span class="or"></span>
                </div>
                <form method="post" action="{{ url('login') }}">
                    @csrf
                    <div class="txt_field">
                        <input class="input-sign" name="UserName" type="text" required>
                        <label class="label-sign">UserName</label>
                        <span class="span"></span>
                    </div>
                    <div class="txt_field">
                        <input class="input-sign"  name="Email" type="text" required>
                        <label class="label-sign">Email</label>
                        <span class="span"></span>
                    </div>
                    <div class="txt_field">
                        <input class="input-sign"  name="Password" type="password" required>
                        <label class="label-sign">Password</label>
                        <span class="span"></span>
                        <img class="eye" src="/image/close_eye.png" alt="eye">
                    </div>
                    <div class="txt_field">
                        <input class="input-sign" type="password" required>
                        <label class="label-sign">Confirm Password</label>
                        <span class="span"></span>
                    </div>
                    <input type="submit" value="logup" class="submit">
                    <div class="signup_link link-in">Not your member?<a>Sign In</a></div>
                </form>
            </div>
            <!-- end sign up  -->
        </div>

    </header>
@endsection

