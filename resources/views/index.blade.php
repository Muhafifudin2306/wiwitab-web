@extends('layouts.app')

@section('content')
    <section id="hero"
        style="background-image: url('{{ asset('assets/user/img/landing-page-02.png') }}');background-size: cover;">
        <div class="hero-content">
            <div class="container">
                <div class="row" id="reverse">
                    <div class="col-lg-5">
                        <div class="left-content" data-aos="zoom-in" data-aos-delay="100">
                            {{-- <div class="ft-shadow text-1">Hello, I'm</div> --}}
                            <hr class="arrow d-none d-md-inline">
                            <div class="text-2">Wiwit AB</div>
                            <div class="ft-shadow text-3"> Professional Risk Management who
                                experienced in developing and
                                implementing
                                effective risk management strategies for various organizations</div>

                            <a href="{{ route('about') }}" class="btn-about text-2 mb-5 my-3 fs-6">See my profile</a>

                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-inline">
                        <div class="right-content" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('assets/user/img/Buwiwid.png') }}" style="width:100%" alt="Buwiwid.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio py-5 my-3">
        <div class="container" data-aos="fade-up">
            <div class="container col-md-6">
                <div class="section-title">
                    <h2 class="fs-2 text-2">Portfolio</h2>
                    <h6 class="fs-5">I assist companies in developing and implementing effective risk
                        management strategies.</h6>
                </div>
            </div>


            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse($porto as $p)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app my-3">
                        <div class="portfolio-wrap border">
                            <img src="{{ asset('pictportos/'. $p->photo ) }}" class="img-fluid w-100" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $p->title }}</h4>
                                <div class="portfolio-links">
                                    <a href="/pictportos/{{ $p->photo }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{ $p->desc }}"><i
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
            <div class="btn-detail">
                <a type="button" href="{{ route('portofolio') }}" data-aos="fade-up" class="btn-about fs-6 text-2">More
                    Detail</a>
            </div>

        </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Event Section ======= -->
    <section id="event" class="event py-5 my-3 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="container col-md-6">
                <div class="section-title">
                    <h2 class="fs-2 text-2">Events</h2>
                    <h6 class="fs-5">Participate in and organize events in an effort to grow oneself and the
                        environment
                        to be more
                        productive and active</h6>
                </div>
            </div>

        </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                @forelse($event as $e)
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                    <img src="{{ asset('pictevent/'. $e->photo ) }}" class="rounded w-100" style="object-fit: cover" height="250">
                            </div>
                            <div class="col-md-6">
                                <div class="image-content">
                                    <h5 class="event-title fs-6 py-2 text-2" style="font-weight: bold"> {{ $e->title }}
                                    </h5>
                                    <p class="ellepsis"> {{ $e->content }}</p>
                                    <a class="ellepsis text-decoration-underline" target="_blank"
                                        href="{{ $e->link }}">Show
                                        Detail <i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="btn-detail">
                <a type="button" href="{{ route('event') }}" data-aos="fade-up" class="btn-about text-2 fs-6">More
                    Detail</a>
            </div>
        </div>
    </section><!-- End Event Section -->

    <main id="main">
        @csrf
        <!-- ======= Materi Perkuliahan Section ======= -->
        <section id="materi" class="materi py-5 mb-5">
            <div class="container" data-aos="fade-up">
                <div class="container col-md-6">
                    <div class="section-title">
                        <h2 class="fs-2 text-2">Material</h2>
                        <h6 class="fs-5">Documentation of lecture material as a learning medium to support
                            various
                            activities</h6>
                    </div>
                </div>

            </div>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @forelse($materi as $m)
                        <div class="spacer"></div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <embed class="pdf border" type="application/pdf" src="{{ asset('filemateri/'. $m->file) }}"
                                style="width:100%;height:100%" frameborder="0" alt="Card image cap"></embed>
                        </div>
                        <div class="col-lg-5">
                            <div class="pt-5 pt-md-0 mt-3 mt-lg-0">
                                <h5 style="font-weight: bold">{{ $m->title }}</h5>
                                <p class="ellepsis">{{ $m->desc }}</p>

                                <a target="_blank" href="{{ url('filemateri/'. $m->file) }}"
                                    data-gallery="portfolioGallery">
                                    <button class="btn btn-outline-success fw-bold" style="font-size: 0.8rem"><i
                                            class="bi bi-download fw-bold mx-2"></i> Download</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="spacer"></div>
                    @empty
                    @endforelse
                </div>
                <div class="btn-detail">
                    <a type="button" href="{{ route('materi') }}" class="btn-about text-2 fs-6">More Detail</a>
                </div>
            </div>
            <div class="spacer" style="margin-top:20px"></div>
        </section><!-- End Materi Perkuliahan Section -->
    @endsection
