<?php session_start(); error_reporting(E_ALL ^ E_NOTICE);  ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>พบเจอของหาย</title>
    <?php include 'head_01.php' ?>
	<style>
			table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
.error {color: #FF0000;
        font-size: 12px;}
	</style>
</head>

<body id="top">
<div>
<?php 
include 'clogin.php'; 
include 'Head.php';

 
 ?></div>
        

    <!-- pageheader
    ================================================== -->
   

    <?php 
    include("config.php");
    $txtObjectchk = $txtCatachk = $txtLocationchk  = 0; //ค่าเริ่มต้นเป็นเท็จ
    $txtObjecterr = $txtCataerr =  $txtLocationerr  = ""; 
    $sql1 = "SELECT * FROM orders WHERE OrderID=000";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        if(!$txtObjectchk) {
            $txtObject =  test_input($_POST["keyword"]);
            if(!preg_match('/[^A-Za-z]/',$txtObject)){
                $txtObjecterr = "*กรอกข้อมูลโดยใช้ภาษาไทยเท่านั้น!";
            } else {
                $txtObjectchk = 1;
            }
        }
        if(!$txtCatachk){
            if($_POST["txtCata"] == 000) {
                $txtCataerr = "*เลือกประเภทสิ่งของ!";
            }else{
                $txtCatachk = 1;
            }
        }
        if(!$txtLocationchk){
            if($_POST["txtLocation"] == 000) {
                $txtLocationerr = "*เลือกสถานที่พบ!";
            }else{
                $txtLocationchk = 1;
            }
        } 
        $keyword = $_POST['keyword'];
        $sql ="SELECT ObjectID FROM object WHERE ObjectName LIKE '%$keyword%'";
        $objQuery = mysqli_query($objCon,$sql);
      $OK_NAKA[10];   
      for ($x = 0; $x <= 10; $x++){
          $OK_NAKA[$x]="";
      }
        $Zero = 0 ; 
        while($Result = mysqli_fetch_array($objQuery)) {    
          $OK_NAKA[$Zero] = $Result[0]; 
            $Zero++;         
        }
        $LocationID = $_POST['txtLocation'];
        $CataID = $_POST['txtCata'];
        if($txtObjectchk && $txtCatachk && $txtLocationchk) {
        $sql1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.Username,orders.Status FROM catagory,location,member,object,orders WHERE orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND orders.ObjectID IN ('$OK_NAKA[0]','$OK_NAKA[1]','$OK_NAKA[2]','$OK_NAKA[3]','$OK_NAKA[4]','$OK_NAKA[5]','$OK_NAKA[6]') AND orders.ObjectID = object.ObjectID AND object.CataID = catagory.CataID AND orders.LocationID = $LocationID AND object.CataID = $CataID";
      }
   }  
     $objQuery2 = mysqli_query($objCon,$sql1);
     function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
     ?>
    <!-- s-content
    ================================================== -->
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h2>ต้องการหาอะไร ?</h2> <hr>
       <form action="searching.php" method="POST" name= "SearchForm" target="_self" id="SearchForm">
                    <label for="sampleInput">ต้องการหา</label> <span class="error"><?php echo($txtObjecterr);?></span>
          <input name="keyword" type="text" id="keyword" placeholder="ใช้ภาษาไทยเท่านั้น" style="margin-left: auto; margin-right: auto;">
                    <label for="sampleInput">ประเภทของ</label> <span class="error"><?php echo($txtCataerr);?></span>
                <select name="txtCata" autofocus="autofocus" id="txtCata" style="margin-left: auto; margin-right: auto;">    
                        <option value="000">เลือกประเภท</option>
                  <option value="001">อุปกรณ์อิเล็กทรอนิกส์</option>
                      <option value="002">เครื่องดนตรี</option>
                        <option value="003">เครื่องประดับ</option>
                        <option value="004">ของใช้ทั่วไป</option>
                        <option value="005">อื่นๆ</option>
                </select>
                    <label for="sampleInput">สถานที่</label> <span class="error"><?php echo($txtLocationerr);?></span>
                  <select name="txtLocation" id="txtLocation" style="margin-left: auto; margin-right: auto;">     
                  <option value="000"selected="selected" >เลือกสถานที่</option>
                      <option value="001">ตึก A</option>
                      <option value="002">หอประชุมวิศวะ</option>
                        <option value="003">ตึกภาคโทรคมนาคม</option>
                        <option value="004">ตึกภาคอิเล็คทรอนิกส์</option>
                        <option value="005">ตึกกิจการนักศึกษา</option>
                        <option value="006">สนามโภไคยอุดม</option>
                        <option value="007">ตึกภาควัดคุม</option>
                        <option value="008">ตึกภาคเครื่องกล</option>
                        <option value="009">สนาม CCA</option>
                        <option value="010">ตึกโหล</option>a
                        <option value="011">โรงอาหาร C</option>
                        <option value="012">ลานพระพุทธ</option>
                </select> 
                    <input type="submit" name="submit" value="ค้นหา" > 
                    <input type="reset" value="รีเซ็ต" >
                </form>
            <br>
            <h3>รายการ</h3>
      <table align="center" width="811" height="80" border="1">     
          <tr>
              <th width="50" scope="col">OrderID</th>
              <th width="146" scope="col">รูปภาพ</th>
              <th width="87" scope="col">หมวดหมู่</th>
              <th width="75" scope="col">ชื่อสิ่งของ</th>
              <th width="107" scope="col">สถานที่</th>
              <th width="100" scope="col">วันที่โพส</th>
              <th width="87" scope="col">ผุ้โพส</th>
              <th width="87" scope="col">สถานะ</th>
              <th width="87" scope="col">เพิ่มเติม</th>
          </tr>
<?php while($Result2 = mysqli_fetch_array($objQuery2)) {  ?>
          <tr>
              <td><?php echo($Result2['OrderID']);?></td>
              <td> <?php
                    echo "<div id='img_div'>";
                echo "<img src='images/".$Result2['image']." ' >";
                  echo "</div>";
                ?>
            </td>
              <td><?php echo($Result2['CataName']);?></td>
              <td><?php echo($Result2['ObjectName']);?></td>
              <td><?php echo($Result2['LocationName']);?></td>
              <td><?php echo($Result2['Date']);?></td>
              <td><?php echo($Result2['Username']);?></td>
              <td><?php 
                if($Result2['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result2['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result2['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?>
       </td>
              <td><a href="sqlmember/member_order.php?OrderID=<?php echo($Result2['OrderID']);?>">คลิ๊ก</a></td>
          </tr>
<?php 
    }
    ?>
    </table>
        </div>
      </div>
    </div>

    </section> <!-- s-content -->

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