<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Ganti Order</title>
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
            #content{
                display: flex;
                justify-content: center;
            }
            .card{
                width: 300px;
                height: 400px;
                border: 3px solid #888;
                display: flex;
                margin: 10px 50px;
                text-align: center;
            }
            button{
                width: 125px;
            }
            img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 15px;
            }
            h3{
                margin-top: 15px;
            }
            a{
                margin-top: 15px;
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
                <div class="menu">CHANGE FOOD FOR</div>
                <div class="menu">Monday, 25 May 2020</div>
                <hr>
            </div>
            
            <div id="content">
                <div class="card">
                    <img src="https://i.ibb.co/sw35X3n/ayam-Serundeng-circle.png" width=210px alt="ayam-Serundeng-circle">
                    <h3>Ayam Serundeng</h3>
                    <a href="{{action('PageController@display8','')}}"> 
                        <button class="btn btn-primary" type="button">See Details</button>
                    </a>
                    <a href="{{action('PageController@display12','')}}"> 
                        <button class="btn btn-success" type="button">Change</button>
                    </a>
                </div>
                <div class="card">
                    <img src="https://i.ibb.co/G0CZbwC/lodeh-circle.png" width="210px" alt="lodeh-circle">
                    <h3>Lodeh</h3>
                    <a href="{{action('PageController@display8','')}}"> 
                        <button class="btn btn-primary" type="button">See Details</button>
                    </a>
                    <a href="{{action('PageController@display12','')}}"> 
                        <button class="btn btn-success" type="button">Change</button>
                    </a>
                </div>
                <div class="card">
                    <img src="https://i.ibb.co/4sKQ7Zs/rames-circle.png" width="210px" alt="rames-circle">
                    <h3>Rames</h3>
                    <a href="{{action('PageController@display8','')}}"> 
                        <button class="btn btn-primary" type="button">See Details</button>
                    </a>
                    <a href="{{action('PageController@display12','')}}"> 
                        <button class="btn btn-success" type="button">Change</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
