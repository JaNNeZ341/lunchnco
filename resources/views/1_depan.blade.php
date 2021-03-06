<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Lunch&CO</title>

        <!-- Styles -->
        <style>
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
                <a href="{{action('PageController@display2','')}}"> 
                    <button class="btn btn-primary my-2" type="button">Login</button>
                </a>
            </div>
        </nav>

        <div>
            <h2 style="margin: 25px">MENU OF THE DAY</h2>
            <img src="https://i.ibb.co/fGjm0FQ/repeat.jpg" width="1400px" alt="ayam-Serundeng">
        </div>
    </body>
</html>
