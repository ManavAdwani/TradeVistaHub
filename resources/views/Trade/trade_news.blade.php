@extends('layouts.user_type.auth')

@section('content')
<div class="container" style="display: flex; flex-wrap:wrap; gap:20px;">
    @foreach ($news as $newz)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$newz['banner_image']}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                {{ strlen($newz['title']) > 30 ? substr($newz['title'], 0, 30) . '...' : $newz['title'] }}
            </h5>

            <p class="card-text">
                {{ strlen($newz['summary']) > 50 ? substr($newz['summary'], 0, 50) . '...' : $newz['summary'] }}
            </p>
            @foreach($newz['authors'] as $auth)
            <p>By - {{$auth}}</p>
            @endforeach
            <a href="{{$newz['url']}}" class="btn btn-primary" style="background-color: blue">Read More</a>
        </div>
    </div>
    @endforeach

</div>
@endsection