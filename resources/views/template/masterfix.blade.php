<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{asset('adminsb/https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css')}}" rel="stylesheet" />
        <link href="{{asset('adminsb/css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('adminsb/https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        {{-- navbar --}}
        @include('template.separate.navbar')
        {{-- end navbar --}}
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                {{-- sidebar --}}
                @include('template.separate.sidebar')
                {{-- end sidebar --}}
            </div>
            <div id="layoutSidenav_content">
                {{-- main --}}
                @include('template.separate.main')
                {{-- end main --}}

                {{-- footer --}}
                @include('template.separate.footer')
                {{-- end footer --}}
            </div>
        </div>
        <script src="{{asset('adminsb/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('adminsb/js/scripts.js')}}"></script>
        <script src="{{asset('adminsb/https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('adminsb/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('adminsb/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{asset('adminsb/https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('adminsb/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
