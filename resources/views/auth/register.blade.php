<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Links Of CSS File -->
        <link href="{{ asset('admin/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/simplebar.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/remixicon.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet"/>
        <!-- Favicon -->
        <link href="{{ asset('admin/assets/images/favicon.png') }}" rel="icon" type="image/png"/>
        <title>{{ config('app.name', 'Laravel') }} - Sign Up</title>
    </head>
    <body class="bg-body-bg">

        <!-- Start Preloader Area -->
        <div class="preloader" id="preloader">
            <div class="preloader">
                <div class="waviy position-relative">
                    <span class="d-inline-block">S</span>
                    <span class="d-inline-block">T</span>
                    <span class="d-inline-block">K</span>
                    <span class="d-inline-block">H</span>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <div class="container-fluid">
            <div class="main-content d-flex flex-column p-0">
                <div class="m-lg-auto my-auto w-930 py-4">
                    <div class="card bg-white border rounded-10 border-white py-100 px-130">
                        <div class="p-md-5 p-4 p-lg-0">

                            {{-- Logo --}}
                            <div class="text-center mb-3">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('admin/assets/images/logo.png') }}" alt="{{ config('app.name') }}" height="40">
                                </a>
                            </div>

                            <div class="text-center mb-4">
                                <h3 class="fs-26 fw-medium" style="margin-bottom: 6px;">
                                    Sign Up
                                </h3>
                                <p class="fs-16 text-secondary lh-1-8">
                                    Already have an account?
                                    <a class="text-primary text-decoration-none" href="{{ route('login') }}">
                                        Sign In
                                    </a>
                                </p>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                {{-- Name --}}
                                <div class="mb-20">
                                    <label class="label fs-16 mb-2" for="name">
                                        Name
                                    </label>
                                    <div class="form-floating">
                                        <input
                                            class="form-control @error('name') is-invalid @enderror"
                                            id="name"
                                            name="name"
                                            placeholder="Enter name *"
                                            type="text"
                                            value="{{ old('name') }}"
                                            required
                                            autofocus
                                            autocomplete="name"
                                        />
                                        <label for="name">Enter name *</label>
                                    </div>
                                    @error('name')
                                        <span class="text-danger fs-14 mt-1 d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="mb-20">
                                    <label class="label fs-16 mb-2" for="email">
                                        Email Address
                                    </label>
                                    <div class="form-floating">
                                        <input
                                            class="form-control @error('email') is-invalid @enderror"
                                            id="email"
                                            name="email"
                                            placeholder="Enter email address *"
                                            type="email"
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="username"
                                        />
                                        <label for="email">Enter email address *</label>
                                    </div>
                                    @error('email')
                                        <span class="text-danger fs-14 mt-1 d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="mb-20">
                                    <label class="label fs-16 mb-2" for="password">
                                        Your Password
                                    </label>
                                    <div class="form-group" id="password-show-hide">
                                        <div class="password-wrapper position-relative password-container">
                                            <input
                                                class="form-control text-secondary password @error('password') is-invalid @enderror"
                                                id="password"
                                                name="password"
                                                placeholder="Enter password *"
                                                type="password"
                                                required
                                                autocomplete="new-password"
                                            />
                                            <i
                                                aria-hidden="true"
                                                class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 position-absolute cursor text-secondary"
                                                style="color: #A9A9C8; font-size: 22px; right: 15px;"
                                            ></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="text-danger fs-14 mt-1 d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Confirm Password --}}
                                <div class="mb-20">
                                    <label class="label fs-16 mb-2" for="password_confirmation">
                                        Confirm Password
                                    </label>
                                    <div class="form-group">
                                        <div class="password-wrapper position-relative password-container">
                                            <input
                                                class="form-control text-secondary password"
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                placeholder="Confirm password *"
                                                type="password"
                                                required
                                                autocomplete="new-password"
                                            />
                                            <i
                                                aria-hidden="true"
                                                class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 position-absolute cursor text-secondary"
                                                style="color: #A9A9C8; font-size: 22px; right: 15px;"
                                            ></i>
                                        </div>
                                    </div>
                                </div>

                                {{-- Terms and Conditions --}}
                                <div class="mb-20">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            id="terms"
                                            name="terms"
                                            type="checkbox"
                                            value="1"
                                            required
                                        />
                                        <label class="form-check-label fs-16" for="terms">
                                            I accept the
                                            <a class="text-decoration-none text-primary" href="#">
                                                Terms and conditions
                                            </a>
                                        </label>
                                    </div>
                                </div>

                                {{-- Submit Button --}}
                                <div class="mb-4">
                                    <button
                                        class="btn btn-primary fw-normal text-white w-100"
                                        style="padding-top: 18px; padding-bottom: 18px;"
                                        type="submit"
                                    >
                                        Sign Up
                                    </button>
                                </div>

                                {{-- Divider --}}
                                <div class="position-relative text-center z-1 mb-12">
                                    <span class="fs-16 bg-white px-4 text-secondary card d-inline-block border-0">
                                        or sign in with
                                    </span>
                                    <span class="d-block border-bottom border-2 position-absolute w-100 z-n1" style="top: 13px;"></span>
                                </div>

                                {{-- Social Login --}}
                                <ul class="p-0 mb-0 list-unstyled d-flex justify-content-center" style="gap: 10px;">
                                    <li>
                                        <a class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                           href="{{ url('/auth/facebook') }}"
                                           style="width: 30px; height: 30px; line-height: 30px; background-color: #3a559f;">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                           href="{{ url('/auth/twitter') }}"
                                           style="width: 30px; height: 30px; line-height: 30px; background-color: #0f1419;">
                                            <i class="ri-twitter-x-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                           href="{{ url('/auth/google') }}"
                                           style="width: 30px; height: 30px; line-height: 30px; background-color: #e02f2f;">
                                            <i class="ri-google-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                           href="{{ url('/auth/linkedin') }}"
                                           style="width: 30px; height: 30px; line-height: 30px; background-color: #007ab9;">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Link Of JS File -->
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
        <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/custom/custom.js') }}"></script>

    </body>
</html>
