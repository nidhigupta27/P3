@extends('_master')
@section('title')
 Lorem Ipsum Generator
@stop

@section('content')
<div class="container">
  <ul class="nav nav-tabs navig" role="tablist">
      <li><a href="{{url('/')}}">Home</a></li>
      <li class="active"><a href="#">Lorem Ipsum Generator</a></li>
      <li><a href="{{url('/random-user')}}">Random User Generator</a></li>
  </ul>

<div class="page-header">
<h2>Lorem Ipsum Generator</h2>
</div>
<div class="form-group">
<p> Give the number of paragarphs you want to generate? </p>
</div>
  <div class="form-group">
      {{ Form::open(array('url' => '/lorem-ipsum'))}}
           {{Form::label('paragraphs','Paragraphs')}}
           {{Form::text('paragraphs',Input::old('paragraphs'),
                  array('id' => 'paragraphs','size' => 1,'maxlength' => 2 )) }}
           {{Form::label('','(Max 99)')}}
           <div class="error">
            @foreach($errors->all(':message') as $message)
                 {{ $message }}
            @endforeach
           </div>
   </div>
   <div class="form-group">
           {{Form::submit('Generate',
                         array('name' => 'generate','class' => 'btn btn-primary'))}} &nbsp&nbsp
           {{Form::reset('Reset',array('name' => 'reset','class' => 'btn btn-primary'))}}

      {{Form::close() }}
   </div>

  @if(Input::has('generate')) 
    <p>{{$lorem_paragraphs}}</p>
  @endif
</div>
@stop