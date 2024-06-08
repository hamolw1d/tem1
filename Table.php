<?php
    include 'Model/GetProcesse.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css" rel='stylesheet'>
    <style>body{display: flex;justify-content: center;align-items: center; flex-direction: column;}th{color: white}td{color: wheat;}.container{display: flex;justify-content: center;align-items: center;flex-direction: column;}</style>
    <title>AddProcesse</title>
    
</head>
<body>
    <?php
        include 'Model/Nav.php';
    ?>
    <div class="container">
        <h2 style="color : white;">مرحبًا بك في صفحة عرض العمليات</h2>
        <p style="color: wheat;" dir="rtl">هنا، يمكنك استعراض العمليات المختلفة المتاحة في النظام. سواء كنت ترغب في تحليل البيانات، أو تنظيم المهام، أو إدارة العمليات، فإننا نوفر لك الأدوات والمعلومات الضرورية لتحقيق أهدافك.</p>
        <table class="table" dir="rtl">
            <thead>
                <tr>
                <th scope="col">رقم العملية</th>
                <th scope="col">اسم العملية</th>
                <th scope="col">وصف العملية</th>
                <th scope="col">رقم الهاتف</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($Listdata as $list) {
                echo"<tr>
                    <th scope=\"row\">$list[id]</th>
                    <td>$list[Name]</td>
                    <td>$list[Description]</td>
                    <td>$list[Phone]</td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>