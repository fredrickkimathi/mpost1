<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mpost</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<style>
    .bd {
        background-color: skyblue; 
    }
    .nav-b{
        margin-top: 1%;
        padding:1%;
        display: flex;
        background-color:white;
        justify-content: space-between;
       
    }
    .lists{
        display:flex;
    }
    .lists > li{
        padding: 6px;
    }
    .wrap{
        display: flex;
        justify-content: center;
    }
    .wrap1{
        width: 66%;
        background-color: white;
        padding: 1% 2%;
        margin-top: 3%;
        border-radius: 12px;
    }
   
</style>
<body>
    <body class="bd">
        <nav class="nav-b">
            <ul class="lists">
                <li >
                    <a href="">Home</a>
                </li>
                <li ><a href="">Dashboard</a></li>
                <li ><a href="">Posts</a></li>
            </ul>
            <ul class="lists">
                <li >
                    <a href="">Fredrick Kimathi</a>
                </li>
                <li ><a href="">Login</a></li>
                <li ><a href="">Register</a></li>
                <li ><a href="">Logout</a></li>
            </ul>
        </nav>
        
    </body>
    @yield('content')
</body>
</html>