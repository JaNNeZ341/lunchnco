<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Menu Detail</title>

        <!-- Styles -->
        <style>
            #body{
                margin: 50px 75px;
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
            #komposisi{
                text-align: center;
            }
            p{
                font-size: 25px;
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
                <div class="menu">Monday, 25 May 2020</div>
                <div class="menu">Your Menu:</div>
                <hr>
            </div>
            
            <span>
                <div style="float: left; margin-right:25px;">
                    <img src="https://i.ibb.co/N2gxxjr/ayam-Kecap-circle.png" width="250px" alt="ayam-Kecap-circle">
                </div>
                <div id="komposisi">
                    <h2>Komposisi</h2>
                    <p align="justify">Pecel adalah makanan yang terdiri dari sayur yang direbus dan lauk pauk dengan siraman bumbu sambal kacang. Sayuran yang digunakan antara lain adalah kacang panjang, taoge, mentimun, daun singkong, dan daun semanggi. Bumbu sambal kacang yang disiramkan di atas pecel biasa disebut sambal pecel.</p>
                    <a href="{{action('PageController@display9','')}}"> 
                        <button class="btn btn-primary" type="button">Change Menu</button>
                    </a>
                </div>
            </span>
        </div>
    </body>
</html>