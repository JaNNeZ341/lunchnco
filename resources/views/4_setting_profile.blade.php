<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Setting Profile</title>

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
                <div class="menu">SETTING PROFILE</div>
                <hr>
            </div>
            
            <div id="content">
                <form method="post" action="{{url('')}}">
                {{csrf_field()}}
                    <span>
                        <div style="float: left; margin-right:25px;">
                            <img src="https://i.ibb.co/hZRtqPM/profpic.png" width="150px" alt="profpic">
                        </div>
                        <div id="nama">
                            <div class ="form-group">
                                <label for="nama-depan">NAMA DEPAN</label>
                                <input type="text" class="form-control" width="200px" name="nama-depan" value="John">    
                        
                                <label for="nama-belakang">NAMA BELAKANG</label>
                                <input type="text" class="form-control" name="nama-belakang" value="Doe">
                            </div>
                        </div>
                    </span>
                    <div class ="form-group" style="margin-top: 50px">
                        <label for="email">EMAIL</label>
                        <input type="text" class="form-control" name="email" value="johndoe@gmail.com">    
                
                        <label for="phone">PHONE</label>
                        <input type="text" class="form-control" name="phone" value="081234567890">

                        <label for="perusahaan">PERUSAHAAN</label>
                        <input type="text" class="form-control" name="perusahaan" value="PT ABC">    
                
                        <label for="allergic">ALLERGIC</label>
                        <select class="form-control" id="allergic">
                            <option selected>Kacang</option>
                            <option>Sambal</option>
                            <option>Tauge</option>
                        </select>

                        <label for="password">Password</label>
                        <br>
                        <a href="{{action('PageController@display5','')}}"> 
                            <button class="btn btn-secondary" type="button" style="width:500px">Ganti Password</button>
                        </a>
                        <br>
                        <br>

                        <a href="{{action('PageController@display3','')}}"> 
                            <button class="btn btn-primary" type="button">Simpan</button>
                        </a>
                        <a href="{{action('PageController@display3','')}}"> 
                            <button class="btn btn-light" type="button">Batal</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
