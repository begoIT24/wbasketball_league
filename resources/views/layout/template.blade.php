<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>  <!-- añadimos TW via CDN -->
    
    <title>@yield('title')</title>  <!-- añadimos title y content dinámico con yield-->
</head>
<body>
  @yield('content') 
</body>
</html>


