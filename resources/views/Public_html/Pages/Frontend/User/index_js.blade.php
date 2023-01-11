<script>
    var onScroll = function (event) {
        var scrollPos = $(document).scrollTop();
        $('.nav a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.nav ul li a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    };
    var mobileNav = function () {
        var width = $(window).width();
        $('.submenu').on('click', function () {
            if (width < 767) {
                $('.submenu ul').removeClass('active');
                $(this).find('ul').toggleClass('active');
            }
        });
    };
    var indexJS = function () {
        return {
            //main function to initiate the module
            init: function () {
                fnAlertStr('indexJS successfully load', 'success', {timeOut: 2000});
                $(document).on("scroll", onScroll);

                //smoothscroll
                $('.scroll-to-section a[href^="#"]').on('click', function (e) {
                    e.preventDefault();

                    $(document).off("scroll");

                    $('.scroll-to-section a').each(function () {
                        $(this).removeClass('active');
                    });
                    $(this).addClass('active');

                    var target = this.hash, menu = target;
                    var target = $(this.hash);
                    $('html, body').stop().animate({
                        scrollTop: (target.offset().top) + 1
                    }, 500, 'swing', function () {
                        window.location.hash = target[0].id;
                        $(document).on("scroll", onScroll);
                    });
                    return false;
                });
                // Acc
                $(document).on("click", ".naccs .menu div", function () {
                    var numberIndex = $(this).index();
                    if (!$(this).is("active")) {
                        $(".naccs .menu div").removeClass("active");
                        $(".naccs ul li").removeClass("active");

                        $(this).addClass("active");
                        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                        var listItemHeight = $(".naccs ul")
                                .find("li:eq(" + numberIndex + ")")
                                .innerHeight();
                        $(".naccs ul").height(listItemHeight + "px");
                    }
                });

                $('#form-submit-message').on('click', function (e) {
                    e.preventDefault();
                    loadingImg('img-loading', 'start');
                    var uri = _base_url + 'ajax/post/insert-message';
                    var formdata = {
                        'name': $('input[name="name"]').val(),
                        'email': $('input[name="email"]').val(),
                        'subject': $('input[name="subject"]').val(),
                        'message': $('textarea[name="message"]').val()
                    };
                    var response = fnAjaxSend(JSON.stringify(formdata), uri, 'POST', {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, false);
                    if (response.responseJSON.status.code === 200) {
                        loadingImg('img-loading', 'stop');

                    } else {
                        loadingImg('img-loading', 'stop');

                    }
                    return false;
                });
            }
        };
    }();
    jQuery(document).ready(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var box = $('.header-text').height();
            var header = $('header').height();

            if (scroll >= box - header) {
                $("header").addClass("background-header");
            } else {
                $("header").removeClass("background-header");
            }
        });
        $('.loop').owlCarousel({
            center: true,
            items: 1,
            loop: true,
            autoplay: true,
            nav: true,
            margin: 0,
            responsive: {
                1200: {
                    items: 5
                },
                992: {
                    items: 3
                },
                760: {
                    items: 2
                }
            }
        });
        // Menu Dropdown Toggle
        if ($('.menu-trigger').length) {
            $(".menu-trigger").on('click', function () {
                $(this).toggleClass('active');
                $('.header-area .nav').slideToggle(200);
            });
        }
        // Menu elevator animation
        $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    var width = $(window).width();
                    if (width < 991) {
                        $('.menu-trigger').removeClass('active');
                        $('.header-area .nav').slideUp(200);
                    }
                    $('html,body').animate({
                        scrollTop: (target.offset().top) + 1
                    }, 700);
                    return false;
                }
            }
        });
        indexJS.init();
    });
    $(window).on('load', function () {
        $('#js-preloader').addClass('loaded');
    });
</script>
