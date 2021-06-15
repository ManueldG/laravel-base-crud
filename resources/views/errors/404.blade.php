@extends('layouts.master')


@section('content')

    are you lost ??
    404
    {{ $exception->getMessage() }}
    <script>
        setTimeout(function(){history.go(-1);}, 3000);
    </script>

    <a href="javascript:history.go(-1)">Go Back</a>

@endsection
