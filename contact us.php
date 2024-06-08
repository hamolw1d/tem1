<?php
    include 'Model/contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اتصل بنا</title>
    <link rel="stylesheet" href="./CSS/all.min.css">
    <link rel="stylesheet" href="./CSS/style.css" rel='stylesheet'>
    <style>
     *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'josefin sans', sans-serif;
            color: white;
        }
         section {
            padding: 40px 15%;
        }
        .contact{
            background: #101010;
            height: 100vh;
            width: 100%;
            min-height: 100vh;
            display: grid;
            grid-template-columns: repeat(2, 2fr);
            align-items: center;
            grid-gap: 6rem;
        }
        .contact-img img{
            max-width: 100%;
            width: 720px;
            height: auto;
            border-radius: 10px;
        }
        .contact-form h1{
            font-size: 80px;
            color: #fff;
            margin-bottom: 20px;
        }
        span{
            color: rgb(170, 26, 26);
        }
        .contact-form p{
            color: #c6c9d8bf;
            letter-spacing: 1px;
            line-height: 26px;
            font-size: 1.1rem;
            margin-bottom: 3.8rem;
        }
        .contact-form form{
            position: relative;
        }
        .contact-form form input,
        form textarea{
            width: 100%;
            padding: 17px;
            border: none;
            outline: none;
            background: #191919;
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
            border-radius: 10px;
        }
        .contact-form textarea{
            resize: none;
            height: 200px;
        }
        .contact-form form .btn{
            display: inline=block;
            background: #f9004d;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
            border: 2px solid transparent;
            border-radius: 10px;
            white-space: 220px;
            transition: ease .20s;
            cursor: pointer;
        }
        .contact-form form .btn:hover{
            border: 2px solid #f9004d;
            background: transparent;
            transform: scake(1.1);
        }

        @media (max-width: 1570px){
            section{
            padding: 80px 3%;
            transition: .2s;
        }
        .contact-form h1{
            font-size: 60px;
        }
        .contact-form p{
            margin-bottom: 3rem;
        }
        }
        @media (max-width:1090px){
        .contact{
            grid-gap: 2rem;
            transition: .3s
        }
        }
        @media (max-width: 1000px){
        .contact{
            grid-template-columns: 1fr;
        }
        .contact-form{
           order: 2;
        }
        .contact-img img{
           max-width: 100%;
           width: 100%;
           height: auto;
           text-align: center;
           margin-bottom: 30px;
        }
        }

    </style>
</head>

<body>
    <?php
        include 'Model/Nav.php';
    ?>
    <section class="contact">
        <div class=" contact-img">
          <img src="./WhatsApp Image 2024-03-31 at 12.01.54 AM.jpeg">
        </div>
        <div class="contact-form"dir="rtl">
            <h1>اتصل <span>بنا</span></h1>
            <p>نحن هنا لمساعدتك في حال واجهتك أي مشاكل أو استفسارات بخصوص منتجاتنا أو خدماتنا. يسعدنا أن نكون في خدمتك ونسعى جاهدين لضمان رضاك التام.</p>
            <form action="contact us.php" method="post">
              <input type="text"     name="Name" placeholder="الاسم" required>
              <input type="email"    name="email" id="email" placeholder="الايميل" required>
              <input type="text"     name="subject" placeholder="اكتب موضوعا" required>
              <textarea id="Message" name="Message"   cols="30" rows="10" placeholder="الرسالة" required></textarea>
              <input type="submit"  name="submit" value="إرسال" class="btn">
            </form>
        </div>

    </section>
</body>
</html>