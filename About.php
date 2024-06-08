<!DOCTYPE html>
<html>
      <head>
            <title>Responsive About Us section</title>
            <meta Charset="utf-8">
            <meta name="viewport" content="with=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./CSS/all.min.css">
            <link rel="stylesheet" href="./CSS/style.css" rel='stylesheet'>
            <style>
                * {
                    margin:0px;
                    padding:0px;
                    box-sizing: border-box;
                    font-family: 'Roboto', sans-serif;
             }
             body{
                  background-color: rgb(12, 7, 7);
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  flex-direction: column;
             }
             .heading{
                    width:90%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    text-align: center;
                    margin:20px auto;
             }
             .heading h1{
                    font-size: 50px;
                    color:#fff ;
                    margin-bottom: 25px;
                    position: relative;
             }
             .heading h1::after{
                    content:"";
                    position: absolute;
                    width:100%;
                    height: 4px;
                    display: block;
                    margin:0 auto;
                    background-color: #4caf50;
             }
             .heading p{
                    font-size: 18px;
                    color:#fff;
                    margin-bottom: 35px;
             }
             .container{
                    width:90%;
                    margin:0 auto;
                    padding:10px 20px;
             }
             .about{
                   display: flex;
                   justify-content: space-between;
                   align-items: center;
                   flex-wrap: wrap;
             }
             .about-image{
                   flex:1;
                   margin-right: 40px;
                   overflow: hidden;
             }
             .about-image img{
                   max-width: 100%;
                   height: auto;
                   display: block;
                   transition: 0.5s ease; 
             }
             .about-image:hover img{
                   transform: scale(1.2);
             }
             .about-content{
                   flex:1;
             }
             .about-content h2{
                   font-size: 23px;
                   margin-bottom: 15px;
                   color:#fff;
             }
             .about-content p{
                   font-size: 18px;
                   line-height: 1.5;
                   color:#fff;
             }
             .about-content .read-more{
                   display: inline-block;
                   padding:10px 20px;
                   background-color: #4caf50;
                   color:#fff;
                   font-size: 19px;
                   text-decoration: none;
                   border-radius: 25px;
                   margin-top: 15px;
                   transition: 0.3s ease;
             }
             .about-content .read-more:hover{
                   background-color: #3e8e41;
             }
             @media screen and (max-width: 768){
             .heading{
                   padding:0px 20px;
             }
             .heading h1{
                   font-size: 36px;
             }
             .heading p{
                   font-size: 17px;
                   margin-bottom: 0px;
             }
             .container{
                   padding:0px;
             }
             .about{
                   padding:20px;
                   flex-direction: column;
             }
             .about-image{
                   margin-right: 0px;
                   margin-bottom: 20px;
             }
             .about-content p{
                   padding:0px;
                   font-size: 16px;
             }
             .about-content .read-more{
                   font-size: 16px;
             }
            }
            
            </style>
    </head>
        
    <body>
      <?php
            include 'Model/Nav.php';
      ?>
        <div class="heading">
            <h1>About Us</h1>
        <p>The environment is the responsibility of everyone, and we all have to do our best to preserve them for future generations</p>
        </div>
        <div class="container ">
            <section class="about">
                <div class="about-image">
                 <img src="./WhatsApp Image 2024-03-31 at 12.01.54 AM (1).jpeg">
                </div>
                <div class="about-content">
                  <h2>We are a team that provides environmental service</h2>
                  <p>We offer an innovative service system to preserve the environment, focusing on providing effective solutions to improve environmental quality. Our approach involves utilizing environmental technology and sustainable measures to contribute to reducing negative impacts on the environment. We strive to provide services that promote environmental awareness and enhance eco friendly practices, contributing to the building of a more sustainable and environmentally friendly community Preserving the environment is the duty of every individual in society, because a healthy environment is the basis of a decent life.</p>
                  <a href="" class="read-more">Read More</a>
                </div>
            </section>
        </div>
    </body>
</html>