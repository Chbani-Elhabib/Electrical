@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@extends('HeaderAndFouter.Fouter')
@section('about' , 'active')


@section('content')

    <!--  #ABOUT -->

    <section class="section about" id="about" aria-label="about" style="padding-top: 134px;">
        <div class="container">

            <figure class="about-banner">

                <div class="img-holder" style="--width: 520; --height: 370;">
                    <img src="/image/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner" class="img-cover">
                </div>

           
                <img @if( $lang == 'en') src="/image/about-shape-1-en.png" @else src="/image/about-shape-1-ar.png" @endif  width="360" height="420" loading="lazy" alt="" class="shape about-shape-1">

                <img @if( $lang == 'en') src="/image/about-shape-2-en.png" @else src="/image/about-shape-2-ar.png" @endif width="371" height="220" loading="lazy" alt="" class="shape about-shape-2">

                <img src="/image/about-shape-3.png" width="722" height="528" loading="lazy"  class="shape about-shape-3">

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
    
@endsection