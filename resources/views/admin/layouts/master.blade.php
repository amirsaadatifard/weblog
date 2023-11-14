<!DOCTYPE html>
<html lang="en" class="loading">

<head>

    @include('admin.layouts.partials.header')

    <title>@yield('title',"وبلاگ")</title>
    @include('admin.layouts.partials.style')
</head>

<body data-col="2-columns" class=" 2-columns ">

    <div class="wrapper">

        @include('admin.layouts.partials.aside')

        @include('admin.layouts.partials.menu')

        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.partials.script')
</body>
</html>
