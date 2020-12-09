@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img class="rounded-circle" src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_ohc=qFciZzYef_0AX9MDNTD&tp=1&oh=972c9c4273d02f7ca6152b4a2c1f1d16&oe=5FF4D467" alt=""></div>
        <div class="col-9">
            <div class="pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->name}}</h1>
                    <a href="#">Add New Post</a>
                </div>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>25K</strong> followers</div>

                <div class="pr-5"><strong>1111</strong> following</div>

            </div>
            <div class="pt-4" style="font-weight: bold;">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://picsum.photos/id/10/293" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/id/20/293 " class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/id/30/293" class="w-100">
        </div>
    </div>
</div>
@endsection
