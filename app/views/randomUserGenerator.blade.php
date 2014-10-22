@extends('_master')

@section('title')
 Random User Generator
@stop

@section('content')
<div class="container">
  <ul class="nav nav-tabs navig" role="tablist">
      <li><a href="{{url('/')}}">Home</a></li>
      <li><a href="{{url('/lorem-ipsum')}}">Lorem Ipsum Generator</a></li>
      <li class="active"><a href="#">Random User Generator</a></li>
  </ul><br>
<div class="page-header">
<h2>Random User Generator</h2>
</div>
<div class="form-group">
<p> Give the number of random users you want to generate? </p>
</div>
  <div class="form-group">
      {{ Form::open(array('url' => '/random-user'))}}
           {{Form::label('users','Number of Users')}}
           {{Form::text('users',Input::old('users'),
                  array('id' => 'users','size' => 1,'maxlength' => 2 )) }}
           {{Form::label('','(Max 99)')}}
           <div class="error">
            @foreach($errors->all(':message') as $message)
                 {{ $message }}
            @endforeach
          </div>
  </div>
  <div class="form-group">
           <p><i>Would you like to include..</i></p>
  </div>

  <div class="form-group">
           
           {{Form::checkbox('birthday',Input::old('birthday'))}}
           {{Form::label('birthday','Birthday')}}
  </div>
  <div class="form-group">
           
           {{Form::checkbox('profile',Input::old('profile'))}}
           {{Form::label('profile','Profile')}}
  </div>
  <div class="form-group">
           
           {{Form::checkbox('password',Input::old('password'))}}
           {{Form::label('password','xkcd Password')}}                
  </div>
  <div class="form-group">
           {{Form::submit('Generate',
                        array('name' => 'generate','class' => 'btn btn-primary'))}} &nbsp&nbsp
           {{Form::reset('Reset',array('name' => 'reset','class' => 'btn btn-primary'))}}
      {{Form::close() }}
  </div>
  
<!-- The object of color class is created which calls the method getRandColor() to give different colors to each 
  random user. -->

  @if(Input::has('generate'))
    <?php $colorobj = new Color(); ?>
     @foreach($data as $random_user)
      <?php $color = $colorobj->getRandColor(); ?>
       <div style="color:{{ $color }};font-weight:bold">
         <p><span class="labelhead">Name: </span>{{$random_user['fakerName']}}</p> 
         @if(Input::has('birthday'))
         <p><span class="labelhead">Birthday: </span>{{$random_user['fakerBirthday']}} </p>
         @endif
         @if(Input::has('profile'))
         <p><span class="labelhead">Profile: </span><span class="profile">{{$random_user['fakerProfile']}}</span> </p>
         @endif
         @if(Input::has('password'))
         <p><span class="labelhead">XKCD Password: </span>{{$random_user['xkcdPassword']}} </p>
         @endif<hr/>
         </div>
     @endforeach
  @endif
</div>
@stop

