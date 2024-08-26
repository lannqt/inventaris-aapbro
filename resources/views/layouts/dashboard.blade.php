<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-coreui/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor-coreui/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/global.js') }}"></script>
</head>
<body>

    @include('template-dashboard.sidebar')

    @include('template-dashboard.topbar')

    <div class="content">
        @yield('content')
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendor-coreui/@coreui/coreui-pro/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor-coreui/@coreui/icons/js/svgxuse.min.js') }}"></script>
    <script src="{{ asset('vendor-coreui/datatables.net/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor-coreui/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor-coreui/toastr/js/toastr.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/stepform.js') }}"></script>
</body>
</html>
