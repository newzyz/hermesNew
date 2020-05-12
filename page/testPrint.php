<?php include "../function.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../application/print_register.js"></script>
</head>
<body>
    <!-- gid คือค่า ginfo_id หรือ bl_ginfo ของหน้าหลักนั้นส่งไปหน้า iframe แล้วซ่อนไว้เพื่อรอปริ้น -->
    <iframe style ="display: none" src="<?php echo base_url("/page/regisPrint.php?gid=5")?>" name="frame1"></iframe>
    <input id="printButton" type="button" onclick="frames['frame1'].print()" value="print!">
</body>
</html>