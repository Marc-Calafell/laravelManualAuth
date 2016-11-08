<!doctype html>
<html lang="en">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@endsection
<body>

@include('layouts.partials.htmlsidebar')

@yield('main-content')

@include('layouts.partials.htmlfooter')

</body>
</html>