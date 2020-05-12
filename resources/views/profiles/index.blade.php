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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">

                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>45k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{$user->profile->title}}</div>
            <div>{{$user->profile->discription}}</div>
        <div><a href="#">{{$user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="https://scontent-dfw5-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/91943512_125355662407596_1553471657714128400_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com&_nc_cat=100&_nc_ohc=kctuQpw1e1wAX_NItP4&oh=432d84388e73a76e191ab03809f942f1&oe=5EE47824 "class="w-100 " alt=""></div>
        <div class="col-4"><img src="https://scontent-dfw5-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/89294116_576255396303805_7905099592948781063_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com&_nc_cat=101&_nc_ohc=KDJ7ANjVFrUAX_rlCVH&oh=2085d10d6701314a45f155fb70f090ca&oe=5EE2B855 "class="w-100 " alt=""></div>
        <diSv class="col-4"><img src="https://scontent-dfw5-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/68849151_1951003938335731_2352172489752520239_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com&_nc_cat=107&_nc_ohc=14j_TLW4FacAX9HvMAK&oh=f3ec17cd0555b17435600816bd5c672a&oe=5EE3C311 "class="w-100 " alt=""></div>

    </div>

</div>
@endsection
