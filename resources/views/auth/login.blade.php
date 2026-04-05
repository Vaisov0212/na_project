<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Links Of CSS File -->
        <link href="{{ asset('admin/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/simplebar.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/prism.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/quill.snow.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/remixicon.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/swiper-bundle.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/jsvectormap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet"/>
        <!-- Favicon -->
        <link href="{{ asset('admin/assets/images/favicon.png') }}" rel="icon" type="image/png"/>
        <title>{{ config('app.name', 'Laravel') }} - Sign In</title>
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

                            <div class="text-center mb-4">
                                <h3 class="fs-26 fw-medium" style="margin-bottom: 6px;">
                                    Sign In
                                </h3>
                                <p class="fs-16 text-secondary lh-1-8">
                                    Don't have an account yet?
                                    <a class="text-primary text-decoration-none" href="{{ route('register') }}">
                                        Sign Up
                                    </a>
                                </p>
                            </div>

                            {{-- Session xatosi (email verified va boshqalar) --}}
                            @if (session('status'))
                                <div class="alert alert-success mb-3" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

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
                                            autofocus
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
                                                autocomplete="current-password"
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

                                {{-- Remember me + Forgot password --}}
                                <div class="mb-20 d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            id="remember_me"
                                            name="remember"
                                            type="checkbox"
                                        />
                                        <label class="form-check-label fs-16" for="remember_me">
                                            Remember me
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-decoration-none text-primary fs-16" href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                    @endif
                                </div>

                                {{-- Submit --}}
                                <div class="mb-4">
                                    <button
                                        class="btn btn-primary fw-normal text-white w-100"
                                        style="padding-top: 18px; padding-bottom: 18px;"
                                        type="submit"
                                    >
                                        Sign In
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

        <button class="switch-toggle dark-btn p-0 bg-transparent lh-0 border-0" id="switch-toggle"></button>

        <!-- Start Theme Setting Area -->
        <button aria-controls="offcanvasScrolling" class="btn btn-primary theme-settings-btn p-0 position-fixed z-2 text-center rounded-circle" data-bs-target="#offcanvasScrolling" data-bs-toggle="offcanvas" style="bottom: 24px; right: 24px; width: 56px; height: 56px; line-height: 54px;" type="button">
            <i class="text-white ri-settings-3-fill fs-28" data-bs-placement="left" data-bs-title="Click On Theme Settings" data-bs-toggle="tooltip"></i>
        </button>
        <div aria-labelledby="offcanvasScrollingLabel" class="offcanvas offcanvas-end bg-white border-0" data-bs-backdrop="true" data-bs-scroll="true" id="offcanvasScrolling" style="box-shadow: 0 4px 20px #2f8fe812 !important; max-width: 300px;" tabindex="-1">
            <div class="offcanvas-header bg-light p-20">
                <h5 class="offcanvas-title fs-18 fw-medium" id="offcanvasScrollingLabel">Configuration Panel</h5>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
            </div>
            <div class="offcanvas-body p-0 overflow-hidden">
                <div class="last-child-none" data-simplebar="" style="max-height: 858px;">
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">RTL Mode</h4>
                        <div class="rtl-btn">
                            <label id="switch">
                                <input class="toggle-switch rtl-switch" id="slider" onchange="toggleTheme()" type="checkbox"/>
                            </label>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Only Sidebar Dark</h4>
                        <div class="sidebar-light-dark" id="sidebar-light-dark">
                            <input class="toggle-switch sidebar-dark-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Only Header Dark</h4>
                        <div class="header-light-dark" id="header-light-dark">
                            <input class="toggle-switch header-dark-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Right Sidebar</h4>
                        <div class="right-sidebar" id="right-sidebar">
                            <input class="toggle-switch right-sidebar-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Hide Sidebar</h4>
                        <div class="icon-sidebar" id="icon-sidebar">
                            <input class="toggle-switch icon-sidebar-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Bordered Card</h4>
                        <div class="card-border" id="card-border">
                            <input class="toggle-switch border-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <h4 class="fs-15 fw-medium mb-12">Card Border Radius</h4>
                        <div class="card-radius-square" id="card-radius-square">
                            <input class="toggle-switch border-radius-switch" type="checkbox"/>
                        </div>
                    </div>
                    <div class="p-20 border-bottom child">
                        <a class="btn btn-primary text-white" href="#">Buy StarCode</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Theme Setting Area -->

        <!-- Link Of JS File -->
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
        <script src="{{ asset('admin/assets/js/quill.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/data-table.js') }}"></script>
        <script src="{{ asset('admin/assets/js/prism.js') }}"></script>
        <script src="{{ asset('admin/assets/js/clipboard.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/custom/custom.js') }}"></script>

    </body>
</html>
