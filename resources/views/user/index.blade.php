@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">User</h1>
        <div class="card mb-4">
            <div class="card-body">
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Avatar</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <img src="https://placehold.co/50x50" alt="avatar">
            </td>
            <td>Azziadati</td>
            <td>admin26@gmail.com.test</td>
            <td>081883429166</td>
            <td>Administrator</td>
            <td>
                <a class="btn btn-primary" href="">Detail</a>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>
                <img src="https://placehold.co/50x50" alt="avatar">
            </td>
            <td>Azziadati</td>
            <td>admin26@gmail.com.test</td>
            <td>081883429166</td>
            <td>Administrator</td>
            <td>
                <a class="btn btn-primary" href="">Detail</a>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>
                <img src="https://placehold.co/50x50" alt="avatar">
            </td>
            <td>Azziadati</td>
            <td>admin26@gmail.com.test</td>
            <td>081883429166</td>
            <td>Administrator</td>
            <td>
                <a class="btn btn-primary" href="">Detail</a>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>
                <img src="https://placehold.co/50x50" alt="avatar">
            </td>
            <td>Azziadati</td>
            <td>admin26@gmail.com.test</td>
            <td>081883429166</td>
            <td>Administrator</td>
            <td>
                <a class="btn btn-primary" href="">Detail</a>
                <a class="btn btn-warning" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
</main>
@endsection
