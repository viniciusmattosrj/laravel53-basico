@extends('site.templates.template1')

@section('content')

<h1>Home Page do Site</h1>
    <!-- Modelo que não deve ser utilizado quando há entrada de dados do usuário
        { $xss !!}
    -->
    {{$xss}}

@endsection()
