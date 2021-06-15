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

                <div class="mb-3">
                    <label for="type" class="control-label">Type</label>
                    <select name="type" id="type">
                        <option value="graphic novel">graphic novel</option>
                        <option value="comic book">comic book</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="control-label">Image</label>
                    <input type="file" name="image" id="image" >
                </div>

                <div class="mb-3">
                    <label for="price" class="control-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="series" class="control-label">Series</label>
                    <input type="text" name="series" id="series" class="form-control">
                </div>




                <button type="submit" class="btn btn-primary">Invia</button>


                </form>
            </div>
        </div>



    </div>

    <a href="{{ route('comics.index') }}">Back to archive</a>

@endsection
