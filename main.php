<!DOCTYPE html>
<html lang="kr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta property="og:type" content="website">
   <meta property="og:url" content="https://ayodough.mycafe24.com/portfolio//personal-v2/">
   <meta property="og:description" content="웹퍼블리셔 취업을 위한 개인 포트폴리오">
   <meta property="og:keywords" content="개인포트폴리오 개인홈페이지">
   <meta property="og:title" content="황도연 개인홈페이지">
   <meta name="description" content="웹퍼블리셔 취업을 위한 개인 포트폴리오"> 
   <meta name="keywords" content="황도연 개인포트폴리오 개인홈페이지">
   <meta name="og:image" content="https://ayodough.mycafe24.com/portfolio//personal-v2/img/logo.PNG">

   <title>A-yo DaY!</title>
   <link rel="stylesheet" href="css/reset.css">

    <!-- 웹폰트 -->
    <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css">

   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="css/font.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/title.css">
   <link rel="stylesheet" href="css/about.css">
   <link rel="stylesheet" href="css/portfolio.css">
   <link rel="stylesheet" href="css/skill.css">
   <link rel="stylesheet" href="css/responsive385.css">

   <!-- 제이쿼리 연결 -->
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

   <!-- // 헤더 메뉴  -->
   <script>
      $(document).ready(function(){

         // gnb
         let offsetA = $("section#about").offset();
         $(".header ul li:nth-child(1) a").click(function(){
            $("html").animate({scrollTop: offsetA.top},500);  
            return false;
         });
         let offsetB = $("section#skill").offset();
         $(".header ul li:nth-child(2) a").click(function(){
            $("html").animate({scrollTop: offsetB.top},500);
            return false;
         });
         let offsetC = $("section#portfolio").offset();
         $(".header ul li:nth-child(3) a").click(function(){
            $("html").animate({scrollTop: offsetC.top},500);
            return false;
         });
   // <!-- 반응형 -->
         //스크롤 - 헤더
         $(window).scroll(function(){
	         if($(window).scrollTop()>90){
                  $(".header").addClass("blackBG");
            }
            //스크롤 - 어바웃
            if($(window).scrollTop()>$("section#about").height()){
               $(".animation_about").addClass("show");
            }
            // 스크롤 - 스킬
            if($(window).scrollTop()>$("section#skill").height()){
               $(".animation_skill").addClass("show");
            }
            console.log($(window).scrollTop());
         });

         // 햄버거 버튼
         $(".ham").click(function(){
            $(".header .wrap ul").toggleClass("click");
            return false;
         });

         
    
      });
   </script>


</head>
<body>
   <!-- header -->
   <? include("include/header.html"); ?>

   <main>
   <!-- title -->
   <? include("include/title.html"); ?>


   <!-- about -->
   <? include("include/about.html"); ?>
 

   <!-- skill -->
   <? include("include/skill.html"); ?>


   <!-- portfolio -->
   <? include("include/poftfolio.html"); ?>

   </main>   

   <!-- footer -->
   <footer>
   </footer>
</body>
</html>