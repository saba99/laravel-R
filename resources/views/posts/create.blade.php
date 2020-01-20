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

{!! Form::open(['method'=>'POST','action' => 'PostsController@store']) !!}
    
<div class="container">
<div class="form-group">
   
   
    {!!Form::label('title', 'عنوان', ['class' => 'control-lable ']) !!}
  {!! Form::text('title',null, ['class'=>'form-control']) !!}  
</div>
<div class="form-group">
   {!!Form::label('description', 'توضیحات', ['class' => 'control-lable ']) !!}
  {!! Form::textarea('description',null, ['class'=>'form-control'])!!}  
</div> 
<div class="form-group">
    
  {!! Form::submit('ذخیره',null, ['class'=>'btn btn-primary'])!!}  
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