<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/typed.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <title>Home</title>
</head>
<body>
    <?php include ("includes/menu.php")?>
    <section id="home">
    <!-- Primeiro Carrosel -->
    <div class="myslider owl-carousel owl-theme">
        <div class="item" data-dot="<button>o</button>">
            <img src="img/img.jpg">
        </div>
        <div class="item" data-dot="<button>o</button>">
            <img src="img/img.jpg">
        </div>
        <div class="item" data-dot="<button>o</button>">
            <img src="img/img.jpg">
        </div>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <center>
            <h3 style="margin: 45px;">O que é o tráfico de pessoas?</h3>
            <p>A Organização das Naçoes Unidas (ONU), define tráfico de pessoas como "o recrutamento, o transporte, a tranferência, o alojamento ou o acolhimento de pessoas, recomendo-se á ameaça ou a uso da força ou a outras formas de coação, ao rapto, á fraude, ao engano, ao abuso de autoridade ou a situação de vulna...A Organização das Naçoes Unidas (ONU), define tráfico de pessoas como "o recrutamento, o transporte, a tranferência, o alojamento ou o acolhimento de pessoas, recomendo-se á ameaça ou a uso da força ou a outras formas de coação, ao rapto, á fraude, ao engano, ao abuso de autoridade ou a situação de vulnab"<br><a class="hvr-icon-forward" href="#" style="    float: right;font-weight: 900;color: black;">Saiba mais <i class="fas fa-angle-right hvr-icon"></i></a></p>
            
        </center>
       
          
    </div>
    <div class="col-lg-3"></div>


   
    <?php include ("includes/footer.php")?>
    <script>
    $(document).ready(function(){
    $('.myslider').owlCarousel({
            items:1,
            nav:false,
            dots: false,
            dotsData: true,
            items:1 ,
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false
        });
    });
    $(document).ready(function(){
    $('.myslider2').owlCarousel({
            items:1,
            nav:false,
            dots: true,
            dotsData: true,
            items:1 ,
            loop:true,
            autoplay:true,
            autoplayTimeout:7000,
            autoplayHoverPause:false
        });
    });
    </script>
</body>
</html>