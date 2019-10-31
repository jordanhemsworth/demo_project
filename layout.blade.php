<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Laracasts') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    @yield('content')
    </div>
    <ul>
    <li><a href="/"> Home</a></li> 
    <li><a href="about"> About</a></li> 
    <li><a href="contact"> Contact</a></li>
    <li><a href="/projects/edit"> Edit</a></li> 
    <li><a href="/projects/create"> Create</a></li> 
    <li><a href="contact"> Contact</a></li>  
    </ul> 
    
</body>

</html>