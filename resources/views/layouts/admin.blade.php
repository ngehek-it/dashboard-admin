<!DOCTYPE html>
<html lang="en">
@include('partials.admin._head')

<body>
<div id="app">
    <div class="main-wrapper">
        @include('partials.admin._navbar')

        @include('partials.admin._sidebar')

        <!-- Main Content -->
        @yield('content')

        @include('partials.admin._footer')
    </div>
</div>

@include('partials.admin._script')
</body>
</html>
