@extends('layouts.master')

@section('content')

    <div class="container">
        <h1 class="mb-5">
            Create new Comics
        </h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="title" class="control-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="control-label">description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                </form>
            </div>
        </div>



    </div>

    <a href="{{ route('comics.index') }}">Back to archive</a>

@endsection
