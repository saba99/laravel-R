@extends('layouts.app')


@section('content') 
<h3>ویرایش فرم</h3>

{!! Form::model($post,['method'=>'PATCH','action' =>['PostsController@update',$post->id]]) !!}

<div class="container"></div>
<div class="form-group">
   
   
    {!!Form::label('title', 'عنوان', ['class' => 'control-lable ']) !!}
  {!! Form::text('title',$post->title, ['class'=>'form-control']) !!}  
</div>
<div class="form-group">
   {!!Form::label('description', 'توضیحات', ['class' => 'control-lable ']) !!}
  {!! Form::textarea('description',$post->content, ['class'=>'form-control'])!!}  
</div> 
<div class="form-group">
    
  {!! Form::submit('به روز رسانی',null, ['class'=>'btn btn-warning'])!!}  
</div>

</div>


{!! Form::close() !!}
{{--<form method="post" action="/posts/{{ $post->id }}" >
@csrf
<input type="hidden" name="_method" value="PATCH">
<input type="text" name="title"  placeholder="عنوان مطلب" value="{{$post->title}}">
</br>
<textarea type="text" name="description" placeholder="توضیحات مطلب" >{{$post->content}}</textarea>
<br/>
<button type="submit" name="submit">به روز رسانی</button>
</form> --}}


{!! form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}

<div class="form-group">
    
  {!! Form::submit('حذف',null, ['class'=>'btn btn-danger'])!!}  
</div>


 
{!! Form::close() !!}
 
{{--<form method="post" action="/posts/{{ $post->id }}" >
@csrf
<input type="hidden" name="_method" value="DELETE">

<button type="submit" name="submit">حذف</button>
</form> --}}
@endsection 