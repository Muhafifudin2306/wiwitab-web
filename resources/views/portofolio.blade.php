@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio bg-light">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-2 fs-2">Portfolio</h2>
                    <h5>I assist companies in developing and implementing effective risk
                        management strategies.</h5>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @forelse($porto as $p)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('pictportos/'. $p->photo ) }}" class="img-fluid w-100" alt="">
                                <div class="portfolio-info">
                                    <h4 style="color:white">{{ $p->title }}</h4>
                                    <content style="color:white">{{ $p->desc }}</content>
                                    <div class="portfolio-links">
                                        <a href="/pictportos/{{ $p->photo }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="{{ $p->title }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('portofolio') }}" class="portfolio-details-lightbox"
                                            data-glightbox="type: external" title="Portfolio Details"></a>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-2 fs-6 py-2 text-center">{{ $p->title }}</h6>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section><!-- End Portfolio Section -->
    </main><!-- End #main -->
@endsection
