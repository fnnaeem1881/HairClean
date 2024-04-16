@extends('layout.base')
@section('content')

 <!-- Contact Start -->

<div class="container-fluid pb-5 contactSection">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-0">Warsaw Poland</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-0">+4812365472</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="rounded">
                    <iframe class="rounded-top w-100"
                            style="height: 450px; margin-bottom: -6px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97536.76301265623!2d21.011518399999998!3d52.2296756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc2b20b4e699%3A0x411fa00c863e844!2sWarsaw%2C%20Poland!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class=" text-center p-4 rounded-bottom bg-primary">
                    <h4 class="text-white fw-bold">Follow Us</h4>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
