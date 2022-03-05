@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" height=100px wight=100px class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add new post </a>
            
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>12</strong> posts</div>
                <div class="pr-5"><strong>120</strong> followers</div>
                <div class="pr-5"><strong>140</strong> following</div>
            </div>
            <div class="pt-2"><strong> {{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div class="pt-2 font-weight-bold">{{$user->profile->url}}</div>
            <div><a href="#">linkedin.com</a></div>

        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"> 
            <img src="https://askforadventure.com/wp-content/uploads/2020/08/ocean-4-1280x853.jpg.webp" class="w-100">
        </div>
        <div class="col-4"> 
            <img src="https://askforadventure.com/wp-content/uploads/2020/08/ocean-4-1280x853.jpg.webp" class="w-100">
        </div>
        <div class="col-4"> 
            <img src="https://askforadventure.com/wp-content/uploads/2020/08/ocean-4-1280x853.jpg.webp" class="w-100">
        </div>
    </div>
</div>
@endsection
