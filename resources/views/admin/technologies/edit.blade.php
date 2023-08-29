@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Modifica "{{ $technology->name }}"</h2>
                    <a href="{{ Route('admin.technologies.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="col-12 mb-5">
                <form action=" {{ Route('admin.technologies.update', $technology->id) }} " method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-2">
                                <!-- Titolo -->
                                <label class="control-label my-2">Titolo</label>
                                <input type="text" name="name" id="name" placeholder="Inserisci il titolo"
                                    class="form-control" value="{{ old('name') ?? $technology->name }}" required>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Slug -->
                                <label class="control-label my-2">Slug</label>
                                <input type="text" name="slug" id="slug" placeholder="Inserisci la slug"
                                    class="form-control" value="{{ old('slug') ?? $technology->slug }}" required>
                            </div>
                            <div class="col-12 text-center my-5">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Modifica</button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
