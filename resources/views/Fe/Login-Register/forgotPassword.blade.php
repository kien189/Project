@extends('Fe.layout.master')
@section('main_fe')
    <base href="/">
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Forgot Password</h2>
                            <span> <a href="index.html">Home</a> - Forgot Password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Forgot page -->
    <section class="section-login padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Forgot Password</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cr-login" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </div>
                        <form class="cr-content-form">
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" placeholder="Enter Your Email" class="cr-form-control">
                            </div>
                            <div class="login-buttons">
                                <button type="button" class="cr-button">Submit</button>
                                <a href="register.html" class="link">
                                    Signup?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
