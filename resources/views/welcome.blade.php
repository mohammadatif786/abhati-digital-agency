@extends('layouts.landing-page')
@section('title', 'Welcome')
@section('content')

    <!-- banner-section -->
    <section class="banner-section p_relative">
        <div class="pattern-layer">
            <div class="pattern-1 rotate-me" style="background-image: url(assets/images/shape/shape-1.png);">
            </div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="pattern-3 rotate-me" style="background-image: url(assets/images/shape/shape-3.png);">
            </div>
            <div class="pattern-4"></div>
            <div class="pattern-5"></div>
            <div class="pattern-6" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="pattern-7" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="pattern-8" style="background-image: url(assets/images/shape/shape-6.png);"></div>
            <div class="pattern-9" style="background-image: url(assets/images/shape/shape-7.png);"></div>
            <div class="pattern-10" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="pattern-11 rotate-me" style="background-image: url(assets/images/shape/shape-9.png);">
            </div>
            <div class="pattern-12" style="background-image: url(assets/images/shape/shape-10.png);"></div>
            <div class="pattern-13"></div>
            <div class="pattern-14" style="background-image: url(assets/images/shape/shape-11.png);"></div>
        </div>
        <div class="curved-circle">
            <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                    class="lightbox-image gradient-color" data-caption=""><i class="icon-17"></i></a></div>
            <span class="curve-text">Marketing&nbsp;&nbsp;insight&nbsp;&nbsp;agency&nbsp;&nbsp;Digital</span>
        </div>
        <div class="auto-container">
            <div class="content-box mb_200">
                <div class="text-box centred mb_60">
                    <h2>Unlocked Your <br />Brand In <span class="gradient-color">Digital</span> agency</h2>
                    <div class="link-box"><a href="index.html"><img src="assets/images/icons/icon-2.svg" alt=""></a>
                    </div>
                </div>
                <div class="inner-box">
                    <div class="single-item">
                        <div class="icon-box"><img src="assets/images/icons/icon-3.svg" alt=""></div>
                        <h3>Marketing <br />Strategy</h3>
                    </div>
                    <div class="funfact-inner">
                        <div class="counter-block">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                            </div>
                            <p>Satisfaction <br />Clients</p>
                        </div>
                        <div class="counter-block">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="500">0</span><span>+</span>
                            </div>
                            <p>Projects <br />Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <figure class="image-box"><img src="assets/images/banner/banner-1.jpg" alt=""></figure>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- service-section -->
    <section class="service-section pt_120 pb_120">
        <div class="auto-container">
            <div class="sec-title mb_50 centred">
                <div class="sub-title">
                    <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-4.svg') }}" alt=""></div>
                    <h5>Best Our Service</h5>
                </div>
                <h2>Explore what services <br />we’re offering</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">

                @foreach ($services as $key => $service)
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-5.svg') }}" alt="">
                            </div>
                            <div class="category"><span class="gradient-color">Service {{ $key + 1 }} </span>
                            </div>
                            <h3><a
                                    href="{{ route('service.details', ['service_id' => $service->id]) }}">{{ $service->title }}</a>
                            </h3>
                            <ul class="info-list">
                                @foreach ($service->servicePoints->take(2) as $point)
                                    <li><a href="{{ route('service.details', ['service_id' => $service->id]) }}">
                                            {{ $point->point }} </a>
                                    </li>
                                @endforeach
                            </ul>
                            <p>{{ substr($service->description, 0, 50) }}
                                {{ strlen($service->description) > 50 ? '...' : '' }}</p>
                            <div class="link"><a href="{{ route('service.details', ['service_id' => $service->id]) }}"><i
                                        class="icon-28"></i></a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- about-section -->
    <section class="about-section pb_120">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box">
                            <span class="big-text gradient-color">ab</span>
                            <figure class="image-box"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                            <div class="clients-info">
                                <ul class="clients-list">
                                    <li class="clients"><span>5K+ <br />Clients</span></li>
                                    <li><img src="assets/images/resource/clients-1.png" alt=""></li>
                                    <li><img src="assets/images/resource/clients-2.png" alt=""></li>
                                </ul>
                                <div class="rating-box">
                                    <h3>A+ ratting</h3>
                                    <p>Average 5.00 ratting</p>
                                    <ul class="rating-list">
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box">
                            <div class="sec-title mb_11">
                                <div class="sub-title">
                                    <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                                    <h5>About Us</h5>
                                </div>
                                <h2>We have bright a new digital work system for you.</h2>
                            </div>
                            <div class="text-box mb_30">
                                <p>Qenean posuere pretium suscipit. Maecenas sapien nibh, pellentesque quis placerat
                                    sed, sollicitudin vitae erat. Praesent feugiat est ligula.</p>
                                <p>Nam at nunc mollis, fermentum libero vitae, tempus velit. Aenean et gravida
                                    tortor, nec finibus risus.</p>
                            </div>
                            <figure class="signature"><img src="assets/images/icons/signature-1.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="text-box mb_50">
                                <p>Duis in lobortis velit. Aenean elit velit, interdum vel ex quis, porttitor
                                    bibendum nisl. Sed iaculis quis purus ut scelerisque. <br />Quisque a
                                    <span>turpis non sapien pulvinar fringilla</span> malesuda quis libero. Ut
                                    gravida gravida enim, in maximus augue sollicitudin gravida. Morbi pulvinar
                                    lobortis nunc.
                                </p>
                                <ul class="list-item">
                                    <li>UX/UI</li>
                                    <li>Branding</li>
                                    <li>Web Design</li>
                                </ul>
                            </div>
                            <figure class="image-box"><img src="assets/images/resource/about-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- feature-section -->
    <section class="feature-section">
        <div class="bg-color"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <div class="sub-title">
                                <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt="">
                                </div>
                                <h5>What We Do Best</h5>
                            </div>
                            <h2>Building Lasting Digital Experiences</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.svg" alt="">
                                        </div>
                                        <h3>Marketing Strategy</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-10.svg" alt="">
                                        </div>
                                        <h3>Earning <br />Traffic</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-11.svg" alt="">
                                        </div>
                                        <h3>Digital Marketing</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.svg" alt="">
                                        </div>
                                        <h3>Marketing Strategy</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-10.svg" alt="">
                                        </div>
                                        <h3>Earning <br />Traffic</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-11.svg" alt="">
                                        </div>
                                        <h3>Digital Marketing</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.svg" alt="">
                                        </div>
                                        <h3>Marketing Strategy</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-10.svg" alt="">
                                        </div>
                                        <h3>Earning <br />Traffic</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-11.svg" alt="">
                                        </div>
                                        <h3>Digital Marketing</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-9.svg" alt="">
                                        </div>
                                        <h3>Marketing Strategy</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-10.svg" alt="">
                                        </div>
                                        <h3>Earning <br />Traffic</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="assets/images/icons/icon-11.svg" alt="">
                                        </div>
                                        <h3>Digital Marketing</h3>
                                        <p>Pellentesque sit amet urna justo. Fusce velit nibh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- team-section -->
    <section class="team-section centred pt_120 pb_120">
        <div class="auto-container">
            <div class="sec-title light mb_50">
                <div class="sub-title">
                    <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                    <h5>Best Our Member</h5>
                </div>
                <h2>We solution with the Our <br />trusting Member’s</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">James Jayden</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Sebastian Jack</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Lucas Alexander</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Logan Jackson</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">James Jayden</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Sebastian Jack</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Lucas Alexander</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Logan Jackson</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">James Jayden</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Sebastian Jack</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Lucas Alexander</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Logan Jackson</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">James Jayden</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Sebastian Jack</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Lucas Alexander</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt="">
                        </figure>
                        <div class="lower-content">
                            <h3><a href="index.html">Logan Jackson</a></h3>
                            <ul class="social-links">
                                <li><a href="index.html">Facebook</a></li>
                                <li><a href="index.html">Twitter</a></li>
                                <li><a href="index.html">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- portfolio-section -->
    <section class="portfolio-section pt_120 pb_120">
        <div class="outer-container">
            <div class="sec-title centred mb_45">
                <div class="sub-title">
                    <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                    <h5>Best of Portfolio</h5>
                </div>
                <h2>Recent & featured our <br />solution works</h2>
            </div>
            <div class="sortable-masonry">
                <div class="filters centred mb_50">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".modern">Modern</li>
                        <li class="filter" data-role="button" data-filter=".branding">branding</li>
                        <li class="filter" data-role="button" data-filter=".uxui">UX/UI</li>
                        <li class="filter" data-role="button" data-filter=".web_design">Web Design</li>
                        <li class="filter" data-role="button" data-filter=".content_writing">Content Writing</li>
                        <li class="filter" data-role="button" data-filter=".social_marketing">Social Marketing
                        </li>
                        <li class="filter" data-role="button" data-filter=".seo">SEO</li>
                        <li class="filter" data-role="button" data-filter=".media">Media</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all web_design modern branding social_marketing">
                        <div class="portfolio-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/portfolio/portfolio-1.jpg"
                                        alt=""></figure>
                                <div class="content-box">
                                    <ul class="info-list">
                                        <li class="gradient-color">Web Design</li>
                                        <li class="gradient-color">2023</li>
                                    </ul>
                                    <h3><a href="project-details.html">Fashion Chair Design Brand</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all modern web_design material content_writing seo">
                        <div class="portfolio-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/portfolio/portfolio-2.jpg"
                                        alt=""></figure>
                                <div class="content-box">
                                    <ul class="info-list">
                                        <li class="gradient-color">Web Design</li>
                                        <li class="gradient-color">2023</li>
                                    </ul>
                                    <h3><a href="project-details.html">Website Design</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all uxui branding content_writing social_marketing media">
                        <div class="portfolio-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/portfolio/portfolio-3.jpg"
                                        alt=""></figure>
                                <div class="content-box">
                                    <ul class="info-list">
                                        <li class="gradient-color">Web Design</li>
                                        <li class="gradient-color">2023</li>
                                    </ul>
                                    <h3><a href="project-details.html">Graphic Design</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all modern branding uxui social_marketing seo">
                        <div class="portfolio-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/portfolio/portfolio-4.jpg"
                                        alt=""></figure>
                                <div class="content-box">
                                    <ul class="info-list">
                                        <li class="gradient-color">Web Design</li>
                                        <li class="gradient-color">2023</li>
                                    </ul>
                                    <h3><a href="project-details.html">Digital Marketing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all uxui branding web_design media">
                        <div class="portfolio-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/portfolio/portfolio-6.jpg"
                                        alt=""></figure>
                                <div class="content-box">
                                    <ul class="info-list">
                                        <li class="gradient-color">Web Design</li>
                                        <li class="gradient-color">2023</li>
                                    </ul>
                                    <h3><a href="project-details.html">Branding Design</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all modern uxui content_writing seo media">
                        <div class="portfolio-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/portfolio/portfolio-5.jpg"
                                        alt=""></figure>
                                <div class="content-box">
                                    <ul class="info-list">
                                        <li class="gradient-color">Web Design</li>
                                        <li class="gradient-color">2023</li>
                                    </ul>
                                    <h3><a href="project-details.html">Fashion Chair Design Brand</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn centred pt_20">
                <a href="index.html" class="theme-btn-two"><span>View More</span></a>
            </div>
        </div>
    </section>
    <!-- portfolio-section end -->


    <!-- pricing-section -->
    <section class="pricing-section pb_90">
        <div class="auto-container">
            <div class="sec-title centred mb_45">
                <div class="sub-title">
                    <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                    <h5>Best of Pricing</h5>
                </div>
                <h2>Recent & featured our <br />Pricing Table</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="pricing-table">
                            <div class="table-header">
                                <div class="icon-box"><img src="assets/images/icons/icon-12.svg" alt="">
                                </div>
                                <h2>$0.96<span class="gradient-color">/m</span></h2>
                                <p class="gradient-color">Regular Plan</p>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mb_30">
                                    <li>Unlimited paid ticket</li>
                                    <li>Google analytics integration</li>
                                    <li>Customizable registration</li>
                                    <li>500 Email invitations event</li>
                                    <li class="light">Event reminders</li>
                                    <li class="light">Registration form</li>
                                </ul>
                                <a href="index.html" class="theme-btn-three"><span>Sign Up</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="pricing-table">
                            <div class="table-header">
                                <div class="icon-box"><img src="assets/images/icons/icon-13.svg" alt="">
                                </div>
                                <h2>$3.96<span class="gradient-color">/m</span></h2>
                                <p class="gradient-color">Business Plan</p>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mb_30">
                                    <li>Unlimited paid ticket</li>
                                    <li>Google analytics integration</li>
                                    <li>Customizable registration</li>
                                    <li>500 Email invitations event</li>
                                    <li>Event reminders</li>
                                    <li class="light">Registration form</li>
                                </ul>
                                <a href="index.html" class="theme-btn-three"><span>Sign Up</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="pricing-table">
                            <div class="table-header">
                                <div class="icon-box"><img src="assets/images/icons/icon-14.svg" alt="">
                                </div>
                                <h2>$9.96<span class="gradient-color">/m</span></h2>
                                <p class="gradient-color">Gold Plan</p>
                            </div>
                            <div class="table-content">
                                <ul class="feature-list clearfix mb_30">
                                    <li>Unlimited paid ticket</li>
                                    <li>Google analytics integration</li>
                                    <li>Customizable registration</li>
                                    <li>500 Email invitations event</li>
                                    <li>Event reminders</li>
                                    <li>Registration form</li>
                                </ul>
                                <a href="index.html" class="theme-btn-three"><span>Sign Up</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


    <!-- faq-section -->
    <section class="faq-section pt_50 pb_50">
        <div class="bg-layer" style="background-image: url(assets/images/background/faq-bg.jpg);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                    <div class="content_block_four">
                        <div class="content-box">
                            <div class="sec-title mb_45">
                                <div class="sub-title">
                                    <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                                    <h5>Our Frequency</h5>
                                </div>
                                <h2>Explore functional, Frequency & questions</h2>
                                <p>Praesent sit amet tortor sed neque tincidunt accumsan et in nunc. Etiam itellus
                                    sit amet nunc auctor sollicitudin. Integer a scelerisque. Vestibulum porttitor
                                    arcu vel fermentum fermentum.</p>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="logo-icon"><img src="assets/images/icons/icon-15.svg" alt="">
                                        </div>
                                        <div class="icon-box"></div>
                                        <h6>What can we do for you with Figma?</h6>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="text">
                                            <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis.
                                                Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque
                                                urna, iaculis et orci id, euismod tempo.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="logo-icon"><img src="assets/images/icons/icon-15.svg" alt="">
                                        </div>
                                        <div class="icon-box"></div>
                                        <h6>What is the standard size of business cards?</h6>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis.
                                                Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque
                                                urna, iaculis et orci id, euismod tempo.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="logo-icon"><img src="assets/images/icons/icon-15.svg" alt="">
                                        </div>
                                        <div class="icon-box"></div>
                                        <h6>What can we do for you Adobe Photoshop, XD & Figma?</h6>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis.
                                                Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque
                                                urna, iaculis et orci id, euismod tempo.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="logo-icon"><img src="assets/images/icons/icon-15.svg" alt="">
                                        </div>
                                        <div class="icon-box"></div>
                                        <h6>Do you create one single full home page?</h6>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis.
                                                Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque
                                                urna, iaculis et orci id, euismod tempo.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section pt_120 pb_140">
        <div class="auto-container">
            <div class="sec-title mb_65 centred">
                <div class="sub-title">
                    <div class="icon-box"><img src="assets/images/icons/icon-4.svg" alt=""></div>
                    <h5>Testimonials</h5>
                </div>
                <h2>Our Abhati says Best Of <br />Reviews Client</h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Content Writer</span>
                        <h2>Lucas Alexander</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Ui Designer</span>
                        <h2>James Mendela</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Content Writer</span>
                        <h2>Lucas Alexander</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Ui Designer</span>
                        <h2>James Mendela</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Content Writer</span>
                        <h2>Lucas Alexander</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Ui Designer</span>
                        <h2>James Mendela</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Content Writer</span>
                        <h2>Lucas Alexander</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <span class="designation gradient-color">Ui Designer</span>
                        <h2>James Mendela</h2>
                        <p>Nulla ac ultricies velit. Quisque convallis eros elit, sit ametfe est varius sed. Nulla
                            pulvinar lacinia libero, sit amet.</p>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png" alt="">
                            </figure>
                            <h3>A+ ratting</h3>
                            <span>Average 5.00 ratting</span>
                            <ul class="rating-list">
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                                <li><i class="icon-9"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- news-section -->
    <section class="news-section pb_120">
        <div class="auto-container">
            <div class="title-inner mb_50">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 left-column">
                        <div class="left-content align-3">
                            <h5><img src="assets/images/icons/icon-4.svg" alt="">Our blogs & News</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ornare sit amet
                                enim id pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 right-column">
                        <div class="right-content">
                            <h2>solution with Company news & insights</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-1.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">22 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">02 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">Agency Marketing Four Solution Things to Business.</a>
                            </h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-2.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">21 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">00 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What can we do for you Adobe Photoshop, XD &
                                    Figma?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-3.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">20 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">05 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What is the standard size of business cards?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-1.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">22 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">02 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">Agency Marketing Four Solution Things to Business.</a>
                            </h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-2.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">21 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">00 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What can we do for you Adobe Photoshop, XD &
                                    Figma?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-3.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">20 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">05 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What is the standard size of business cards?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-1.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">22 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">02 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">Agency Marketing Four Solution Things to Business.</a>
                            </h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-2.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">21 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">00 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What can we do for you Adobe Photoshop, XD &
                                    Figma?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-3.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">20 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">05 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What is the standard size of business cards?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-1.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">22 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">02 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">Agency Marketing Four Solution Things to Business.</a>
                            </h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-2.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">21 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">00 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What can we do for you Adobe Photoshop, XD &
                                    Figma?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/news/news-3.jpg" alt="">
                            </figure>
                            <div class="link"><a href="blog-details.html"><i class="icon-2"></i></a></div>
                        </div>
                        <div class="lower-content">
                            <span class="post-date">20 /<br />Aug</span>
                            <ul class="post-info">
                                <li><img src="assets/images/icons/icon-16.svg" alt=""><a
                                        href="blog-details.html">by Noile Mohsin</a></li>
                                <li><img src="assets/images/icons/icon-17.svg" alt="">05 Comments</li>
                            </ul>
                            <h3><a href="blog-details.html">What is the standard size of business cards?</a></h3>
                            <ul class="category-list">
                                <li><a href="blog-details.html">Business</a></li>
                                <li><a href="blog-details.html">Agency</a></li>
                                <li><a href="blog-details.html">Digital</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- clients-section -->
    <section class="clients-section pb_120">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png"
                            alt=""></a></figure>
                <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-6.png"
                            alt=""></a></figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- instagram-section -->
    <section class="instagram-section">
        <div class="outer-container">
            <div class="instagram-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <div class="instagram-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/instagram-1.jpg" alt="">
                        </figure>
                        <div class="link"><a href="index.html"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="instagram-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/instagram-2.jpg" alt="">
                        </figure>
                        <div class="link"><a href="index.html"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="instagram-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/instagram-3.jpg" alt="">
                        </figure>
                        <div class="link"><a href="index.html"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="instagram-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/instagram-4.jpg" alt="">
                        </figure>
                        <div class="link"><a href="index.html"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="instagram-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/instagram-5.jpg" alt="">
                        </figure>
                        <div class="link"><a href="index.html"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="instagram-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/resource/instagram-6.jpg" alt="">
                        </figure>
                        <div class="link"><a href="index.html"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram-section end -->
@endsection
