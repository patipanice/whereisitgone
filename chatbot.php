<?php session_start(); error_reporting(E_ALL ^ E_NOTICE); include("config.php"); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>วิธีใช้งาน</title>
    <?php include 'head_01.php' ?>

</head>

<body id="top">
     

    <!-- pageheader
    ================================================== -->
    <div>
<?php 
 include("config.php");
 include 'Head.php' ;
 
 ?></div>

    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
			<h1>Chat Bot : Seeky</h1>
			<img src="images/seeky.png" alt="seeky" width="40%" height="40%">
			<br><br><br>
			<img src="images/qrcode.png" alt="qrcode" width="50%" height="50%">
			<br>
			<p style="color:black;">Line ID:@627mgcyg</p>
			
			
            </div>
        </div>
        
		    
    </section>

    <!-- s-extra
    ================================================== -->
     <section class="s-extra">

        <div class="row narrow section-intro add-bottom text-center">
            <div class="col-twelve tab-full">

                

                <p class="lead" >ระบบพิเศษ : เมื่อของที่พบ และ ของที่หายนั้น มีความตรงกันระบบจะแจ้งเตือนไปที่ email ของทั้ง 2 ฝ่าย ให้มาเช็คว่าของที่หาตรงกับของที่พบหรือไม่</p>

            </div>
    </div>
 <!-- ประกาศ ================================================== -->
 <div class="post"><?php include 'post.php';?>
    </div>
        

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <div class="footer">
<?php include 'footer.php';
?>
</div>


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
<?php mysqli_close($objCon);   ?>

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>