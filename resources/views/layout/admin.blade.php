<!DOCTYPE html>
<html lang="en">
@include('layout.components.header')

<body>

    <body>
        <script src="{{ asset('assets/admin/static/js/initTheme.js') }}"></script>
        <div id="app">
            @include('layout.components.sidebar')
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>{{ isset($title) ? $title : 'Dashboard' }}</h3>
                </div>
                <div class="page-content">
                    @yield('content')
                    @yield('script')
                </div>
                @include('layout.components.footer')
            </div>
        </div>
    </body>

</html>
