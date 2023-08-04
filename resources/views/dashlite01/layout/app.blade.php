<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./dashlite/assets/css/dashlite.css?ver=3.1.3">
   <!--  <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.1.3"> -->
    <link id="skin-default" rel="stylesheet" href="./dashlite/assets/css/skins/theme-bluelite.css?ver=3.1.3">
    @yield('stylesheets')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('dashlite01.layout.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('dashlite01.layout.header')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('dashlite01.layout.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    @yield('modals')
    <!-- .modal -->
    <!-- JavaScript -->
    <script src="./dashlite/assets/js/bundle.js?ver=3.1.3"></script>
    <script src="./dashlite/assets/js/scripts.js?ver=3.1.3"></script>
    @yield('scripts')

</body>

</html>
