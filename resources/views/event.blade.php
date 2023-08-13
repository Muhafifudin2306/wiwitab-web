@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Event Section ======= -->
        <section id="event" class="event bg-light" data-aos="fade-up">
            <div class="container col-md-6">

                <div class="section-title">
                    <h2 class="text-2 fs-2" style="color:#1E1E1E">Events</h2>
                    <h5>Participate in and organize events in an effort to grow oneself and the environment to be more
                        productive and active</h5>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @forelse($event as $e)
                        <div class="col-lg-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="{{ asset('pictevent/'. $e->photo ) }}" class="rounded w-100" style="object-fit: cover" height="250">
                                </div>
                                <div class="col-md-6">
                                    <div class="image-content">
                                        <h5 class="event-title fs-6 py-2 text-2" style="font-weight: bold">
                                            {{ $e->title }}
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
            </div>
        </section><!-- End Event Section -->

    </main><!-- End #main -->
@endsection
