<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>@yield('title')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body style="background-color: #f6f1ea; color: #1c1917; margin: 0; padding: 0;">

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <!-- Before </body> -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800, // Animation duration in ms
        once: true,     // Whether animation should happen only once while scrolling down
        offset: 120,    // Offset (in px) from the original trigger point
        disable: function() {
            return window.innerWidth < 768; // Disable AOS on small devices (<768px)
        }
    });
</script>

</body>

</html>