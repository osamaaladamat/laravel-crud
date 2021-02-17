@extends('layouts.master')

@section('title')
Home
@endsection


@section('main')

<div class="row mt-5">
    @foreach($users as $user)

    <div class="col-md-3 card  " style="width: 18rem;">
        <img class="card-img-top" style="width: 275px;height:230px" src="{{ URL::asset('images/'.$user->image) }}"
            alt="Card image cap">
        <div class="card-body d-flex flex-column">
            <h6 class="card-title">{{$user->full_name}}</h6>
            <p class="card-title">{{$user->email}}</p>
            <a href="/users/{{$user->id}}}" class="mt-auto btn primaryBtn btn-sm d-flex justify-content-center">View
                Profile</a>
        </div>
    </div>

    @endforeach
</div>
@endsection
