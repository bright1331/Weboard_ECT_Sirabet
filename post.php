<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard BXB</h1>
    <hr>
    <div style="text-align: center;">
    ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']; ?> <br>
    <table style="border: 5px solid black; width: 20%;" align="center">
    <tr><td colspan="2" style="background-color: #6cd2fe;" align="left ">แสดงความคิดเห็น</td></tr>
    <tr><td><textarea name="message"  cols="50" rows="10"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
</table> <br>
<a href="index.html" style="float: center;">กลับไปยังหน้าหลัก</a>    
    </div>
</body>
</html>