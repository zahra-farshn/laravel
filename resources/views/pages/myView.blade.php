{{--<!DOCTYPE html>--}}
{{--<html >--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Laravel</title>--}}

{{--</head>--}}
{{--<body>--}}
{{--<div >--}}
{{--    <h1>be safhe view khosh amadid</h1>--}}
{{--    <h3>id  :{{$id}}</h3>--}}
{{--    <h3>name :{{$name}}</h3>--}}
{{--    <h3>password :{{$password}}</h3>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
@extends('layouts.app')

@section('content')
    <h1>be safhe view khosh amadid</h1>
    <h3>id  :{{$id}}</h3>
    <h3>name :{{$name}}</h3>
    <h3>password :{{$password}}</h3>
@endsection
@section('footer')
    <p>dar in ghesmat bad footer gharar migirad</p>
@endsection
