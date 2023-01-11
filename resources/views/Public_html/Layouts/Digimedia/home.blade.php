<!DOCTYPE html>
<html lang="en">

    <head>
        <title>{{$title_for_layout ? $title_for_layout : config('app.title_for_layout')}}</title>
        <link rel="icon" type="image/x-icon" href="{{config('app.base_static_uri')}}images/logo-developer-asik-orange-full.png">
        @include('Public_html.Layouts.Digimedia.Includes.home.include_meta')
        @include('Public_html.Layouts.Digimedia.Includes.home.include_css')
    </head>
    <body>
        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->
        @include('Public_html.Widgets.Digimedia.pre-header')
        @include('Public_html.Widgets.Digimedia.header-menu')
        @include('Public_html.Components.content')
        @include('Public_html.Layouts.Digimedia.Includes.home.footer')
        @include('Public_html.Components.modal')
        @include('Public_html.Layouts.Digimedia.Includes.home.include_js')
    </body>
</html>