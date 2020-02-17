@extends('layouts.app') 


@section('content')

<ul>
    @foreach($posts as $post)
     <div class="image-container col-sm-2">
  <img class="img-responsive" src="/images/{{$post->path}}">

</div>
   
    <li><a href="{{route('posts.show',$post->id)}}">{{ $post->title }}</a></li>

    @endforeach
</ul>
    
@endsection