@section('Fouter')
    <footer class="footer" style="background-image: url('/image/footer-bg.png')">

        <div class="footer-top section">
            <div class="container grid-list">

                <div class="footer-brand">

                    <a href="/" class="logo position-relative">
                        <img src="/logo/Logo.png" width="90" height="50" alt="EduWeb logo" >
                    </a>

                    <p class="footer-brand-text fabou">{{ __('Footer.aboutete') }}</p>

                    <div class="wrapper">
                        <span class="span">{{ __('Footer.Address') }}</span>

                        <address class="address">{{ __('Footer.Address1') }}</address>
                    </div>

                    <div class="wrapper">
                        <span class="span">{{ __('Footer.Phone') }}</span>

                        <a href="tel:+011234567890" class="footer-link">+01 123 4567 890</a>
                    </div>

                    <div class="wrapper">
                        <span class="span">{{ __('Footer.Email') }}</span>

                        <a href="mailto:info@eduweb.com" class="footer-link">contact@Chbani.com</a>
                    </div>

                </div>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">{{ __('Footer.OnlinePlatform') }}</p>
                        </li>

                        <li>
                            <a href="/" class="footer-link">{{ __('Header.Home') }}</a>
                        </li>

                        <li>
                            <a href="/services" class="footer-link">{{ __('Header.Services') }}</a>
                        </li>

                        <li>
                            <a href="/about" class="footer-link">{{ __('Header.About') }}</a>
                        </li>

                        <li>
                            <a href="/new-order" class="footer-link">{{ __('Header.NewOrder') }}</a>
                        </li>

                        <li>
                            <a href="/lange" class="footer-link">{{ __('Header.lang') }}</a>
                        </li>

                    </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">{{ __('Footer.Links') }}</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">{{ __('Footer.ContactUs') }}</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">{{ __('Footer.Gallery') }}</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">{{ __('Footer.NewsArticles') }}</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">{{ __('Footer.FAQ') }}</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">{{ __('Footer.ComingSoon') }}</a>
                    </li>

                </ul>

                <div class="footer-list">

                <p class="footer-list-title">{{ __('Footer.Contacts') }}</p>

                <p class="footer-list-text">{{ __('Footer.youremailaddress') }}</p>

                <form action="" class="newsletter-form">
                    <input type="email" name="email_address" placeholder="{{ __('Footer.Youremail') }}" required class="input-field">

                    <button type="submit" class="btn has-before">
                    <span class="span">{{ __('Footer.Subscribe') }}</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </button>
                </form>

                <ul class="social-list">

                    <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                    </li>

                </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">{{ __('Footer.Copyright') }}<a href="/" class="copyright-link">{{ __('Footer.CHBANI') }}</a></p>
            </div>
        </div>

    </footer>
@endsection