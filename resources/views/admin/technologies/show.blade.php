@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $technology->image) }}" class="card-img-top" alt="" width="600px">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $technology->name }}</h5>
                        <p class="card-text"> {{ $technology->slug }}</p>
                    </div>
                    <a href="{{ Route('admin.technologies.index') }}" class="btn btn-primary">Back to techs</a>
                </div>
            </div>
        </div>
    </div>
@endsection
