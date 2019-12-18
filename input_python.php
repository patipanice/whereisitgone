<?php session_start(); error_reporting(E_ALL ^ E_NOTICE);  ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>คุณเจออะไรมา</title>
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

<?php 
$input_python = 0 ; //รับค่าinput จาก model ตรงนี้
$data = array("หมวก", "หูฟัง", "โน๊ตบุ๊ค","กระเป๋าสะพาย","กระเป๋าถือ","กระเป๋าตัง","แว่นตา","นาฬิกา","โทรศัพท์มือถือ");
$typedata = array ("เครื่องประดับ","ของใช้ทั่วไป","อุปกรณ์อิเล็กทรอนิกส์","อืนๆ");
//เครื่องประดับ
function typedata_p (int $input_python){
    //$input_python01 = $input_python ;

if ($input_python == 0  or $input_python == 6 or $input_python ==  7){ echo "เครื่องประดับ";} 
//ของใช้ทั่วไป
elseif ($input_python == 3 or $input_python == 4 or $input_python == 5  ){echo "ของใช้ทั่วไป";}
//อุปกรณ์อิเล็กทรอนิกส์
elseif ($input_python == 2 or $input_python == 8 or $input_python == 1 ){   echo "อุปกรณ์อิเล็กทรอนิกส์";   }
//อืนๆ
else {echo "อืนๆ";  }}

?>

    <!-- pageheader
    ================================================== -->
  
    <div>
<?php 
 include("config.php");
include 'clogin.php'; 
 include 'Head.php' ;
 
 ?></div>


    <?php //เช็คฟอร์ม 
    $txtObjectchk = $data[$input_python] ;
    $txtCatachk = $txtLocationchk = $Datechk = 0;
    $txtObjecterr = $txtCataerr =  $txtLocationerr = $Dateerr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        /*if(!$txtObjectchk) {
            $txtObject =  test_input($_POST["txtObject"]);
            if(!preg_match('/[^A-Za-z]/',$txtObject)){
                $txtObjecterr = "*กรอกข้อมูลโดยใช้ภาษาไทยเท่านั้น!";
            } else {
                $txtObjectchk = 1;
            }
        }*/
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
        if(!$Datechk){
            if (empty($_POST["Date"])) {
                $Dateerr = "*ระบุวันที่";
                }else {
                    $Datechk = 1;
                }   
        }
    }
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
 <!-- ****************************************************User กรอกข้อมูล ****************************************************************-->
             <form action="input_python.php" method="post" enctype="multipart/form-data">
                 <h4>AI ช่วยกรอกของที่เจอแล้วนะ</h4><hr>
                 <table width="500" border="1" align="center" id="member_table">
                 <tr>
                    <td width="92" align="center" valign="middle" scope="col">
                    <labe>ชื่อผูใช้</label> 
                    <td width="224" scope="col"><label><?php echo $objResult["Username"]; ?></label>
                </tr>
                <tr>
                    <td><label for="sampleInput">เจออะไรมา </label> <span class="error"><?php echo($txtObjecterr);?></span></td>
                    <td><input name="txtObject" type="text" id="txtObject" style="margin-left: auto; margin-right: auto;" value="<?=$data[$input_python];?>"></td>
                </tr>
                <tr>
                    <td><label for="sampleInput">ประเภทของ</label> <span class="error"><?php echo($txtCataerr);?></span></td>
                    <td>
                    <select name="txtCata" id="txtCata"style="margin-left: auto; margin-right: auto;">
                    <option value="<?=typedata_p($input_python)?>"><?php typedata_p($input_python)?></option>
 		             			<option value="001">อุปกรณ์อิเล็กทรอนิกส์</option>
                                <option value="003">เครื่องประดับ</option>
                                <option value="004">ของใช้ทั่วไป</option>
                                <option value="005">อื่นๆ</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><label for="sampleInput">สถานที่เจอ</label> <span class="error"><?php echo($txtLocationerr);?></span></td>
                    <td>
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
                </td>
                </tr>
                <tr>
                    <td>
                <label for="sampleInput">วันที่พบ</label>  <span class="error"><?php echo($Dateerr);?></span>  
                    </td>
                    <td>
                            <input name="Date" type="date" style="margin-left: auto; margin-right: auto;">
                    </td>
                </tr>

                 </table>
                 <input type="submit" name="submit" value="ประกาศ" > 
             </form>
			</div>
		</div>
    </section> <!-- s-content -->
    <!--****************************************** เก็บเข้าDATABASE *****************************************************-->
    <section>
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
                if(confirm("ประกาศข้อมูลสำเร็จ")) {
                    window.location="sqlmember/member.php"; 
                } else { 
                    window.location="index.php";  
                } 
            </script>
      <?php 
        }    
        
        ?>
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
    <div class="post">
<?php include 'post.php';
?>
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

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>