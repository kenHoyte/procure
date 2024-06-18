{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Xeloro - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="{{asset('shortcut icon" href="assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('../plugins/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../plugins/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../plugins/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../plugins/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('../plugins/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            {{-- header --}}
            @include('backend.layout.header')
            <!-- ========== Left Sidebar Start ========== -->
           @include('backend.layout.leftbar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

             
            @yield('content')
             {{-- end main content  --}}

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/simplebar.min.js')}}"></script>


        <!-- Sparkline Js-->
        <script src="{{asset('../plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Chart Js-->
        <script src="{{asset('../plugins/jquery-knob/jquery.knob.min.js')}}"></script>

        <!-- Chart Custom Js-->
        <script src="{{asset('assets/pages/knob-chart-demo.js')}}"></script>


        <!-- Morris Js-->
        <script src="{{asset('../plugins/morris-js/morris.min.js')}}"></script>

        <!-- Raphael Js-->
        <script src="{{asset('../plugins/raphael/raphael.min.js')}}"></script>

        <!-- Custom Js -->
        <script src="{{asset('assets/pages/dashboard-demo.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/theme.js')}}"></script>

          <!-- third party js -->
    <script src="{{asset('../plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('../plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/dataTables.select.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('../plugins/datatables/vfs_fonts.js')}}"></script>
    <!-- third party js ends -->

     <!-- Datatables init -->
     <script src="{{asset('assets/pages/datatables-demo.js')}}"></script>


    </body>

</html>