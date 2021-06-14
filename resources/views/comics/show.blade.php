@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>Comics {{ $comics->title }}</h1>
        <p>
            <div class="row mb-5">
                <div class="col-md-6">
                    <img src="{{ $comics->thumb }}" alt="">
                </div>
                <div class="col-md-6">
                    {!! $comics->description !!}
                    {{ date("d-m-Y", strtotime($comics->sale_date))}}
                </div>
            </div>

        </p>
    </div>

    <a href="{{ route('comics.index') }}">Back to archive</a>

@endsection
