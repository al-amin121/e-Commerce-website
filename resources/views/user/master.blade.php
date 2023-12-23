
<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<div>
    @include('user.header')
</div>

<section>
    @yield('body')
</section>

@include('user.footer')


@include('user.js')


</body>

</html>
