<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Change Password</title>

        <!-- Styles -->
        <style>
            #body{
                margin: 75px 75px;
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
            .menu{
                font-size: 35px;
                font-family: serif;
            }
            .form-control{
                width:500px;
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

        <div id="body">
            <div>
                <div class="menu">CHANGE PASSWORD</div>
                <hr>
            </div>
            
            <div id="content">
                <form method="post" action="{{url('')}}">
                {{csrf_field()}}
                    <div class ="form-group" style="margin-top: 50px">
                        <label for="email">Password Lama</label>
                        <span type="password" class="form-control" name="email">***********</span>

                        <label for="pass-baru">Password Baru</label>
                        <input type="password" class="form-control" name="pass-baru">    
                
                        <label for="pass-konfirm">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="pass-konfirm">
                        <a href="{{action('PageController@display3','')}}"> 
                            <button class="btn btn-link" type="button">Lupa Password?</button>
                        </a>
                        <br>
                        <br>
                        <a href="{{action('PageController@display3','')}}"> 
                            <button class="btn btn-primary" type="button">Simpan</button>
                        </a>
                        <a href="{{action('PageController@display3','')}}"> 
                            <button class="btn btn-light" type="button">Batal</button>
                        </a>
                        <br>
                        
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
