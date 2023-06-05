@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@extends('HeaderAndFouter.Fouter')
@section('title' , 'Index')
@section('home' , 'active')


@section('content')

    <main>
        <article>

        <!-- 
            - #HERO
        -->

        <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('/image/hero-bg.svg')">

            <div class="container">

                <div class="hero-content">

                    <h1 class="h1 section-title">{{ __('Index.Thebest') }} <span class="span">{{ __('Header.Services') }} </span> {{ __('Index.Ifyouareernow') }}</h1>

                    <p class="hero-text">{{ __('Index.Specializedelectricity') }}</p>

                    <a href="/services" class="btn has-before">
                        <span class="span">{{ __('Index.FindofServices') }}</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>

                <figure class="hero-banner">

                    <div class="img-holder one" style="--width: 270; --height: 300;">
                    <img src="/image/hero-banner-1.jpg" width="270" height="300" alt="hero banner" class="img-cover">
                    </div>

                    <div class="img-holder two" style="--width: 240; --height: 370;">
                    <img src="/image/hero-banner-2.jpg" width="240" height="370" alt="hero banner" class="img-cover">
                    </div>

                    <img src="/image/hero-shape-1.png" width="380" height="190" alt="" class="shape hero-shape-1">

                    <img src="/image/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

                </figure>

            </div>

        </section>





        <!-- 
            - #servises
        -->

        <section class="section category" aria-label="category">
            <div class="container">

            <p class="section-subtitle">{{ __('Index.Categories') }}</p>

            <h2 class="h2 section-title">{{ __('Index.Order') }} <span class="span">{{ __('Index.now') }}</span> {{ __('Index.online') }}</h2>

            <p class="section-text">{{ __('Index.satisfiedhappy') }}</p>

            <ul class="grid-list">

                <li>
                    <div class="category-card" style="--color: 170, 75%, 41%;min-height: 511px;">

                        <div class="card-icon">
                            <img src="/image/category-1.svg" width="40" height="40" loading="lazy" alt="Online Degree Programs" class="img">
                        </div>

                        <h3 class="h3">
                            <a href="#" class="card-title">{{ __('Index.Domestic1') }}</a>
                        </h3>

                        <p class="card-text">{{ __('Index.Installationelectrical1') }}</p>

                        <span class="card-badge">{{ __('Index.Ordernow') }}</span>

                    </div>
                </li>

                <li>
                    <div class="category-card" style="--color: 351, 83%, 61%;min-height: 511px;">

                        <div class="card-icon">
                            <img src="/image/category-2.svg" width="40" height="40" loading="lazy" alt="Non-Degree Programs" class="img">
                        </div>

                        <h3 class="h3">
                            <a href="#" class="card-title">{{ __('Index.Domestic2') }}</a>
                        </h3>

                        <p class="card-text">{{ __('Index.Installationelectrical2') }}</p>

                        <span class="card-badge">{{ __('Index.Ordernow') }}</span>

                    </div>
                </li>

                <li>
                    <div class="category-card" style="--color: 229, 75%, 58%;min-height: 511px;">

                        <div class="card-icon">
                            <img src="/image/category-3.svg" width="40" height="40" loading="lazy" alt="Off-Campus Programs" class="img">
                        </div>

                        <h3 class="h3">
                            <a href="#" class="card-title">{{ __('Index.Domestic3') }}</a>
                        </h3>

                        <p class="card-text">{{ __('Index.Installationelectrical3') }}.</p>

                        <span class="card-badge">{{ __('Index.Ordernow') }}</span>

                    </div>
                </li>

                <li>
                    <div class="category-card" style="--color: 42, 94%, 55%;min-height: 511px;">

                        <div class="card-icon">
                            <img src="/image/category-4.svg" width="40" height="40" loading="lazy" alt="Hybrid Distance Programs" class="img">
                        </div>

                        <h3 class="h3">
                            <a href="#" class="card-title">{{ __('Index.Domestic4') }}</a>
                        </h3>

                        <p class="card-text">{{ __('Index.Installationelectrical4') }}</p>

                        <span class="card-badge">{{ __('Index.Ordernow') }}</span>

                    </div>
                </li>

            </ul>

            </div>
        </section>





        <!-- 
            - #ABOUT
        -->

        <section class="section about" id="about" aria-label="about">
            <div class="container">

            <figure class="about-banner">

                <div class="img-holder" style="--width: 520; --height: 370;">
                <img src="/image/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                    class="img-cover">
                </div>

                <img @if( $lang == 'en') src="/image/about-shape-1-en.png" @else src="/image/about-shape-1-ar.png" @endif  width="360" height="420" loading="lazy" alt="" class="shape about-shape-1">

                <img @if( $lang == 'en') src="/image/about-shape-2-en.png" @else src="/image/about-shape-2-ar.png" @endif width="371" height="220" loading="lazy" alt="" class="shape about-shape-2">

                <img src="/image/about-shape-3.png" width="722" height="528" loading="lazy" alt="" class="shape about-shape-3">

            </figure>

            <div class="about-content">

                <p class="section-subtitle">{{ __('Index.AboutUs') }}</p>

                <h2 class="h2 section-title">{{ __('Index.10years') }}<span class="span">{{ __('Index.experience') }}</span>{{ __('Index.skillsdevelopment') }}</h2>

                <p class="section-text">{{ __('Index.enableeveryone') }}</p>

                <ul class="about-list">

                    <li class="about-item">
                        <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Efficientworkteam1') }}</span>
                    </li>

                    <li class="about-item">
                        <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Efficientworkteam2') }}</span>
                    </li>

                    <li class="about-item">
                        <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Efficientworkteam3') }}</span>
                    </li>

                </ul>

                <img src="/image/about-shape-4.svg" width="100" height="100" loading="lazy" alt="gg" class="shape about-shape-4">

            </div>

            </div>
        </section>





        <!-- 
            - #COURSE
        -->

        <section class="section course" id="courses" aria-label="course">
            <div class="container">

            <p class="section-subtitle">{{ __('Index.somework') }}</p>

            <h2 class="h2 section-title">{{ __('Index.Finddone') }}</h2>

            <ul class="grid-list">

                <li>
                    <div class="course-card" style="min-height: 400px;">

                        <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                        <img src="/image/course-1.jpg" width="370" height="220" loading="lazy"
                            alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                        </figure>

                        <div class="abs-badge">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                        <span class="span">3 {{ __('Index.Weeks') }}</span>
                        </div>

                        <div class="card-content">

                            <span class="badge">{{ __('Index.electricalextension') }}</span>

                            <h3 class="h3">
                                <a href="#" class="card-title">{{ __('Index.ProfessionalWorks') }}</a>
                            </h3>

                            <div class="wrapper">

                                <div class="rating-wrapper">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                </div>

                                <p class="rating-text mb-0">(5.0/7 {{ __('Index.Rating') }})</p>

                            </div>


                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card" style="min-height: 400px;">

                        <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                        <img src="/image/course-2.jpg" width="370" height="220" loading="lazy"
                            alt="Java Programming Masterclass for Software Developers" class="img-cover">
                        </figure>

                        <div class="abs-badge">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                        <span class="span">8 {{ __('Index.Weeks') }}</span>
                        </div>

                        <div class="card-content">

                            <span class="badge">{{ __('Index.Maintenanceappliances') }}</span>

                            <h3 class="h3">
                                <a href="#" class="card-title">{{ __('Index.homeowners') }}</a>
                            </h3>

                            <div class="wrapper">

                                <div class="rating-wrapper">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                </div>

                                <p class="rating-text mb-0">(4.5 /9 {{ __('Index.Rating') }})</p>

                            </div>
 
                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card" style="min-height: 400px;">

                        <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                        <img src="/image/course-3.jpg" width="370" height="220" loading="lazy"
                            alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                        </figure>

                        <div class="abs-badge">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                        <span class="span">3 {{ __('Index.Weeks') }}</span>
                        </div>

                        <div class="card-content">

                            <span class="badge">{{ __('Index.installation') }}</span>

                            <h3 class="h3">
                                <a href="#" class="card-title">{{ __('Index.ConstructionCreative') }}</a>
                            </h3>

                            <div class="wrapper">

                                <div class="rating-wrapper">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                </div>

                                <p class="rating-text mb-0">(4.9 /7 {{ __('Index.Rating') }})</p>

                            </div>


                        </div>

                    </div>
                </li>

            </ul>

            <a href="#" class="btn has-before">
                <span class="span">{{ __('Index.Browsemoreworks') }}</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

            </div>
        </section>





        <!-- 
            - #VIDEO
        -->

        <section class="video has-bg-image" aria-label="video"
            style="background-image: url('/image/video-bg.png')">
            <div class="container">

            <div class="video-card">

                <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
                <img src="/image/video-banner.jpg" width="970" height="550" loading="lazy" alt="video banner"
                    class="img-cover">

                <button class="play-btn" aria-label="play video">
                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                </button>
                </div>

                <img src="/image/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
                class="shape video-shape-1">

                <img src="/image/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
                class="shape video-shape-2">

            </div>

            </div>
        </section>





        <!-- 
            - #STATE
        -->

        <section class="section stats" aria-label="stats">
            <div class="container">

                <ul class="grid-list">

                    <li>
                        <div class="stats-card" style="--color: 170, 75%, 41%">
                            <h3 class="card-title">200k</h3>

                            <p class="card-text">{{ __('Index.ORDERS') }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="stats-card" style="--color: 351, 83%, 61%">
                            <h3 class="card-title">55K</h3>

                            <p class="card-text">{{ __('Index.PENDING') }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="stats-card" style="--color: 260, 100%, 67%">
                            <h3 class="card-title">99%</h3>

                            <p class="card-text">{{ __('Index.SATISFACTION') }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="stats-card" style="--color: 42, 94%, 55%">
                            <h3 class="card-title">21+</h3>

                            <p class="card-text" style="font-size: 13px;">{{ __('Index.COMPLETION') }}</p>
                        </div>
                    </li>

                </ul>

            </div>
        </section>





        <!-- 
            - #BLOG
        -->

        <section class="section blog has-bg-image" id="blog" aria-label="blog"
            style="background-image: url('/image/blog-bg.svg')">
            <div class="container">

            <p class="section-subtitle">{{ __('Index.LATESTARTICLES') }}</p>

            <h2 class="h2 section-title">{{ __('Index.WithCHBANI') }}</h2>

            <ul class="grid-list">

                <li>
                <div class="blog-card">

                    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;" >
                    <img src="/image/blog-1.jpg" width="370" height="370" loading="lazy"
                        alt="Become A Better Blogger: Content Planning" class="img-cover">
                    </figure>

                    <div class="card-content" style="max-height: 234px;">

                    <a href="#" class="card-btn" aria-label="read more">
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                    <a href="#" class="card-subtitle">{{ __('Index.Online') }}</a>

                    <h3 class="h3">
                        <a href="#" class="card-title">{{ __('Index.titele1') }}</a>
                    </h3>

                    <ul class="card-meta-list">

                        <li class="card-meta-item">
                        <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Oct') }} 10, 2021</span>
                        </li>

                        <li class="card-meta-item">
                        <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Comments') }} 09</span>
                        </li>

                    </ul>

                    <p class="card-text">{{ __('Index.botye1') }}</p>

                    </div>

                </div>
                </li>

                <li>
                <div class="blog-card">

                    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                    <img src="/image/blog-2.jpg" width="370" height="370" loading="lazy"
                        alt="Become A Better Blogger: Content Planning" class="img-cover">
                    </figure>

                    <div class="card-content">

                    <a href="#" class="card-btn" aria-label="read more">
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                    <a href="#" class="card-subtitle">{{ __('Index.Online') }}</a>

                    <h3 class="h3">
                        <a href="#" class="card-title">{{ __('Index.titele2') }}</a>
                    </h3>

                    <ul class="card-meta-list">

                        <li class="card-meta-item">
                        <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Oct') }} 10, 2021</span>
                        </li>

                        <li class="card-meta-item">
                        <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Comments') }} 09</span>
                        </li>

                    </ul>

                    <p class="card-text">{{ __('Index.botye2') }}</p>

                    </div>

                </div>
                </li>

                <li>
                <div class="blog-card">

                    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                    <img src="/image/blog-3.jpg" width="370" height="370" loading="lazy"
                        alt="Become A Better Blogger: Content Planning" class="img-cover">
                    </figure>

                    <div class="card-content">

                    <a href="#" class="card-btn" aria-label="read more">
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                    <a href="#" class="card-subtitle">{{ __('Index.Online') }}</a>

                    <h3 class="h3">
                        <a href="#" class="card-title">{{ __('Index.titele3') }}</a>
                    </h3>

                    <ul class="card-meta-list">

                        <li class="card-meta-item">
                        <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Oct') }} 10, 2021</span>
                        </li>

                        <li class="card-meta-item">
                        <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                        <span class="span">{{ __('Index.Comments') }} 09</span>
                        </li>

                    </ul>

                    <p class="card-text">{{ __('Index.botye3') }}</p>

                    </div>

                </div>
                </li>

            </ul>

            <img src="/image/blog-shape.png" width="186" height="186" loading="lazy" alt=""
                class="shape blog-shape">

            </div>
        </section>

        </article>
    </main>



@endsection
