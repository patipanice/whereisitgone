<?php   session_start();   
		error_reporting(E_ALL ^ E_NOTICE);  
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>WHERE IS IT GONE </title>
    <?php include 'head_01.php' ?>

</head>

<body id="top">
   	<?php         
   		include("config.php");
        $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
        $objQuery = mysqli_query($objCon,$strSQL) or die( mysqli_error($db));
        $objResult = mysqli_fetch_array($objQuery);
	?>
    <!-- pageheader ================================================== -->
    <section class="s-pageheader s-pageheader--home">
        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->
            
             <!-- end header__social -->
                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">
                    <h2 class="header__nav-heading h6">Site Navigation</h2>
      <ul class="header__nav">
                        <li><a href="index.php" style="color:white;" title="">หน้าแรก</a></li>
                        <li><a href="founding.php"style="color:white;" title="">เจอของ</a></li>
                        <li><a href="findout.php"style="color:white;" title="">ของฉันหาย</a></li>
                        <li><a href="searching.php"style="color:white;" title="">AI ลงประกาศ</a></li>                       
                        <li><a href="howtouse.php" style="color:white;"title="">วิธีการใช้งาน</a></li>
                        <li><a href="about.php"style="color:white;" title="">เกี่ยวกับเรา</a></li>
                        <li><a href="contact.php"style="color:white;"title="">ติดต่อ</a></li>  
                        <li><a href="chatbot.php" style="color:white;"title="">แชทบอท</a></li>          
                        <?php  if($_SESSION['UserID'] == ""){ ?>       
                        <li><a href="sqlmember/login.php" title="">เข้าสู่ระบบ</a></li> 
                        <?php } ?>
                        <?php  if($_SESSION['UserID'] != ""){ ?>
                        <p align="right" style="color:white ;"> Username : <?php echo $objResult["Username"]; ?> | 
                            <a href="sqlmember/member.php"style="color:white;" ><strong>จัดการข้อมูล</strong></a> |  
                            <a href="sqlmember/logout.php" style="color:white;"><strong>ออกจากระบบ</strong></a> 
                        </p> 
                        <?php } ?>
                    </ul> <!-- end header__nav -->
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->


        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/banner.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">KMITL</a></span>

                                <h1><a href="#0" title="">"สื่อกลางในการตามหาของ" <br>Where is it gone?</a></h1>

                                <div class="entry__info">
                                   
                                </div>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('images/31.jpg');">
                            
                            <div class="entry__content">                     
                                <h1><a href="findout.php" title="">ตามหาของหาย</a></h1>
                                <div class="entry__info">
                                    <a href="finding.html" class="entry__profile-pic">
                                        <img class="avatar" src="images/banner.jpg" alt="">
                                    </a>                            
                                </div>
                            </div> <!-- end entry__content -->                         
                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('images/32.jpg');">
                            <div class="entry__content">       
                                <h1><a href="founding.php" title="">พบของหาย</a></h1>

                                <div class="entry__info">
                                    <a href="founding.html" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->
    </section> <!-- end s-pageheader -->


     


    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row narrow section-intro add-bottom text-center">
            <div class="col-twelve tab-full">
                <p class="lead" >ระบบพิเศษ : เมื่อของที่พบ และ ของที่หายนั้น มีความตรงกันระบบจะแจ้งเตือนไปที่ email ของทั้ง 2 ฝ่าย ให้มาเช็คว่าของที่หาตรงกับของที่พบหรือไม่</p>
                <p class="lead" >เพิ่มระบบ Machine Learning ช่วยให้กรอกข้อมูลของให้คุณได้ และ Chat Bot ช่วยในการค้นหาของ </p>            
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