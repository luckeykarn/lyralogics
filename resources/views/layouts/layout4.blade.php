<!DOCTYPE html>
<html lang="en">
<x-head />
    <body class="custom-cursor">
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
        <x-loader />
        <x-sidebar-widget />
        <div class="page-wrapper">

            <x-headerStyleOne />
            
            @yield('content')
            <x-loader />
            <x-scripts />
    </body>

</html>
