<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


      {{-- new files --}}
      <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  
    
  
      <title>@yield('title')</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-5/css/all.css')  }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')  }}">
         @stack('head.start')
      <link rel="stylesheet" href="{{ asset('assets/css/site.css')  }}">

    <title>@yield('title', 'My Laravel App')</title>
</head>
<body>
    
    @include('admin.includes.header')
    @include('admin.includes.sidebar_admin')
    <!-- Footer -->
    @include('admin.includes.footer')
     <script src="{{ asset('assets/plugins/jquery/jquery.min.js')  }}"></script>
     <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>
     <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
     <script src="{{ asset('assets/js/site.js')  }}"></script>
     <script type="text/javascript">
         $(function() {
             @if(session('success'))
             alertMessage('success', '{{ session("success") }}');
             @endif
             @if(session('message'))
             alertMessage('info', '{{ session("message") }}');
             @endif
             @if(session('error'))
             alertMessage('danger', '{{ session("error") }}');
             @endif
         });
     </script>
 
     <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
     @stack('body.end')
</body>
</html>
