<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Login</title>

        <!-- Styles -->
        <style>
            #tombol-container{
                text-align:center;
            }
            #tombol{
                display: inline-block;
            }
            #login{
                margin-left: 900px; /* Same as the width of the sidenav */
                width: 400px;
                padding: 30px 50px;
            }
            #prasmanan{
                width: 900px;
                position: fixed;
                z-index: 1;
                top: 100px;
                left: 0;
                overflow-x: hidden;
            }
            #title{
                font-family:"Segoe UI Regular";
                font-size: 50px;
                color: #55A2D0;
            }
            #navigasi{
                background-color:#E2F3FD; 
                height:100px;
                padding: 0px 30px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" id="navigasi" >
            <img src="https://i.ibb.co/Kj1t7dv/LnC.png" width="75px" alt="logo">
            <a class="navbar-brand" href="#" id="title">Lunch & Co</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto"></div>
            </div>
        </nav>
        <img src="https://i.ibb.co/ph2krJm/prasmanan.png" height="600px" alt="prasmanan" id="prasmanan">
        <div id="login">
            <h3 style="text-align: center">LOGIN</h3>
            <form method="post" action="{{url('')}}">
                {{csrf_field()}}
                <div class ="form-group" style="margin-top: 50px">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">    
            
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class ="form-group" id="tombol-container">
                    <button type="submit" class="btn btn-primary" id="tombol">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
