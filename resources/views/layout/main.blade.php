<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio Rizki Wahyu</title>
    <link rel="stylesheet" href="css/style_portofolio.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @include('partials.navbar')
   
    <div>
        @yield('containerisi')
    </div>
    {{-- scrollrevealjs --}}
    <script src="https://unpkg.com/scrollreveal"></script>
   <!-- custom js -->
    <script src="js/script_por.js"></script>

</body>
</html>