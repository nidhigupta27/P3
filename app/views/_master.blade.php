<!DOCTYPE html>

     <head>
       <meta charset="utf-8">

       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

       <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>

       <link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>

       <link href='http://fonts.googleapis.com/css?family=Volkhov:400,700italic' rel='stylesheet' type='text/css'>

       <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

       <link rel="stylesheet" href="CSS/developersBestFriend.css">
       
       <title>@yield('title','Developers Best Friend')</title>
       @yield('header')    
     </head>
     <body>
       @yield('content')
       @yield('body')
       
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>    
     </body>
</html> 