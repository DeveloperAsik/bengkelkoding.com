<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{config('app.base_uri')}}" class="logo">
                        <img src="{{config('app.base_assets_uri')}}/images/logo-developer-asik-orange-small.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        @if(isset($sections) && !empty($sections))
                            @php $active = ''; @endphp
                            @foreach($sections AS $keyword => $value)
                                @if($keyword == 0) 
                                    @php $active = ' class="active"'; @endphp
                                @endif
                                <li class="scroll-to-section"><a href="#{{$value['path']}}"{{$active}}>{{$value['title']}}</a></li>
                            @endforeach
                        @endif  
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>