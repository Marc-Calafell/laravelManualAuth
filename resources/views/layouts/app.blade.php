<!doctype html>
<html lang="es">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@endsection

<body>

@yield('main-content')

@section('htmlsidebar')
    @include('layouts.partials.htmlsidebar')

@endsection

@section('htmlfooter')
    @include('layouts.partials.htmlfooter')

@endsection
</body>
</html>