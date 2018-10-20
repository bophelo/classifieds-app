@extends('layouts.app')

@section('content')

<section class="uk-section uk-padding-remove-bottom">
        <div class="uk-container uk-container-expand">
            @foreach ($areas as $country)
            <header class="uk-text-center">
                <h1 class="uk-heading-primary"><a href="#">{{ $country->name }} </a></h1>
                <hr class="uk-divider-icon">
                <p class="uk-width-3-5 uk-margin-auto">
                    Our Product is the easiest way for teams to track their works progress. Our advance plans give you more tools to get the job done.
                </p>
            </header>     
            <div class="uk-grid uk-grid-large uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-medium-top uk-grid-match" data-uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div > .uk-card; delay: 200" data-uk-grid>
                @foreach ($country->children as $province)
                <div style="margin-bottom: 20px;">
                    <div class="uk-card uk-card-default uk-card-hover uk-flex uk-flex-column" data-uk-scrollspy-class="uk-animation-slide-left-small">
                        <div class="uk-card-header uk-text-center">
                            <h4 class="uk-text-bold"><a href="#">{{ $province->name }}</a></h4>
                            <hr class="uk-divider-icon">
                        </div>
                        @foreach ($province->children as $city)
                            <p class="uk-text-small uk-text-center uk-text-muted" style="margin-top: 0;"><a href="#">{{ $city->name }}</a></p>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <div class="uk-text-center uk-text-small uk-text-muted uk-section uk-section-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </div>
            @endforeach
        </div>
</section>

@endsection
