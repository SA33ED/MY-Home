@extends('layout')
@section('title')
Home-Page
@endsection
@section('page-contant')
            <!-- Navigation-->
            <nav class="navbar navbar-light bg-light static-top">
                <div class="container">
                    <a class="navbar-brand" href="#!"><img src="{{asset("logo.png")}}" style="width: 120px"></a>
                    <a class="btn btn-primary" href="#signup">Sign Up</a>
                </div>
            </nav>
            <!-- Masthead-->
            <header class="masthead">
                <div class="container position-relative" id="landing">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="text-center text-white">
                                <!-- Page heading-->
                                <h1 class="mb-5">Welcome To My Home Website Sign in Now! </h1>

                                <form class="form-subscribe" method="POST" action="{{ route('login') }}" id="login">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control form-control-lg"  type="email" placeholder="Email Address" name="email" required/><br>
                                            <input class="form-control form-control-lg"  type="password" placeholder="Password" name="password" required/><br>
                                            <div class="col-auto"><button class="btn btn-primary btn-lg "  type="submit">Submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Icons Grid-->
            <section class="features-icons bg-light text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                                <h3>Fully Responsive</h3>
                                <p class="lead mb-0">There is 24/7 customer service</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                                <h3>You'll find what U want</h3>
                                <p class="lead mb-0">There are all kinds of properties</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                                <h3>Easy to Use</h3>
                                <p class="lead mb-0">Enjoy with us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Image Showcases-->
            <section class="showcase">
                <div class="container-fluid p-0">
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset("homepage/assets/img/istockphoto-1177797403-612x612.jpg")}}')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>Apartment?!</h2>
                            <p class="lead mb-0">There are more than 100,000 apartments for rent!</p>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset("homepage/assets/img/314234927.jpg")}}')"></div>
                        <div class="col-lg-6 my-auto showcase-text">
                            <h2>Villa?!</h2>
                            <p class="lead mb-0">You will find everything you are looking for in designs, shapes and components</p>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset("homepage/assets/img/Times_Square,_Seoul.jpg")}}')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>Mall?!</h2>
                            <p class="lead mb-0">There are all spaces, floors and places!</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials-->
            <section class="testimonials text-center bg-light">
                <div class="container">
                    <h2 class="mb-5">What people are saying...</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="{{asset('homepage/assets/img/testimonials-1.jpg')}}" alt="..." />
                                <h5>Margaret E.</h5>
                                <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="{{asset('homepage/assets/img/testimonials-2.jpg')}}" alt="..." />
                                <h5>Fred S.</h5>
                                <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="{{asset('homepage/assets/img/testimonials-3.jpg')}}" alt="..." />
                                <h5>Sarah W.</h5>
                                <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to Action-->
            <section class="call-to-action text-white text-center" id="signup">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div>
                                    {{-- <x-input-label for="name" :value="__('Name')" /> --}}

                                    <x-text-input placeholder="Full Name" id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus />

                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}

                                    <x-text-input placeholder="Email Address" id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                                    <x-text-input placeholder="Password" id="password" class="form-control form-control-lg"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                                    <x-text-input placeholder="Confirm Password" id="password_confirmation" class="form-control form-control-lg"
                                                    type="password"
                                                    name="password_confirmation" required />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="btn btn-primary btn-lg">
                                        {{ __('Register') }}
                                    </x-primary-button><br>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#landing">
                                        {{ __('Already registered?') }}
                                    </a>

                                </div>
                            </form>

                            {{-- <form class="form-subscribe" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg"  type="text" placeholder="Full Name"  name="name"/><br>
                                        <input class="form-control form-control-lg"  type="email" placeholder="Email Address"  name="email"/><br>
                                        <input class="form-control form-control-lg"  type="password" placeholder="Password"  name="password"/><br>
                                        <input class="form-control form-control-lg"  type="password" placeholder="Repassword"  name="password_confirmation"/><br>
                                        <div class="col-auto"><button class="btn btn-primary btn-lg "  type="submit">Submit</button></div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer-->
            <footer class="footer bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><a href="#!">About</a></li>
                                <li class="list-inline-item">⋅</li>
                                <li class="list-inline-item"><a href="#!">Contact</a></li>
                                <li class="list-inline-item">⋅</li>
                                <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                                <li class="list-inline-item">⋅</li>
                                <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                            </ul>
                            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-4">
                                    <a href="#!"><i class="bi-facebook fs-3"></i></a>
                                </li>
                                <li class="list-inline-item me-4">
                                    <a href="#!"><i class="bi-twitter fs-3"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><i class="bi-instagram fs-3"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
