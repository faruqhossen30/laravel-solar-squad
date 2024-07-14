@extends('layouts.app')
@section('content')
    <!----------herosection------------>
    @include('inc.herosection')
    <!----------herosection------------>
    <!---------frature section--------->
    @include('inc.featuresection')
    <!---------frature section--------->
    <!---------about section--------->
    @include('inc.aboutsection')
    <!---------about section--------->
    <!--------stand out----------->
    @include('inc.standout')
    <!--------stand out----------->
    <!-------video section-------->
    @include('inc.videosection')
    <!-------video section-------->
    <!-------------status section--------->
    @include('inc.statussection')
    <!-------------status section--------->
    <!--------------nextstep section---------->
    @include('inc.nextstep')
    <!--------------nextstep section---------->
    <!-------------testmonial --------------->
    @include('inc.testmonial')
    <!-------------testmonial --------------->
    <!----------------title section--------------->
    @include('inc.titlesection')
    <!----------------title section--------------->
    <!--------------faq section ------------------>
    @include('inc.faqsection')
    <!--------------faq section ------------------>
    <!-------- subscribe section------------------>
    @include('inc.subscribe')
    <!-------- subscribe section------------------>
@endsection

@push('styles')
    <style type="text/css">
        .featureOwlSlider {
            position: relative;
            margin: 0 auto;
        }

        .owl-nav .owl-next {
            position: absolute;
            top: calc(50% - 20px);
            right: 0;
            margin-right: -20px !important;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: white !important;
            color: gray !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .owl-nav .owl-prev {
            position: absolute;
            top: calc(50% - 20px);
            left: 0;
            margin-left: -20px !important;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: white !important;
            color: gray !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .owl-theme .owl-nav {
            margin-top: 0px;
        }

        .owl-nav .owl-prev:hover {
            background-color: #102830 !important;
            color: gray !important;
        }

        .owl-nav .owl-next:hover {
            background-color: #102830 !important;
            color: white !important;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: auto !important;
        }

        .custompacity {
            opacity: .2;
        }

        .full_description ul {
            list-style: circle;
            margin-left: 30px;
            list-style-image: url("/img/check.png");
        }

        .full_description ul li {
            line-height: 38px;
            color: #282828;
        }

        .tabactivecustomclass {
            color: white;
            background: black;

        }

        .tabinactivecustomclass:hover {
            color: red
        }

        .error {
            color: red;
        }

        /* For Hero slider */
        #heroSlider .owl-dots {
            margin-top: -50px !important;
            position: relative;
        }
    </style>
@endpush


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.counter').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $this.waypoint(function() {
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                }, {
                    offset: '100%'
                });
            });

            // Popup video
            $('.video-popupbutton').magnificPopup({
                type: 'iframe',
                iframe: {
                    patterns: {
                        dailymotion: {

                            index: 'dailymotion.com',

                            id: function(url) {
                                var m = url.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                                if (m !== null) {
                                    if (m[4] !== undefined) {

                                        return m[4];
                                    }
                                    return m[2];
                                }
                                return null;
                            },

                            src: 'https://www.youtube.com/watch?v=2qQlK-c4s8o'

                        }
                    }
                }

            });
        });
    </script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>


    <script>
        $(document).ready(function() {

            $('#featureOwlSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });


            $('#testMonialSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
            $('#heroSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                items: 1
            })



        })
    </script>
@endpush
