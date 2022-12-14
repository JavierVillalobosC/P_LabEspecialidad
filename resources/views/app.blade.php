<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title >@yield('title',$title)</title>
<style>
body {
  padding-top: 100px;
  padding-left: 430px;
}

</style>
</head>

<body>
    
    <div class = "container">
        <h1 style = "position:relative; left:130px; top:2px;"> @yield('title',$title)</h1>
        @yield('content')
    </div>
    
</body>

</html>