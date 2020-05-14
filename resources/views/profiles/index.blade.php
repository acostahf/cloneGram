@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pb-5">
<img src="https://scontent-dfw5-2.cdninstagram.com/v/t51.2885-19/s150x150/38802638_1995233293874851_6860449586587107328_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com&_nc_ohc=PcSSGRr60OEAX-BNEXn&oh=73cf9e0193fb2dfa5f9b37273b495b0c&oe=5EE536C4" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <!--passing data to the view-->
            <div class="d-flex justify-content-between align-items-baseline ">
                <h1>{{ $user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="">Edit Profile</a>
            <div class="d-flex">

                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts </div>
                <div class="pr-5"><strong>45k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
        <div><a href="#">{{$user->profile->url }}</a></div>
        </div>
    </div>

<div class="row pt-5">
    @foreach ($user->posts as $post)
    <div class="col-4 pb-4">
    <a href="/p/{{$post->id}}">
            <img src="/storage/{{ $post->image }}" class="w-100 ">
       </a>
    </div>        
    @endforeach
</div>

   

</div>
@endsection
