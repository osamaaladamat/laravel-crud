@extends('layouts.master')

@section('title')
Admin
@endsection


@section('main')
<div class="container mt-5">
    <table class="table">
        <thead class="thead-dark">
            <tr class="table-secondary">
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="table-light">
                <th scope="row">{{$user->full_name}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->password}}</td>
                <form method="post" action="/admin/{{$user->id}}">
                    @method('delete')
                    @csrf
                    <td><button class="btn btn-danger" type="submit">Delete</button></td>
                </form>
                <td><a class="btn btn-warning" href="/admin/{{$user->id}}/edit">edit</a></td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
