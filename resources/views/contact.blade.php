@extends('layouts.app')

@section('content')
    <main id="main" class="bg-light">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-2 fs-2" style="color:white">Contact</h2>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.637980681393!2d110.37088939832528!3d-7.760530136141872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5921aaa88cef%3A0x95d96cf15834ee54!2sNAZMA%20Office!5e0!3m2!1sen!2sid!4v1657047395098!5m2!1sen!2sid"
                        style="border:0; width: 100%; height: 270px;" frameborder="0" allowfullscreen allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row py-5">
                    <div class="col-lg-4">
                        <div class="address d-flex">
                            <i class="bi bi-geo-alt fs-3 mx-4"></i>
                            <div class="address-text">
                                <h4 class="fw-bold fs-6" style="color: #1E1E1E">Location:</h4>
                                <p style="color: #1E1E1E">Jl. Selokan Mataram Jl. Pogung Dalangan No.16, RT.11/RW.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="email d-flex">
                            <i class="bi bi-envelope fs-3 mx-4"></i>
                            <div class="email-text">
                                <h4 class="fw-bold fs-6" style="color: #1E1E1E">Email:</h4>
                                <p style="color: #1E1E1E">wiwtpruamazing@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="phone d-flex">
                            <i class="bi bi-phone fs-3 mx-4"></i>
                            <div class="phone-text">
                                <h4 class="fw-bold fs-6" style="color: #1E1E1E">Whatsapp:</h4>
                                <p style="color: #1E1E1E"> 081392113276</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
