<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="{{config('app.base_assets_uri')}}/templates/digimedia/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{config('app.base_assets_uri')}}/templates/digimedia/assets/css/fontawesome.css">
<link rel="stylesheet" href="{{config('app.base_assets_uri')}}/templates/digimedia/assets/css/templatemo-digimedia-v3.css">
<link rel="stylesheet" href="{{config('app.base_assets_uri')}}/templates/digimedia/assets/css/animated.css">
<link rel="stylesheet" href="{{config('app.base_assets_uri')}}/templates/digimedia/assets/css/owl.css">

<link href="{{config('app.base_assets_uri')}}/libs/toastr/build/toastr.min.css" rel="stylesheet"/>

<!-- BEGIN THEME STYLES -->
<link rel="stylesheet" href="{{config('app.base_assets_uri')}}/libs/slick/slick/slick.css">
<link rel="stylesheet" href="{{config('app.base_assets_uri')}}/libs/slick/slick/slick-theme.css">

<!-- load css lib / class / library from controller start here -->
@if(isset($load_css) && !empty($load_css))
    @foreach ($load_css AS $key => $values)
        <link href="{{$_config_lib_url . $values}}" rel="stylesheet" type="text/css"/>
    @endforeach
@endif