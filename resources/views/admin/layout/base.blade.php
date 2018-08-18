<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/all.css">
    <script src="https://use.fontawesome.com/6eaf2bae4f.js"></script>
</head>
<body>

    @include('includes.admin-sidebar')

<div class="off-canvas-content admin-title-bar" data-off-canvas-content>
    <!-- Your page content lives here -->
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
            <span class="title-bar-title">{{ getenv('APP_NAME') }}</span>
        </div>
    </div>

    @yield('content')
</div>

<script src="/js/all.js"></script>
</body>
</html>