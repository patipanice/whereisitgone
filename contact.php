<?php 
      session_start();
      error_reporting(E_ALL ^ E_NOTICE);
   
    ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>ติดต่อ</title>
    <?php include 'head_01.php' ?>
</head>

<body id="top">
<div>
<?php 
 include("config.php");
include 'clogin.php'; 
 include 'Head.php' ;
 
 ?></div>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">

            <div class="s-content__header col-full">
                <h3 class="s-content__header-title">
                    IT ENGINEER KMITL.
                </h3>
            </div> <!-- end s-content__header -->
                <div class="row">
                    <div class="col-six tab-full">
                        <h3>Where is it gone?</h3>

                        <p>
                        เมื่อคุณพบของหายบริเวณคณะวิศวกรรมศาสตร์<br>
                        สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br>
                        สามารถลงประกาศและส่งคืนเจ้าของได้ที่เว็บเรา<br>
                        อีกทั้งเว็บนี้เรายังจัดเก็บข้อมูลของที่ค้นพบแล้วและ<br>
                        ยังไม่พบจัดเก็บไว้เพื่อให้ผู้มาหาของดูรายละเอียด<br>
                        เข้าใจได้ง่ายขึ้น
                        </p>

                    </div>

                    <div class="col-six tab-full">
                        <h3>ผู้จัดทำเว็บไซต์</h3>

                        <p>Patipan Roungsuwan [Project Manager]<br> <a href="#">60010565@kmitl.ac.th</a><br>
                        Papawin Sremuang [UI/Ux]<br> <a href="#">60010576@kmitl.ac.th</a><br>
                        Pakjira Pumsri [UI/UX]<br> <a href="#">60010759@kmitl.ac.th</a><br>
                        Suparkorn Kobsuttipoonchai[CODING]<br> <a href="#">60010988@kmitl.ac.th</a><br>
                         Supakitt Thawornchat[UI/UX]<br> <a href="#">60010993@kmitl.ac.th</a>
                        </p>

                    </div>
                </div> <!-- end row -->

                <h3>FEEDBACK US</h3>

                <form name="cForm" id="cForm" method="post" action="contact.php">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" type="text" id="cName" class="full-width" placeholder="ชื่อ" value="">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="อีเมลล์" value="">
                        </div>

                        <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="ข้อความ" ></textarea>
                        </div>

                        <input type="submit" name="submit" value="ส่งอีเมลล์" onclick="alert('ส่งอีเมลถึงผู้พัฒนาเรียบร้อยแล้ว')" >

                    </fieldset>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->
<?php $strTo = "60010993@kmitl.ac.th";
//$Message = $_POST["cMessage"];
//echo "$Message";
$strSubject = "Where is it gone?";
$strHeader = "From: Where is it gone?";
$strMessage = $_POST["cMessage"];
$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //

?>

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