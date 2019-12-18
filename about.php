<?php 
      session_start();
      error_reporting(E_ALL ^ E_NOTICE);
      include("config.php");
      //เช็คว่าผู้ใช้สมัครเข้ามาหรือยังถ้ายังจะไปหน้า สมัครสมาชิก
      $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
    ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>เกี่ยวกับเรา</title>
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
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                           
                    <div class="entry__thumb">
                        
                            <img src="images/ice.jpg" >                   
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                             <h1 class="entry__title">60010565</h1>
                            
                             <p align="center">Patipan Roungsuwan 60010565 <br>
                                 ITE KMITL
                            
                                 </p>
    
                </article> <!-- end article -->
 <!-- end article --><!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        
                            <img src="images/first.jpg"  >
                                  
                        
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                             <h1 class="entry__title">60010576</h1>
                            
                             <p align="center">Papawin Sremuang 60010576 <br>
                                ITE KMITL
                                 </p>
    
                </article> <!-- end article -->
 <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        
                            <img src="images/pear.jpg" >
                                  
                        
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                             <h1 class="entry__title">60010759</h1>
                            
                             <p align="center"> Pakjira Pumsri 60010759 <br>
                                ITE KMITL </p>
    
                </article> <!-- end article -->

                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                    
                            <img src="images/korn.jpg" >
    
    
                    <div class="entry__text">
                        <div class="entry__header">
                             <h1 class="entry__title">60010993</h1>
                            
                              <p align="center"> Supakitt Thawornchat 60010993 <br>
                              ITE KMITL </p>
                                
    
                </article> <!-- end article -->
                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                      
                            <img src="images/bright.jpg" 
                        
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">

                            <h1 class="entry__title">60010988</h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p align="center">
                               Suparkorn Kobsuttipoonchai 60010988 <br>
                              ITE KMITL
                            </p>
                        </div>
                      
                    </div>
    
                </article> 
            </div>
        </div>
         </div>
</article>
</div>
</div>
</article>
</div>
</div>
</article>
</div>
</div>
</article>
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