<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Contact Us</h6>
                    <h4>Get In Touch With Us <em>Now</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-dec">
                                <img src="{{config('app.base_assets_uri')}}/templates/digimedia/assets/images/contact-dec-v3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8899.21534482663!2d106.78837800463414!3d-6.5027860118013985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3b37c9e210d%3A0x27adcb8336444d79!2zNsKwMzAnMjYuMyJTIDEwNsKwNDcnMTYuNyJF!5e0!3m2!1sid!2sid!4v1646549500610!5m2!1sid!2sid" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="fill-form">
                                <div class="row">
                                    @if(isset($my_contact_detail) && !empty($my_contact_detail))
                                        @foreach($my_contact_detail AS $key => $value)
                                            <div class="col-lg-4">
                                                <div class="info-post">
                                                    <div class="icon">
                                                        <img src="{{$value['img']}}" alt="">
                                                        <a href="{{$value['link']}}" target="__blank" title="{{$value['value']}}">{!! substr($value['value'],0,16) !!}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                        </fieldset>
                                        <fieldset>
                                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                        </fieldset>
                                        <fieldset>
                                            <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit-message" class="main-button ">Send Message Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>