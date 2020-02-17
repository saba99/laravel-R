@extends('layouts.app')


@section('content')

@if($errors->any())
<ul>
<div class="alert alert-danger">
@foreach($errors->all() as $error)

<li>{{$error}}</li>

@endforeach
</ul>
</div>
@endif

{!! Form::open(['method'=>'POST','action' => 'PostsController@store','files'=>true]) !!}
    
<div class="container">
<div class="form-group text-right">
   
   
    {!!Form::label('title', 'عنوان', ['class' => 'control-lable','class'=>'text-right']) !!}
  {!! Form::text('title',null, ['class'=>'form-control']) !!}  
</div>
<div class="form-group text-right">
   {!!Form::label('description', 'توضیحات', ['class' => 'control-lable ']) !!}
  {!! Form::textarea('description',null, ['class'=>'form-control'])!!}  
</div> 
<div class="form-group text-right">
   {!!Form::label('file','تصویر اصلی', ['class'=>'control-lable'])!!}
  {!! Form::file('file',null, ['class'=>'form-control'])!!}  
</div> 
<div class="form-group text-right">
    
  {!! Form::submit('ذخیره', ['class'=>'btn btn-primary'])!!}  
</div>
</div>
{!! Form::close() !!}

 {{--<form action="/posts" method="POST">
@csrf

<input type="text" name="title"  placeholder="عنوان مطلب">
</br>
<textarea type="text" name="description" placeholder="توضیحات مطلب"></textarea>
<br/>
<button type="submit" name="submit">ذخیره</button>
</form> --}}

@endsection 