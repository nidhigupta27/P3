@extends('_master')

@section('content')

<div class='container'>
  <ul class="nav nav-tabs navig" role="tablist">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{url('/lorem-ipsum')}}">Lorem Ipsum Generator</a></li>
      <li><a href="{{url('/random-user')}}">Random User Generator</a></li>
  </ul>
    <div class="page-header col-sm-12 center">
      <h1> Developer's Best Friend </h1>
    </div>
  <div class="col-sm-6">
     <div class="panel panel-default">
       <div class="panel-heading center"><h2>Lorem Ipsum Generator</h2></div>
        <div class="panel-body">
           <p>
             In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. 
             By using a filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
           </p>
        </div>   
     </div>
    
     <div class="center">
       <a href="{{url('/lorem-ipsum')}}"><span class="btn btn-lg btn-default">
        Generate Lorem Ipsum text <span class="glyphicon glyphicon-pencil"></span></span></a>
     </div> 
  </div>
  <div class="col-sm-6">
    <div class="panel panel-default">
       <div class="panel-heading center"><h2>Random User Generator</h2></div>
        <div class="panel-body">
           <p>Generate random user data for creating user profiles for site mockups or filling up registration databases with random data for testing purposes or for any 
              other applications you want. It's like Lorem Ipsum text generator, but it creates user data, assisting the test driven development.</p>
        </div>
    </div>
    <div class="center">
      <a href="{{url('/random-user')}}"><span class="btn btn-lg btn-default">
        Generate random user <span class="glyphicon glyphicon-user"></span></span></a>
    </div> 
  </div>
</div>
 @stop
