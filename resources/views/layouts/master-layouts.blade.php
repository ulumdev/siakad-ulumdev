<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Admin & Dashboard</title>
    {{-- App Favicon --}}
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon">
    {{-- App CSS --}}
    @include('layouts.head-css')

    {{-- Styles Custom --}}
    <style>
        #back-to-top {
            position: fixed;
            bottom: 40px;
            right: 28px;
            transition: all .5s ease;
            display: none;
            z-index: 1000
        }

        #back-to-top:hover {
            -webkit-animation: fade-up 1.5s linear infinite;
            animation: fade-up 1.5s linear infinite
        }
    </style>

</head>

@section('body')
    @include('layouts.body')
@show
<!-- Begin page -->
<div id="layout-wrapper">
    @include('components.topbar')
    @include('components.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <!-- Start content -->
            <div class="container-fluid">
                @yield('content')
            </div> <!-- content -->
        </div>
        @include('components.footer')
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->
<!-- END Right Sidebar -->

@include('layouts.vendor-scripts')
</body>

</html>
