@extends('layouts.default') @section('content')
    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="/images/hero-bg.jpg"
             data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                    {{ $main->title }}
                </h1>
                {!! $main->description !!}
            </div>
            <!-- end home-content__main -->

        </div>
        <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">{{ trans('messages.about') }}
                    <span>{{ trans('messages.who_i_am') }}</span></a></li>
            <li><a class="smoothscroll" href="#services">{{ trans('messages.services') }}
                    <span>{{ trans('messages.what_i_do') }}</span></a></li>
            <li><a class="smoothscroll" href="#contact">{{ trans('messages.contacts') }}
                    <span>{{ trans('messages.get_in_touch') }}</span></a></li>
        </ul>
        <!-- end home-sidelinks -->

        <ul class="home-social">
            </li>
            <li>
                <a href="#0">
                    <a class="home-social-text" rel="alternate" hreflang="en" href="/en" locale="en">English</span>
                    </a>
            </li>
            <li>
                <a href="#0">
                    <a class="home-social-text" rel="alternate" hreflang="en" href="/it" locale="it">Italiana</span>
                    </a>
            </li>
        </ul>
        <!-- end Language select -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">{{ trans('messages.scroll_down') }}</span>
            <span class="home-scroll__icon"></span>
        </a>
        <!-- end home-scroll -->

    </section>
    <!-- end s-home -->


    <!-- resume
        ================================================== -->
    <section id='about' class="s-about">

        <dialog class="container-fluid" id="dialog_privacy">
            <a href="#0" class="header-nav__close" title="close" id="close_privacy"><span>Close</span></a>
            <div class="col-full modal_custom modal-custom-content">
                <p class="modal-custom-title">{{ $privacy->title }}</p>
                <p class="modal-custom-content">{!! $privacy->content !!}</p>
            </div>
        </dialog>

        <dialog class="container-fluid" id="dialog_cookiepolicy">
            <a href="#0" class="header-nav__close" title="close" id="close_cookiepolicy"><span>Close</span></a>
            <div class="col-full modal_custom modal-custom-content">
                <p class="modal-custom-title">{{ $cookiepolicy->title }}</p>
                <p class="modal-custom-content">{!! $cookiepolicy->content !!}</p>
            </div>
        </dialog>

        <dialog class="container-fluid" id="dialog_social">
            <a href="#0" class="header-nav__close" title="close" id="close_social"><span>Close</span></a>
            <div class="col-full modal_custom modal-custom-content">
                <p class="modal-custom-title">{{ $social->title }}</p>
                <p class="modal-custom-content">{!! $social->content !!}</p>
            </div>
        </dialog>

        <dialog class="container-fluid" id="dialog_legal">
            <a href="#0" class="header-nav__close" title="close" id="close_legal"><span>Close</span></a>
            <div class="col-full modal_custom modal-custom-content">
                <p class="modal-custom-title">{{ $legal->title }}</p>
                <p class="modal-custom-content">{!! $legal->content !!}</p>
            </div>
        </dialog>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">{{ trans('messages.resume') }}</h3>
                <h1 class="display-1">{{ $about->title }}</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                    {!! $about->content !!}
                </p>
            </div>
        </div>
        <!-- end about-desc -->

        <div class="row">

            <div class="about-process process block-1-2 block-tab-full">
                @foreach($skills as $skill)
                    <div class="process__vline-left"></div>
                    <div class="process__vline-right"></div>

                    <div class="col-block process__col" data-item="{{$skill->id}}" data-aos="fade-up">

                        <div class="process__text">
                            <h4>{{$skill->skill}}</h4>
                            <p>{{$skill->description}}</p>
                            <progress max="100" value="{{$skill->ability}}"></progress>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- end process -->

        </div>
        <!-- end about-stats -->

    </section>

    <!-- publications
    ================================================= -->
    <section id='publications' class="s-about">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">{{ trans('messages.publications') }}</h3>
                <h1 class="display-1"></h1>
            </div>
        </div>

        @foreach($publications as $publication)
            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <a target="_blank" href="http://{{ $publication->link }}"
                       class="display-1">{{ $publication->title }}</a>
                </div>
            </div>
            <!-- end section-header -->

            <div class="row" data-aos="fade-up">
                <div class="col-full">
                    <p class="lead">
                        {!! $publication->content !!}
                    </p>
                </div>
            </div>
        @endforeach
    </section>
    <!-- end s-about -->


    <!-- services
        ================================================== -->
    <section id='services' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">{{ trans('messages.services') }}</h3>
                <h1 class="display-1">{{ $serviceHeader->title }}</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                    {!! $serviceHeader->description !!}
                </p>
            </div>
        </div>
        <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            @foreach($services as $service)
                <div class="col-block service-item " data-aos="fade-up">
                    <div class="service-icon service-icon--brand-identity">
                        <i class="{{ $service->icon }}"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- end services-list -->

    </section>
    <!-- end s-services -->


    <!-- book reviews
        ================================================== -->
    <section id='books' class="s-works">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">{{ trans('messages.my_book_reviews') }}</h3>
                <h1 class="display-1"></h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">

                @foreach($works as $work)
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="/uploads/{{ $work->preview }}" class="thumb-link" data-size="500x500">
                                    <img src="/uploads/{{ $work->preview }}"
                                         srcset="/uploads/{{ $work->preview }} 1x, /uploads/{{ $work->preview }} 2x"
                                         alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    {{ $work->title }}
                                </h3>

                            </div>

                            <a class="item-folio__project-link" title="see review">
                                {{ trans('messages.see_review') }}
                            </a>

                            <div class="item-folio__caption">
                                <p>{{ $work->description }}</p>
                            </div>

                        </div>
                        <!-- end item-folio -->
                    </div>
                    <!-- end masonry__brick -->
                @endforeach

            </div>
            <!-- end masonry -->
        </div>
        <!-- end masonry-wrap -->

        <!-- What clients are saying
            ================================================== -->

        <div class="testimonials-wrap" data-aos="fade-up">

        </div>
        <!-- end testimonials-wrap -->

    </section>
    <!-- end book reviews -->

    <!-- calculator reviews
        ================================================== -->
    <section id='calculators' class="s-works">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">{{ trans('messages.my_calculators_reviews') }}</h3>
                <h1 class="display-1"></h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">

                @foreach($calculators as $calculator)
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="/uploads/{{ $calculator->preview }}" class="thumb-link" data-size="500x500">
                                    <img src="/uploads/{{ $calculator->preview }}"
                                         srcset="/uploads/{{ $calculator->preview }} 1x, /uploads/{{ $calculator->preview }} 2x"
                                         alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    {{ $calculator->title }}
                                </h3>

                            </div>

                            <a class="item-folio__project-link" title="see review">
                                {{ trans('messages.see_review') }}
                            </a>

                            <div class="item-folio__caption">
                                <p>{{ $calculator->description }}</p>
                            </div>

                        </div>
                        <!-- end item-folio -->
                    </div>
                    <!-- end masonry__brick -->
                @endforeach

            </div>
            <!-- end masonry -->
        </div>
        <!-- end masonry-wrap -->

        <!-- What clients are saying
            ================================================== -->

        <div class="testimonials-wrap" data-aos="fade-up">

        </div>
        <!-- end testimonials-wrap -->

    </section>
    <!-- end calculators -->

    <!-- software reviews
        ================================================== -->
    <section id='software' class="s-works">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">{{ trans('messages.my_software_reviews') }}</h3>
                <h1 class="display-1"></h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">

                @foreach($softwares as $software)
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="/uploads/{{ $software->preview }}" class="thumb-link" data-size="500x500">
                                    <img src="/uploads/{{ $software->preview }}"
                                         srcset="/uploads/{{ $software->preview }} 1x, /uploads/{{ $software->preview }} 2x"
                                         alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    {{ $software->title }}
                                </h3>

                            </div>

                            <a class="item-folio__project-link" title="see review">
                                {{ trans('messages.see_review') }}
                            </a>

                            <div class="item-folio__caption">
                                <p>{{ $software->description }}</p>
                            </div>

                        </div>
                        <!-- end item-folio -->
                    </div>
                    <!-- end masonry__brick -->
                @endforeach

            </div>
            <!-- end masonry -->
        </div>
        <!-- end masonry-wrap -->


        <div class="testimonials-wrap" data-aos="fade-up">

        </div>
        <!-- end testimonials-wrap -->

    </section>


    <!-- achievements
        ================================================== -->
    <section id="stats" class="s-stats">

        <div class="row stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
            @foreach($achievements as $achievement)
                <div class="col-block stats__col ">
                    <div class="stats__count">{{ $achievement->value }}</div>
                    <h5>{{ $achievement->name}}</h5>
                </div>
            @endforeach
        </div>


    </section>
    <!-- end achievements -->


    <!-- contact
        ================================================== -->
    <section id="contact" class="s-contact">

        <div class="row">

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">{{ trans('messages.how_to_find_me') }}</h3>


                <p class="contact-address">
                    {!! $contacts->tel !!}
                </p>

                <a href="mailto:{{ $contacts->email }}" class="contact-address">
                    {!! $contacts->email !!}
                </a>
            </div>
            <!-- end contact-secondary -->

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">{{ trans('messages.follow_me') }}</h3>

                <ul class="contact-social">
                    <li>
                        <a target="_blank" href="http://{{ $contacts->facebook}}"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://{{ $contacts->linkedin }}"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://{{ $contacts->twitter }}"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://{{ $contacts->instagram }}"><i class="fab fa-instagram"></i></a>
                    </li>

                </ul>
                <!-- end contact-social -->

                <div class="contact-subscribe">
                    <br>
                    <h3 class="subhead subhead--light">{{ trans('messages.send_me_a_message') }}</h3>
                    <form class="group mc-form" novalidate="true" action="{{ route('email.send') }}" method="post">
                        <input type="email" value="" name="email" class="email" id="mc-email"
                               placeholder="Email" required="">
                        <textarea name="message" placeholder="{{ trans('messages.message') }}"
                                  style="width: 100%;color: white;"></textarea>
                        <button class="send-a-message-button" name="subscribe"
                                value="Subscribe">{{ trans('messages.send_me_a_message') }}</button>
                        <label for="mc-email" class="subscribe-message"></label> {{csrf_field()}}
                    </form>
                </div>
                <!-- end contact-subscribe -->
            </div>
            <!-- end contact-secondary -->

        </div>
        <!-- end row -->


        <div class="cl-go-top">
            <a class="smoothscroll" title="{{ trans('messages.back_to_top') }}" href="#top"><i class="icon-arrow-up"
                                                                                               aria-hidden="true"></i></a>
        </div>


    </section>
    <!-- end s-contact -->

@endsection


