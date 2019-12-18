<html>
    <head></head>
<body>
<?php 
        include("config.php");
        //เช็คว่าผู้ใช้สมัครเข้ามาหรือยังถ้ายังจะไปหน้า สมัครสมาชิก
        if($_SESSION['UserID'] == ""){
    ?> 

    <script type="text/javascript">
        if(confirm("กรุณาสมัครสมาชิกหรือเข้าสู๋ระบบก่อนใช้งาน!")) {
            window.location="sqlmember/login.php"; 
        }else {
            window.location="index.php"; 
        } 
    </script>
        <?php } ?>
    

</body>

</html>


    
        
   
