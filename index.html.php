<?php
    include 'Model/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/all.min.css"/>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://kit.fontawesome.com/b433e1a3dd.js" crossorigin="anonymous"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }
        .container{
            width: 100%;
            height: 100vh;
            padding: 0 8%;
        }
        .container h1{
            color: white;
            text-align: center;
            padding-top: 10%;
            margin-bottom: 60px;
            font-weight: 600;
            position: relative;
        }
        .container h1::after{
            content: '';
            background: #303ef7;
            width: 100px;
            height: 5px;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }
        .row{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 30px;
        }
        .service{
            color: white;
            text-align: center;
            padding: 25px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            background: transparent;
            transition: transform 0.5s, background 0.5s;
        }
        .service i{
            font-size: 40px;
            margin-bottom: 10px;
            color: #303ef7;
        }
        .service h2{
            color: white;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .service:hover{
            background: #303ef7;
            color: #fff;
            transform: scale(1.05);
        }

    </style>
    <title>Home</title>
</head>
<body>
        <?php
            include 'Model/Nav.php';
        ?>
        <!-- <div class="dropdown-menu">
              <li><a href="hero">home</a></li>
              <li><a href="hero">Services </a></li>
              <li><a href="hero">About us</a></li>
              <li><a href="hero">Contact us</a></li> 
              <li><a href="#" class="action-btn">Get started</a></li>	

        </div> -->

    <main>
        <section id="hero">
            <h1 >Welcome</h1>
            <p>Environmental protection is a global mission.  We all have a role to play, and you can help by taking small steps every day.</br>Thank you for visiting our website.  We hope you find the information you need to </br> take action to help protect the environment</p>
        </section>
        <div class="container">
        <h1>Our services</h1>
        <div class="row">
            <div class="service">
                <i class="fa-solid fa-tree"></i>
                <h2> زراعة الأشجار </h2>
                <p> يمكن للمستخدمين زراعة أشجار افتراضية عبر الموقع والمساهمة في حماية البيئة </p>
            </div>
            <div class="service">
                    <i class="fa-solid fa-users"></i>
                <h2>طلب عامل نظافه</h2>
                <p> يمكنك طلب عمال نظافه من هنا مسؤولون عن تنظيف الاماكن العامه والمنازل والمكاتب</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-seedling"></i>
                <h2>تعزيز الوعي البيئي</h2>
                <p>تقديم محتوى توعية حول كيفية الحفاظ على البيئة وتنمية العادات الصديقة للبيئة</p>
            </div>
            <div class="service">
                <i class="fa-solid fa-pen-to-square"></i>
                <h2>التحديات البيئية الشهرية</h2>
                <p>قم بإطلاق تحديات بيئية شهرية يمكن للمستخدمين المشاركة فيها، مثل تقليل استهلاك المياه لمدة شهر أو زيادة استخدام وسائل النقل العامة. قدم مكافآت أو تقدير للمشاركين الذين يتحققون من التحديات بنجاح </p>
            </div>
            
        </div>
    </div>
    </main>
    
    <script>
        const togglebtn = document.querySelector('toggle-btn')
        const togglebtnicon = document.querySelector('toggle-btn i')
        const dropDownMenu = document.querySelector('dropdown-menu')

        togglebtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isopen = dropDownMenu.classList.contains('open')

            togglebtnicon.classList = isopen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
    </script>
</body>
</html>
