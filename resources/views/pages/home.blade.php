@extends('template/welcome')
@section('content')
<div class="container d-flex flex-wrap">

    @foreach ($data1 as $value)
    <div class="card m-5" style="width: 18rem;">
        <img src="{{asset('img/'. $value->photo->image)}} " class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">{{$value->name}}</h4>
            @foreach ($value->commentaires as $commentaires)
                
                <p class="card-text">{{$commentaires->comment}}</p>
            @endforeach
            
            
        </div>
    </div>
    @endforeach
</div>

@endsection