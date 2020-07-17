
<?php

$email = isset($_SESSION['email']) ? $_SESSION['emails'] : "";
$emailErr = isset($_SESSION['error']) ? $_SESSION['error'] : "";
$emailsuc = isset($_SESSION['success'])  ? $_SESSION['success'] : "";

?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Scanner</title>

    <link rel="stylesheet" href="js/wow.js">
    <link rel="stylesheet" href="js/popper.js">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
   
    <div class="container-fluid page1">
        <div class="row ">
            <div class="col-5 right">
                <h1 class="letter1">COUNTERFEIT</h1>
                <p class="letter2">MO <span><img src="/images/for_jenni_2.png" alt="image" class="img2"></span> NEY SCANNER</p>
                <h4 class="letter3">Easy Mobile Money Scanner and<br>Counterfeit detector</h4>
                <form action="index.php" method="POST" class="form1 wow animate__backInLeft"  data-wow-duration="3s" data-wow-delay="0s" >
                    <input type="email" id="email" class="btn" placeholder="Email">
                    <button type="submit" class="btn"  id="sub">SUBSCRIBE</button>       
                    
                    <div style="color:red;" class="message mt-3">
                        <?php echo $emailErr;?>
                    </div>
                    <div style="color:green;" class="message mt-3">
                        <?php echo $emailsuc; ?>
                    </div>

                </form>
            </div>

            <div class="col-7 left wow animate__backInRight"  data-wow-duration="3s" data-wow-delay="0s">
                <div class="image1">
                    <img src="/images/for_jenny_1.png" class="img1" alt="">
                </div>
            </div>
        </div>
    </div>
<!------------Features Session----------->
    <div class="container features">
        <h1 class="header wow animate__rollIn"  data-wow-duration="1s" data-wow-delay="0s">FEATURES</h1>

        <div class="row row1">
            <div class="col-4 first wow animate__fadeInLeftBig"  data-wow-duration="1s" data-wow-delay="0s">
                <p class="letter5"><span><img src="/images/Vector (21).png" alt="image" class="img3"><img src="/images/Vector (15).png"  alt="image" class="img4"></span> Scan</p>
                <p class="letter5"><span><img src="/images/Vector (24).png" alt="" class="img3"></span> Authenticate</p>
                <p class="letter5"><span><img src="/images/Vector (23).png" alt="" class="img3"></span> Alarm</p>
            </div>
            <div class="col-4">
                <img src="/images/for_jenni_1.png" alt="image" class="img5">
            </div>
            <div class="col-4 second wow animate__fadeInRightBig"  data-wow-duration="2s" data-wow-delay="0s">
                <p class="letter6"><span><img src="/images/uv 1.png" alt="image" class="img7"></span> Ultraviolet</p>
                <p class="letter5"><span><img src="/images/Vector (18).png" alt="image" class="img6"></span> Watermark<br> &nbsp;&nbsp;&nbsp; detection</p>
                <p class="letter7"><span><img src="/images/Vector (20).png" alt="image" class="img6"></span> Magnetic ink <br>&nbsp;&nbsp;&nbsp;detection</p>
            </div>
        </div>
    </div>

   <!-------Screeshot session--------->

    <div class="container-fluid">
        <div class="page3">
            <h1 class="header2" >SCREENSHOTS</h1>
            <div class="row">
                <div class="col-md-4 wow animate__fadeInLeftBig"  data-wow-duration="2s" data-wow-delay="0s">
                    <img src="/images/for_jenni_4.png" alt="image" class="img8">
                </div>
                <div class="col-md-4 wow animate__flipInX"  data-wow-duration="1s" data-wow-delay="0s">
                    <img src="/images/for_jenni_7.png" alt="image" class="img9">

                </div>
                <div class="col-md-4 wow animate__fadeInRightBig"  data-wow-duration="2s" data-wow-delay="0s">
                    <img src="/images/for_jenni_3.png" alt="image" class="img10">
                    
                </div>
            </div>
        </div>
    </div>

   <!-------Coming soon session--------->
    <div class="page4">
        <h1 class="letter8 wow animate__fadeInTopRight"  data-wow-duration="2s" data-wow-delay="0s">CO <span><img src="/images/for_jenni_2.png" alt="image" class="img11"></span> MING SOON</h1>

        <form action="process.php" method="POST" class="form2 wow animate__backInLeft"  data-wow-duration="3s" data-wow-delay="0s" >
                    <input type="email" id="email" class="btn" placeholder="Email">
                    <button type="submit" class="btn"  id="sub2">Be Notified</button>       
                    
                    <div style="color:red;" class="message mt-3">
                        <?php echo $emailErr;?>
                    </div>
                    <div style="color:green;" class="message mt-3">
                        <?php echo $emailsuc; ?>
                    </div>

                </form>
    </div>

    <img src="/images/vector (14).png" alt="image" class="img12">
    <img src="/images/for_jenny_5.png" alt="image" class="img13">

    <footer class="foot">
        <img src="/images/Vector (30).png" class="footer-pic" alt="image">
        <img src="/images/Vector (29).png" class="footer-pic" alt="image"> 
        <img src="/images/Vector (31).png" class="footer-pic" alt="image"> 
        <img src="/images/Vector (32).png" class="footer-pic" alt="image"> 
        <img src="/images/Vector (39).png" class="footer-pic" alt="image"> 
        <img src="/images/Rectangle 42.png" class="footer-pic2" alt="image"> 
        <img src="/images/Vector (22).png" class="footer-pic3" alt="image"> 
         <span class="fooer">Valerieinteriors@gmail.com</span> 
 

    </footer>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

</body>
</html>