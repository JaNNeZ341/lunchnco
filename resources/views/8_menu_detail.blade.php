<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Menu Detail</title>

        <!-- Styles -->
        <style>
            #navigasi{
                background-color:#E2F3FD; 
                height:100px;
                padding: 0px 30px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" id="navigasi" >
            <img src="https://i.ibb.co/dr7H5ps/LnC.jpg" width="75px" alt="ayam-Kecap">
            <a class="navbar-brand" href="#">Lunch N Co</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto"></div>
                <a href="{{action('PageController@display','2_login')}}"> <button class="btn btn-primary my-2" type="button">Login</button></a>
            </div>
        </nav>
    </body>
</html>
