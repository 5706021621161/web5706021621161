<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>
  <form method="get" action="lab5_9cal.php">
    <table border="0" align="center" width="500">
      <tr>
        <td colspan="2" align="center" >

          <big>กรุณากรอกประวัติส่วนตัว</big>
        </td>
      <tr>
      <tr>
        <td>ชื่อ : </td>
        <td><input type="text" name="name" size="50" value=""/></td>
      </tr>
      <tr>
        <td>นามสกุล : </td>
        <td><input type="text" name="lname" size="50" value=""/></td>
      </tr>

      <tr>
        <td>ชื่อเล่น : </td>
        <td><input type="text" name="nname" size="50" value=""/></td>
      </tr>

      <tr>
        <td>เพศ : </td>
        <td><input type="radio" name="sex" value="ชาย"> ชาย
          <input type="radio" name="sex" value="หญิง"> หญิง
        </td>
      </tr>

      <tr>
        <td>อายุ : </td>
        <td><input type="text" name="age" size="50" value=""/></td>
      </tr>

      <tr>
        <td>วันเกิด : </td>
        <td>
          <select name="day">
            <option/>01<option/>02<option/>03<option/>04<option/>05<option/>06<option/>07<option/>08<option/>09<option/>10<option/>11<option/>12<option/>13<option/>14<option/>15<option/>16<option/>17<option/>18<option/>19<option/>20<option/>21<option/>22<option/>23<option/>24<option/>25<option/>26<option/>27<option/>28<option/>29<option/>30<option/>31
          </select> :
          <select name="month">
            <option/>มกราคม<option/>กุมภาพันธ์<option/>มีนาคม<option/>เมษายน<option/>พฤษภาคม<option/>มิถุนายน<option/>กรกฎาคม<option/>สิงหาคม<option/>กันยายน<option/>ตุลาคม<option/>พฤศจิกายน<option/>ธันวาคม
            </select> :
          <select name="year">
              <option/>2535<option/>2536<option/>2537<option/>2538<option/>2539<option/>2540<option/>2541<option/>2542<option/>2543<option/>2544<option/>2545<option/>2546<option/>2547<option/>2548<option/>2549<option/>2550<option/>2551<option/>2552<option/>2553<option/>2554<option/>2555<option/>2556<option/>2557<option/>2558<option/>2559
          </select>
      </td>
    </tr>

      <tr>
        <td>ที่อยู่ : </td>
        <td><input type="text" name="address" size="50" value=""/></td>
      </tr>
      <tr>
        <td>งานอดิเรก : </td>
        <td><input type="text" name="hobb" size="50" value=""/></td>
      </tr>


        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="  ตกลง  ">
            <input type="reset" value=" เคลียร์ ">
          </td>
        </tr></h3>


</table>

</form>
</body>
</html>
