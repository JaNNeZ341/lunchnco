<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>FAQ</title>

        <!-- Styles -->
        <style>
            #body{
                margin: 25px 75px;
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
                padding: 20px;
            }
            div h2{
                text-decoration: underline;
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
                <div class="menu">FREQUENTLY ASKED QUESTIONS</div>
                <hr>
            </div>
            <div class="form-control">
                <h2>Kapan Makanan Diantar?</h2>
                <br>
                <h5>Makanan akan diantar setiap jam 12 siang, namun perusahaan juga bisa mengganti ketentuan</h5>
            </div>
            <div class="form-control">
                <h2>Kapan saya bisa mengganti pesanan saya?</h2>
                <br>
                <h5>Sebelum hari Senin di Minggu tersebut</h5>
            </div>
            <div class="form-control">
                <h2>Bagaimana cara mengganti pesanan?</h2>
                <br>
                <h5>Login terlebih dahulu, kemudian di bawah halaman home terdapat daftar makanan minggu tersebut, klik foto makanan untuk mengganti</h5>
            </div>
            <br>
            <a href="{{action('PageController@display3','')}}"> 
                <button class="btn btn-light" type="button">Kembali</button>
            </a>
            
        </div>
    </body>
</html>
