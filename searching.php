<?php session_start(); error_reporting(E_ALL ^ E_NOTICE);  ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <title>พบเจอของหาย</title>
    <?php include 'head_01.php' ?>


</head>

<body id="top">
<div>
<?php 
 include("config.php");
include 'clogin.php'; 
 include 'Head.php' ;
 
 ?></div>
  
    <!-- s-extra
    ================================================== -->
      <section class="s-extra">
<!-- AI ช่วยหาของ -->
      <div class="col-full s-content__header" data-aos="fade-up">     
      <h2>ให้ AI ช่วยประกาศสิ !!! </h2><hr>
   
      <form action="searching.php" method="post" enctype="multipart/form-data">
      <label for="sampleInput">แนบรูปภาพ</label> 
                    <input name="image" type="file" id="picture"><br>
                    <input type="submit" name="submit" value="ตกลง" > 
                  
       </form>
       </div>
       <?php 
        //insert object to database
        if($txtObjectchk && $txtCatachk && $txtLocationchk && $Datechk) {
            $strSQL1 = "INSERT INTO object(ObjectName,CataID,image) VALUES('".$_POST["txtObject"]."','".$_POST["txtCata"]."','$image')";
            $objQuery1 = mysqli_query($objCon,$strSQL1);
            //select max of object 
            $strSQL2 = "SELECT MAX(ObjectID) FROM object";
            $objQuery2 = mysqli_query($objCon,$strSQL2);
            $Result2 = mysqli_fetch_array($objQuery2);
            //insert max of objct id and all to database
            $strSQL3 = "INSERT INTO orders(UserID,ObjectID,LocationID,Date,Status) 
            VALUES ('".$_SESSION['UserID']."','$Result2[0]','".$_POST["txtLocation"]."','".$_POST["Date"]."','FIND_OWNER')";
            $objQuery3 = mysqli_query($objCon,$strSQL3);
            $strSQL4 =  "SELECT MAX(OrderID) FROM orders";
            $objQuery4 = mysqli_query($objCon,$strSQL4);
            $Result4 = mysqli_fetch_array($objQuery4);
            $strSQL5 = "SELECT orders.OrderID,member.Username,object.ObjectName,location.LocationName,orders.Date,orders.Status,object.image FROM member,object,orders,location WHERE orders.UserID = member.UserID and orders.ObjectID = object.ObjectID and orders.LocationID = location.LocationID and OrderID = $Result4[0]";
            $objQuery5 = mysqli_query($objCon,$strSQL5); 
            ?>
            <script type="text/javascript">
                if(confirm("AI ประมวลผลเส็จสิ้น")) {
                    window.location="input_python.php"; 
                } else { 
                    window.location="input_python.php";  
                } 
            </script>
      <?php 
        }    
        
        ?>




        <div class="row narrow section-intro add-bottom text-center">
            <div class="col-twelve tab-full">
                <p class="lead" > ระบบนี้จะช่วยให้คุณไม่ต้องเสียเวลากรอกข้อมูล <br>
            เพียง upload ภาพของคุณ AI จะช่วยในการประมวลผล และกรอกข้อมูล
            </p>
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