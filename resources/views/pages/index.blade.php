@extends('tmp-layouts.app')

@section('content')

    @include('snipps.home-slider')

    @include('snipps.home-features')

    @include('snipps.home-about-area')

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
            <div class="border_bottom_1px position-relative">
                <div class="pattern_img d-none d-xl-block">
                    <img src="img/pattern/pattern.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="service_active owl-carousel">
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="img/service/1.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>maintenance & Repair </h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="img/service/2.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>Building Construction</h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="img/service/3.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>Bridge & Road Construction</h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="img/service/1.png" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>maintenance & Repair </h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- service_area_end  -->

    <!-- gallery_area-START -->
    <div class="gallery_area">
        <div class="container">
            <div class="gallery_nav">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <h3 class="gallery_title">Take a look Some of our <br>
                            awesome projects</h3>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cat1">Architecture</button>
                            <button data-filter=".cat2">Buildings</button>
                            <button data-filter=".cat3">Bridges</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row grid no-gutters">

                @forelse($gallery_images as $image)

                    <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3 cat3">
                        <div class="single_gallery">
                            <div class="thumb" style="height: 200px;">
                                <img src="{{ asset($image->file_path) }}" alt="">
                            </div>
                            <div class="gallery_hover">
                                <div class="hover_inner d-flex align-items-center justify-content-between">
                                    <h3>{{ $image->galleryCategory->category }}</h3>
                                    <div class="icon">
                                        <a href="{{ route('gallery') }}">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty

                @endforelse

                <!-- <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/1.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                    <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/2.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/3.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/4.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2 cat3 cat4">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/5.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/6.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat4 cat1">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/7.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2 cat3 cat4">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/8.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Maintenance & Repair</h3>
                                <div class="icon">
                                        <a href="project_details.html">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- gallery_area-END -->

    <!-- more_pro_btn_start  -->
    <a href="project.html" class="more_pro_btn">More Projects</a>
    <!-- more_pro_btn_end  -->

    <!-- chose_us_area start -->
    <div class="chose_us_area chose_bg_1">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-8">
                    <div class="chose_info">
                        <h3>Why Choose Us?</h3>
                        <p class="lasrge_text">
                            “Construction is a full service construction company offering building solutions from start
                            to finish. Our staff has been operating on NYC for ten years.
                        </p>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected.</p>
                        <!-- <div class="icon_video">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=Spi1vvZgLXw">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- chose_us_area end -->
    <!-- <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                        <div class="section_title text-center mb-55">
                                <h3>Testimonials</h3>
                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/1.png" alt="">
                                    </div>
                                    <h4>Jordan Adams</h4>
                                    <span>Client</span>
                                </div>
                                <p>“Our program is guided by the developmental milestones which embrace <br>
                                    the six most important learning domains in education”</p>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/1.png" alt="">
                                    </div>
                                    <h4>Jordan Adams</h4>
                                    <span>Client</span>
                                </div>
                                <p>“Our program is guided by the developmental milestones which embrace <br>
                                    the six most important learning domains in education”</p>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/1.png" alt="">
                                    </div>
                                    <h4>Jordan Adams</h4>
                                    <span>Client</span>
                                </div>
                                <p>“Our program is guided by the developmental milestones which embrace <br>
                                    the six most important learning domains in education”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- contact_us_start  -->
    <div class="contact_us overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="contact_text">
                        <h3>Are you looking for a Construction
                            and Industrial Experts?</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="contact_btn">
                        <a class="boxed-btn3" href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact_us_end -->

@endsection