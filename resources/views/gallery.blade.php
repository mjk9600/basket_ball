@extends('layout')
@section('title', 'The CBL ')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery- Images</title>
    <link rel="stylesheet" href={{url('css/gallery.css')}}>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style>
    body{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        @media only screen and (max-width: 540px) {
            .underLine{
                width: 80vw;
            }
            .btnWidth{
                width: fit-content !important;
            }
        }
        .btnWidth{
            font-weight: bold;
            width: 25%;
        }
        .imageSlide>img{
            height: 20vh;
        }
        img{
            height:50vh;
            width:35vh;
        }
        .slick-slide img{
            border: 2px solid gray;
            height: 35vh;
            width: 55vh;
        }
        .btn:hover{
            color:#e40a10 !important;
            border: 2px solid #e40a10 !important;
            box-sizing: border-box;
        }
.slick-dots li {
    margin: 0;
}

.slick-dots {
    margin-top: 50px;
}

.slick-dots li button:before, .slick-dots li.slick-active button:before {
    color: transparent;
    opacity: 1;
}

.slick-dots li button:before {
    margin-top: 5px;
    background-color: transparent;
    border: 1px solid rgb(90, 90, 90);
    border-radius: 20%;
    display: inline-block;
    height: 5px;
    width: 10px;
}
.slick-dots li.slick-active button:before {
    background-color: #e40a10;
}
    </style>
</head>
<body class=" bg-black text-light">
    <h1 class=" text-center fw-bolder">Gallery - Images</h1>
    <div class=" container">
        <div class="row justify-content-center m-2 mt-4">
            <a href="#" class="btn border-2 border-white bg-light text-dark btnWidth fw-bolder me-2 borderButton">Images</a>
            <a href="#" class="btn border-2 border-white bg-light text-dark btnWidth fw-bolder borderButton">Videos</a>
        </div>
    </div>
    <hr>
    <div class="mt-3"></div>
    <div class="imageSlide container ">
        <div>
            <img src="images/playerImage/image1.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image2.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image3.jpg">
        </div>
        <div>
            <img src="images/playerImage/image4.jpg">
        </div>
        <div>  
            <img src="images/playerImage/image5.jpg">
        </div>
        <div>   
            <img src="images/playerImage/image6.jpg">
        </div>
        <div>
            <img src="images/playerImage/image1.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image2.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image3.jpg">
        </div>
        <div>
            <img src="images/playerImage/image4.jpg">
        </div>
        <div>  
            <img src="images/playerImage/image5.jpg">
        </div>
        <div>   
            <img src="images/playerImage/image6.jpg">
        </div>
    </div>
    

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
      $('.imageSlide').slick({
        // setting-name: setting-value
        dots:true,
        infinite: true,
        arrow:true,
        rows: 2,
        slidesPerRow: 3,
        arrow:true,
        adaptiveHeight: true,
        //  centerMode: true,
        // mobileFirst:true,
        pauseOnHover: true,
        responsive: [
        
        {
            breakpoint: 600,
            settings: {
                slidesPerRow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
            slidesPerRow: 1    
            }
        }

  ]   
      });
    });
    </script>
</body>
</html>

@endsection