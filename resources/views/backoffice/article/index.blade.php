<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Backoffice || Article index</h1>

<a href="{{route('article.create')}} " class="btn btn-primary">Create</a>
<div class="container d-flex flex-wrap">
@foreach ($data as $value)
<div class="card m-5" style="width: 18rem;">
    <img src="{{asset('img/'. $value->photo->image)}} " class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title">{{$value->name}}</h4>
        @foreach ($value->commentaires as $commentaires)
            
            <p class="card-text">{{$commentaires->comment}}</p>
        @endforeach
        
        <a href="{{route('article.show',$value->id)}} " class="btn btn-warning">Show</a>
    </div>
</div>
@endforeach
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
