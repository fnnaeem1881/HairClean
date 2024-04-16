@extends('layout.base')
@section('content')

        <!-- Man Hair Clean Start -->
        <div class="container-fluid man-hair-clean py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <img src="{{asset('assets')}}/img/men.jpg" class="img-fluid rounded" alt="">

                        {{-- <img src="{{ asset('assets/img/man-hair-clean.jpg') }}" class="img-fluid rounded" alt="Man Hair Clean"> --}}
                    </div>
                    <div class="col-lg-7 aboutWrap">
                        <div>
                            <p class="fs-4 text-uppercase text-primary">Hair Clean</p>
                            <h1 class="display-4 mb-4">Get the Perfect Look for Men</h1>
                            <p class="mb-4">Our skilled barbers provide professional hair cleaning services tailored to men's needs. Whether you're looking for a classic cut or a modern style, we've got you covered.</p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-cut fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Expert Barbers</h5>
                                            <p class="mb-0">Our barbers are highly trained professionals who specialize in men's haircuts and styling.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-clock fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Quick Service</h5>
                                            <p class="mb-0">Enjoy fast and efficient service, so you can get the perfect look without spending all day at the barbershop.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="my-4">Visit us today and experience the difference of a professional hair cleaning service designed for men.</p>
                        </div>
                        <a href="{{route('home')}}/#ListShow" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Man Hair Clean End -->

@endsection
