@extends('layouts.app')

@section('content')
    <main id="main" class="bg-light">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-2 fs-2">Profile</h2>
                </div>
                @forelse($about as $a)
                    <div class="row pb-5">
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/user/img/Buwiwid.png') }}" alt="Buwiwid.png"
                                style="aspect-ratio: 3/3; 160px; width: 100%;">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <h3>{{ $a->work }}</h3>
                            <p>
                                {{ $a->desc }}
                            </p>
                            <ul>
                                <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> {{ $a->age }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> {{ $a->phone }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> {{ $a->city }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> {{ $a->degree }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> {{ $a->email }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->
@endsection
