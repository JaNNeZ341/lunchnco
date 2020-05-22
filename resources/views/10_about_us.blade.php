<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>About Us</title>

        <!-- Styles -->
        <style>
            #body{
                margin: 75px 70px;
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
            #about{
                width: 390px;
                font-size:25px;
                float: left; 
                margin-right:40px;
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
                <div>
                    <div class="menu">ABOUT US</div>
                    <hr>
                </div>
                <span>
                    <div id="about" align="justify">
                        Kami bergerak di bidang jasa antar makanan siang yang beroperasi di sekitar Surabaya. Ayo menjadi mitra kami dalam memenuhi gizi karyawan anda. Kesehatan dan kenyamanan karyawan memaksimalkan kinerja mereka.
                    </div>
                    <div>
                        <img src="https://i.ibb.co/PYpsMNq/background.jpg" height="250px" alt="background">
                    </div>
                </span>
            </div>
            <br>

            <div>
                <div class="menu">CONTACT US</div>
                <hr>
            </div>  
            <span>
                <div style="float: left; margin-right:35px;">
                    <img src="https://i.ibb.co/P4f6Yvw/phone.png" height="40px" alt="phone">
                </div>
                <h3>081234567891</h3>
            </span>
            <span>
                <div style="float: left; margin-right:25px;">
                    <img src="https://i.ibb.co/y4qFQvR/email.png" height="40px" alt="email">
                </div>
                <h3>lunchnco@gmail.com</h3>
            </span>
        </div>
        <br>
        <a href="{{action('PageController@display3','')}}"> 
            <button class="btn btn-light" type="button">Kembali</button>
        </a>
    </body>
</html>
