<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body bgcolor="green">
    <center><h1>Master</h1></center>
    <table border="1" width="100%" height="600px">
    <tr>
        <td style="width: 25%">@include('layout.sidebar')</td>
        <td style="width: 75%">@yield('content')</td>
    </tr>
    </table>
        
       
        
    
</body>
</html>