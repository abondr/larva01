
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>@yield("page_title")</title>

    <!-- Bootstrap core CSS -->
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
@yield("page_stylesheet")
<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body class="d-flex flex-column h-100">
    @include('includes.header',['currentPage'=> !empty($currentPage) ? $currentPage : 'home_page'])

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    @yield("page_content")
  </div>
</main>
@include('includes.footer')

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
@yield("page_scripts")
<body>
</html>
