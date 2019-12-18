<?php session_start(); error_reporting(E_ALL ^ E_NOTICE); include("config.php"); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>วิธีใช้งาน</title>
    <?php include 'head_01.php' ?>
	</style>
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
			<p><font size = "3">1).ที่หน้าหลัก ผู้เข้าใช้งานครั้งแรกต้องสมัครสมาชิกก่อน </font></p>
			<img src="images/home.jpg" alt="homepage" width="100%" height="50%">
			<p><font size = "3">กรอกข้อมูลให้ครบถ้วนทุกช่อง แล้วกดสมัครสมาชิก </font></p>
			<img src="images/register.jpg" alt="registerpage" width="50%" height="20%">
			<p><font size = "3">2).เมื่อสมัครสาชิกเสร็จสิ้น สามารถล็อคอินเข้าใช้งานที่ปุ่ม"เข้าสู่ระบบ"</font></p>
			<img src="images/home2.jpg" alt="homepage" width="100%" height="50%">
			<p><font size = "3">กรอกชื่อผู้ใช้งาน และ รหัสผ่านตามที่ตั้งไว้ให้ถูกต้อง</font></p>
			<img src="images/login.jpg" alt="loginpage" width="50%" height="20%">
			<p><font size = "3">3).หน้าพบเจอของหาย เป็นหน้าที่ผู้เจอของสามารถลงข้อมูลของที่เจอได้</font></p>
			<img src="images/home3.jpg" alt="homepage" width="100%" height="50%">
			<img src="images/founding.jpg" alt="foundingpage" width="50%" height="20%">
			<p><font size = "3">4).หน้าประกาศตามหา เป็นหน้าที่ผู้ทำของหายสามารถประกาศลงเว็บนี้ กรอกข้อมูลของที่หายให้ครบถ้วน</font></p>
			<img src="images/home4.jpg" alt="homepage" width="100%" height="50%">
			<img src="images/findout.jpg" alt="findoutpage" width="50%" height="20%">
			<p><font size = "3">5).หน้าค้นหาของหาย เป็นหน้าที่ผู้ใช้งานสามารถหาของที่ลงในเว็บนี้ได้ ตามข้อมูลที่ผู้ใช้กรอก</font></p>
			<img src="images/home5.jpg" alt="homepage" width="100%" height="50%">
			<img src="images/searching.jpg" alt="homepage" width="50%" height="20%">
			<p><font size = "3" >6).หากพบปัญหา ผู้ใช้สามารถติดต่อผู้รับผิดชอบระบบได้<a href="contact.php">---ที่นี่---</a></font></p>
			<img src="images/home6.jpg" alt="homepage" width="50%" height="20%">
			<br><br><br><br><br>
			
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