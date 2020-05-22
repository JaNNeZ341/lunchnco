<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Home</title>

        <!-- Styles -->
        <style>
            @font-face {
            font-family: 'OptimusPrinceps';
            font-style: normal;
            font-weight: normal;
            src: local('OptimusPrinceps'), url('OptimusPrinceps.woff') format('woff');
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
            #header{
                margin: 50px 75px;
            }
            span{
                font-family: serif;
                font-size: 60px;
            }
            #profpic{
                width: 80px;
                float: right;
                margin-right: 10px;
            }
            #sidebar{
                text-align :center;
                width: 200px;
                float: right;
                background-color: #A7C2D7;
            }
            a{
                color: #000;
                font-size: 20px;
                margin: auto 0;
            }
            .line{
                border: none;
                height: 3px;
                background-color: #333;
                margin: 0;
            }
            #line-header{
                width: 70%;
            }
            #best{
                text-align: center;
                margin-top: 100px;
                font-family: "OptimusPrinceps";
            }
            #body{
                margin: 50px 75px;
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
                width: 210px;
                height: 300px;
                margin: 15px 25px;
                text-align: center;
                border: 0px;
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

        <div id="header">
            <div>
                <span>Welcome, John</span>
                <div id="sidebar">
                    <div style="border: 3px solid #000"><a href=''>JOHN</a></div>
                    <div><a href="{{action('PageController@display4','')}}">PROFILE</a></div>
                    <div><a href="{{action('PageController@display7','')}}">HISTORY</a></div>
                    <div><a href="{{action('PageController@display11','')}}">FAQ</a></div>
                    <div><a href="{{action('PageController@display10','')}}">ABOUT US</a></div>
                    <hr class="line">
                    <div><a href="{{action('PageController@display1','')}}">LOGOUT</a></div>
                </div>
                <img src="https://i.ibb.co/hZRtqPM/profpic.png" id="profpic" alt="profpic">
            </div>
            <hr class="line" id="line-header">
        </div>

        <div>
            <h1 id="best">Best Menu 2019</h1>
            <img src="https://i.ibb.co/fGjm0FQ/repeat.jpg" width="1400px" alt="repeat">
        </div>

        <div id="body">
            <div>
                <div class="menu">Your Menu on :</div>
                <div class="menu">Monday - Friday</div>
                <div class="menu">25 May 2020 - 29 May 2020</div>
                <hr>
            </div>
            <h2></h2>
            <div id="content">
                <div class="card">
                    <a href="{{action('PageController@display8','')}}">
                        <img src="https://i.ibb.co/sw35X3n/ayam-Serundeng-circle.png" width="210px" alt="ayam-Serundeng-circle">
                    </a>
                    <h4>Ayam Serundeng</h4>
                </div>
                <div class="card">
                    <a href="{{action('PageController@display8','')}}">
                        <img src="https://i.ibb.co/sw35X3n/ayam-Serundeng-circle.png" width="210px" alt="ayam-Serundeng-circle">
                    </a>
                    <h4>Ayam Serundeng</h4>
                </div>
                <div class="card">
                    <a href="{{action('PageController@display8','')}}">
                        <img src="https://i.ibb.co/G0CZbwC/lodeh-circle.png" width="210px" alt="lodeh-circle">
                    </a>
                    <h4>Lodeh</h4>
                </div>
                <div class="card">
                    <a href="{{action('PageController@display8','')}}">
                        <img src="https://i.ibb.co/4sKQ7Zs/rames-circle.png" width="210px" alt="rames-circle">
                    </a>
                    <h4>Rames</h4>
                </div>
                <div class="card">
                    <a href="{{action('PageController@display8','')}}">
                        <img src="https://i.ibb.co/Rptcxkh/sate-circle.png" width="210px" alt="sate-circle">
                    </a>
                    <h4>Sate</h4>
                </div>
            </div>
        </div>
    </body>
</html>