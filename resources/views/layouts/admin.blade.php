<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('/adm/assets/css/styles.min.css') }}">
</head>

<body>
  <main>
    @yield('content')
  </main>
  <script src="{{ asset('/adm/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/adm/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/adm/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('/adm/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('/adm/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('/adm/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('/adm/assets/js/dashboard.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

</body>

</html>