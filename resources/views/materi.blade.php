@extends('layouts.app')

@section('content')
    <main id="main" class="bg-light">
        <!-- ======= Materi Perkuliahan Section ======= -->
        <section id="materi" class="materi">
            <div class="container" data-aos="fade-up">
                <div class="container col-10">
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

                                <a target="_blank" href="{{ url('filemateri/'. $m->file) }}" data-gallery="portfolioGallery">
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
            </div>
        </section><!-- End Materi Perkuliahan Section -->
    </main>
@endsection
