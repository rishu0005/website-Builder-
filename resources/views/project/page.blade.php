@extends('main-layout')
@section('title', 'Select Page')
@section('content')

<!-- Hero Section Start -->
<section class="add-pages">

    <div class="container-fluid">
    
        <div class="container ">
            <div class="row">
                <div class="container-fluid d-flex justify-content-between">

                    <div class="col-lg-4">
                        <h2 class="fs-8 fw-3">Add pages to your website</h2>
                        <p class="text-grey">
                            Click on the thumbnails to select or deselect pages. Your site build includes up to 5 pages, and you can add more for ₹5,451 each. After checkout, you will have the opportunity to submit your content.
                        </p>
                    </div>
    
                    <div class="col-lg-7 ">

                        <form action="" method="post" class=" d-flex flex-wrap gap-5">
                            @csrf

                            <label class="page-card" id="homeOption">
                            <input type="checkbox" name="pages[]" value="Home" class="d-none">
                            <div class="page-card-image">
                                <figure class="p-2 m-0">
                                    <img src="https://wordpress.com/calypso/images/home-page-a60466fcbc131c84f248.svg" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="page-card-description mt-3">
                                <h6>Home <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Required</span></h6>
                            </div>
                        </label>

    
                         <div class="page-card" id="aboutOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0 d-flex justify-content-center h-100">
                                    <img src="https://wordpress.com/calypso/images/about-page-0ce11fb25f0ddca544da.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">About <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Popular</span></h6>
                            </div>
                        </div>
    
                         <div class="page-card" id="contactOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0 d-flex justify-content-center align-items-center h-100">
                                    <img src="https://wordpress.com/calypso/images/contact-page-ef75a906f1368869d8b0.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Contact <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Popular</span></h6>
                            </div>
                        </div>

                              <div class="page-card" id="blogOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0 d-flex justify-content-center h-100">
                                    <img src="https://wordpress.com/calypso/images/blog-page-dc188f7402830e650853.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Blog <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Popular</span></h6>
                            </div>
                        </div>

                              <div class="page-card" id="photoGalleryOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0">
                                    <img src="https://wordpress.com/calypso/images/photo-gallery-639262520bc2121493bc.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Photo Gallery <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Popular</span></h6>
                            </div>
                        </div>

                              <div class="page-card" id="serviceOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0">
                                    <img src="https://wordpress.com/calypso/images/service-showcase-cedd547f0b1aab43c97c.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Service <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Popular</span></h6>
                            </div>
                        </div>

                              <div class="page-card" id="VideoGalleryOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0 d-flex justify-content-center h-100">
                                    <img src="https://wordpress.com/calypso/images/video-gallery-4c18c02134e21b8fd4fa.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Video Gallery</h6>
                            </div>
                        </div>

                              <div class="page-card" id="pricingOption">
                            <div class="page-card-image">
                                <figure class="p-2 m-0 d-flex h-100">
                                    <img src="https://wordpress.com/calypso/images/pricing-page-676cda0f43d3f13f0405.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Pricing </h6>
                            </div>
                        </div>

                              <div class="page-card" id="portfolioOption">
                            <div class="page-card-image">
                                <figure class="p-2 h-100 d-flex m-0">
                                    <img src="https://wordpress.com/calypso/images/portfolio-3938ea12696ffd783a8d.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Portfolio</h6>
                            </div>
                        </div>

                              <div class="page-card" id="FaqOption">
                            <div class="page-card-image">
                                <figure class="p-2 h-100 d-flex justify-content-center m-0">
                                    <img src="https://wordpress.com/calypso/images/faq-page-92256fea50ac789db315.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">FAQ <span class="alert-success alert text-success p-1 h6 fw-light fs-small border-pill">Required</span></h6>
                            </div>
                        </div>

                              <div class="page-card" id="testimonialOption">
                            <div class="page-card-image">
                                <figure class="p-2 d-flex h-100 m-0">
                                    <img src="	https://wordpress.com/calypso/images/testimonials-2c0603c1bcd73c744aaa.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Testimonials</h6>
                            </div>
                        </div>

                              <div class="page-card" id="TeamPageOption">
                            <div class="page-card-image">
                                <figure class="p-2 d-flex h-100 m-0">
                                    <img src="https://wordpress.com/calypso/images/team-page-28d4cdd78cd27cfe3eaf.svg" alt="" class="img-fluid">
                                </figure>
    
                            </div>
                            <div class="page-card-description mt-3">
                                <h6 class="">Team Page</h6>
                            </div>
                        </div>

                        <button class="btn btn-primary " type="submit">Next</button>
                        </form>
                       
    
    
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End -->

@endsection

@section('script')
<script>
    $(document).ready(function(){
        const $homeOption = $('#homeOption');
        const $aboutOption = $('#aboutOption');
        const $contactOption = $('#contactOption');
        const $blogOption = $('#blogOption');
        const $photoGalleryOption = $('#photoGallertOption');
        const $serviceOption = $('#serviceOption');
        const $videoGalleryOption = $('#videoGalleryOption');
        const $pricingOption = $('#pricingOption');
        const $portfolioOption = $('#portfolioOption');
        const $faqOption = $('#faqOption');
        const $TestimonialOption = $('#testimonialOption');
        const $teamOption = $('#teamOption');


        let optionSelected = null ; 
        let selectedOption = null ;


        //for handling checkboxes
    $('.page-card-image').on('click', function(e) {
        // prevent label click from toggling checkbox immediately
        if (!$(e.target).is('input')) {
            const $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop('checked', !$checkbox.prop('checked'));
            $(this).toggleClass('selected');
        }
        });

       
    })
</script>


@endsection
