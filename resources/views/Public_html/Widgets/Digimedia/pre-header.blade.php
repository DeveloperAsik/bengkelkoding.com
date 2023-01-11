<!-- Pre-header Starts -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8 col-7">
                <ul class="info">
                    <li><a href="#"><i class="fa fa-envelope"></i>{{isset($my_contact_detail[1]['title']) == 'Email' ? $my_contact_detail[1]['value'] : ''}}</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>{{isset($my_contact_detail[0]['title']) == 'Mobile' ? $my_contact_detail[0]['value'] : ''}}</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-4 col-5">
                <ul class="social-media">
                    @if(isset($social_media) && !empty($social_media))
                        @foreach($social_media AS $keyword => $value)
                        <li><a href="{{$value['account_name']}}" target="__blank"><i class="fa fa-{{$value['title']}}"></i></a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>