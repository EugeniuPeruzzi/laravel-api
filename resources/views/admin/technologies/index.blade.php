@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                    <h1>Le tue tecnologie</h1>
                    <div class="btn-container d-flex">
                        <div class="btn-container">
                            <a href="{{ Route('admin.technologies.create') }}"><button class="btn btn-secondary">Crea nuova
                                    tecnologia</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Slug</th>
                                <th>Strumenti</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($techs as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <a href="{{ Route('admin.technologies.show', $item->id) }}"
                                            class="btn btn-sm btn-primary">Show</a>
                                        <a href="{{ Route('admin.technologies.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ Route('admin.technologies.destroy', $item) }}"
                                            class="d-inline-block" data-project-title="{{ $item->title }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ">
                                                Delete
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
