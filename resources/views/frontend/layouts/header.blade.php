<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                                $settings = DB::table('settings')->get();

                            @endphp
                            {{-- <li><i class="ti-headphone-alt"></i>
                                @foreach ($settings as $data)
                                    {{ $data->phone }}
                                @endforeach
                            </li> --}}
                            <li>
                                <i class="ti-headphone-alt"></i>
                                @foreach ($settings as $data)
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $data->phone) }}">
                                        {{ $data->phone }}
                                    </a>
                                @endforeach
                            </li>
                            <li>
                                @foreach ($settings as $data)
                                    <a style="color: #25D366; font-size: 16px; padding: 8px;"
                                        href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $data->phone) }}"
                                        target="_blank">
                                        <i class="fa fa-whatsapp" style="font-size:26px; color: #25D366;"></i>WhatsApp
                                    </a>
                                @endforeach
                            </li>
                            <li><i class="ti-email"></i>
                                @foreach ($settings as $data)
                                    <a href="mailto:{{ $data->email }}">{{ $data->email }}</a>
                                @endforeach
                            </li>

                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            @if ($setting->ecommerce_enabled)
                                <li><i class="ti-location-pin"></i> <a href="{{ route('order.track') }}">Track Order</a>
                                </li>
                            @endif

                            {{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
                            @auth
                                @if (Auth::user()->role == 'admin')
                                    <li><i class="ti-user"></i> <a href="{{ route('admin') }}" target="_blank">Dashboard</a>
                                    </li>
                                @else
                                    <li><i class="ti-user"></i> <a href="{{ route('user') }}" target="_blank">Dashboard</a>
                                    </li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{ route('user.logout') }}">Logout</a></li>
                            @else
                                <li><i class="ti-power-off"></i><a href="{{ route('login.form') }}">Login /</a>
                                    <a href="{{ route('register.form') }}">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Middle Inner Start -->
    {{-- @include('frontend.layouts.middle-inner') --}}
    <!-- Middle Inner End -->

    <!-- Header Inner -->
    <div class="header-inner" style="background-color: #E30613;">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{ Request::path() == 'home' ? 'active' : '' }}"><a
                                                    href="{{ route('home') }}">Home</a></li>
                                            <li class="{{ Request::path() == 'about-us' ? 'active' : '' }}"><a
                                                    href="{{ route('about-us') }}">About Us</a></li>
                                            <li class="@if (Request::path() == 'product-grids' || Request::path() == 'product-lists') active @endif"><a
                                                    href="{{ route('product-grids') }}">Products</a><span
                                                    class="new">New</span></li>
                                            {{ Helper::getHeaderCategory() }}
                                            <li class="{{ Request::path() == 'blog' ? 'active' : '' }}"><a
                                                    href="{{ route('blog') }}">Blog</a></li>

                                            <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a
                                                    href="{{ route('contact') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
