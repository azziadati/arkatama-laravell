@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Category</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $category )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category['name'] }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning" href="">Edit</a>
                                        <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
