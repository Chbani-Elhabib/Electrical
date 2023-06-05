@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@extends('HeaderAndFouter.Fouter')
@section('services' , 'active')


@section('content')

    <!-- #servises -->

    <section class="section category" aria-label="category">

        <div class="container">


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

@endsection