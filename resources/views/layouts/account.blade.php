@extends('layouts.base')

@section('title'){{ $title or '' }}@endsection

@push('head_styles')
    <link rel="stylesheet" href="/profile/js/lib/datetimepicker/bootstrap-datetimepicker.min.css">
    <!--Remodal-->
    <link rel="stylesheet" href="/profile/css//remodal.css">
    <link rel="stylesheet" href="/profile/css//remodal-default-theme.css">
@endpush

@section('wrapper')
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    @include('parts.header')
    <!-- End header header -->
    <!-- Left Sidebar  -->
    @include('parts.left-sidebar')
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        @include('parts.bread')
        <!-- End Bread crumb -->
        <!-- End Container fluid  -->
        @yield('container')
        <!-- End Container fluid  -->
        <!-- footer -->
        @include('parts.footer')
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Main wrapper -->
@endsection

@section('modal')
@endsection

@push('bottom_scripts')
    <!--Remodal js-->
    <script src="/profile/js/remodal.js"></script>

    <script src="/profile/js/lib/datatables/datatables.min.js"></script>
    <script src="/profile/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="/profile/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="/profile/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="/profile/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="/profile/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="/profile/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="/profile/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="/profile/js/lib/datatables/datatables-init.js"></script>
    <script src="/profile/js/lib/datetimepicker/moment.min.js"></script>
    <script src="/profile/js/lib/datetimepicker/bootstrap-datetimepicker.min.js"></script>
@endpush