<html>
<head><title></title>
<meta charset="utf-8">
</head>
<body>

  <?php
        $name = $_GET['name'];
        $lname = $_GET['lname'];
        $nname = $_GET['nname'];
        $age = $_GET['age'];

        $day = $_GET['day'];
        $month = $_GET['month'];
        $year = $_GET['year'];

        $address = $_GET['address'];
        $hobb = $_GET['hobb'];
        $sex = $_GET['sex'];

        $year02 = $year-543;

        if ($age > 0 && $age <=12 ) $Hage = 'เด็ก';
        elseif ($age > 12 && $age <=19 ) $Hage = 'วัยรุ่น';
        elseif ($age > 19) $Hage = 'ผู้ใหญ่';




        if ($month=="มกราคม") $month02 = January;
        elseif ($month=="กุมภาพันธ์") $month02 = February;
        elseif ($month=="มีนาคม") $month02 = February;
        elseif ($month=="เมษายน") $month02 = April;
        elseif ($month=="พฤษภาคม") $month02 = May;
        elseif ($month=="มิถุนายน") $month02 = June;
        elseif ($month=="กรกฎาคม") $month02 = July;
        elseif ($month=="สิงหาคม") $month02 = August;
        elseif ($month=="กันยายน") $month02 = September;
        elseif ($month=="ตุลาคม") $month02 = October;
        elseif ($month=="พฤศจิกายน") $month02 = November;
        elseif ($month=="ธันวาคม") $month02 = December;

        echo "<p>";
        echo "<b> ข้อมูลทท่านได้กรอก </b><br/><br/>";
        echo "ชื่อ : <i> $name $lname ($nname)</i> <br/>";
        echo "เพศ : <i> $sex </i> <br/>";
        if ($age >= 1 && $age <= 100 ) echo "AGE : <i> $age ($Hage) </i> <br/>";
        else echo "อายุ : <i> ท่านใส่อายุไม่ถูกต้อง กรุณากลับไปกรอกใหม่ </i> <br/>";

        if ($year%4 == 0 && $month02 == "February" && $day < 30 )
          echo "วันเกิด : <i> $day : $month02 : $year02 </i> <br/>";

        elseif ($year%4 != 0 && $month02 == "February" && $day < 29 )
          echo "วันเกิด : <i> $day : $month02 : $year02 </i> <br/>";

        elseif ($year%4 != 0 && $month02 == "February" && $day > 28 )
          echo "วันเกิด : <i> ท่านใสวันที่ไม่ถูกต้อง กรุณากลับไปกรอกใหม่ </i> <br/>";

        elseif ($year%4 == 0 && $month02 == "February" && $day > 29 )
          echo "วันเกิด : <i> ท่านใสวันที่ไม่ถูกต้อง กรุณากลับไปกรอกใหม่ </i> <br/>";

        else echo "วันเกิด : <i> $day : $month02 : $year02 </i> <br/>";

        echo "ที่อยู่ : <i> $address </i> <br/>";
        echo "งานอดิเรก : <i> $hobb </i> <br/>";
        echo "<a href='lab5_9.php'><input type='submit' value='  กลับ  '/></a>";
   ?>
