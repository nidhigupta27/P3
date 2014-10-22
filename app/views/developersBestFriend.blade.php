@extends('_master')

@section('content')

<div class='container'>
  <ul class="nav nav-tabs navig" role="tablist">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{url('/lorem-ipsum')}}">Lorem Ipsum Generator</a></li>
      <li><a href="{{url('/random-user')}}">Random User Generator</a></li>
  </ul>
    <div class="page-header">
      <h1> Developer's Best Friend </h1>
    </div>
    <div class="panel panel-default">
       <div class="panel-heading"><h2>Lorem Ipsum Generator</h2></div>
        <div class="panel-body">
           <blockquote>
             In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. 
             By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
           </blockquote>
        </div>   
    </div>
    <div class="center">
      <a href="{{url('/lorem-ipsum')}}"><button type="button" class="btn btn-lg btn-default">
        Generate a Lorem Ipsum text <span class="glyphicon glyphicon-pencil"</span></button></a>
    </div><br>
    <div class="panel panel-default">
       <div class="panel-heading"><h2>Random User Generator</h2></div>
        <div class="panel-body">
           <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
        </div>
    </div>
    <div class="center">
      <a href="{{url('/random-user')}}"><button type="button" class="btn btn-lg btn-default">
        Generate a random user <span class="glyphicon glyphicon-user"></span></button></a>
    </div>
</div>
 @stop
