<!DOCTYPE html>
<html>
<head><link rel="shortcut icon" href="5.svg" type="image/xx-icon"><meta charset="utf-8"><link rel="stylesheet" type="text/css" href="style.css" >
	<title>ZQ - radyuk.com</title>
</head>
<body>
<style>
@font-face{
font-family: 'Comfortaa';
src: url('Comfortaa.ttf');
font-weight: normal;
font-style: normal;
}

body, html{
margin: 0;
font-family: 'Comfortaa';
height: 94%;
}

.niz{
background: rgb(40,40,40,.9);
height: 80px;
color: #fff;
vertical-align: middle;
font-size: large;
margin-top: 20px;
}

.hr{
width: 70%;
height: 2px;
background: rgb(207,207,207,.6);
border: none;
border-radius: 100px;
}

div.block{
font-size: x-large;
margin-top: 30px;
margin-left: 20px;
margin-right: 20px;
}

div.theme{
width: 500px;
height: 50px;
background: rgb(244,196,48,.7);
border-bottom-right-radius: 10000px;
font-size: xx-large;
text-align: right;
padding-right: 40px;
}
</style>
 <script type="text/javascript" src="//web-ptica.ru/VRV-files/jquery-2.1.3.min.js"></script>
<style type="text/css">
  #page-preloader {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: black;
    opacity: 0.4;
    z-index: 100500;
}
body{
  margin: 0;
  padding: 0;
}

.box{
  width: 240px;
  height: 150px;
  position: absolute;
  top: calc(50% - 25px);
  top: -webkit-calc(50% - 25px);
  left: calc(50% - 120px);
  left: -webkit-calc(50% - 120px);
}

.text{
  font-family: Comfortaa;
  color: #fff;
  font-weight: 300;
  font-size: 45px;
  position: absolute;
  top: calc(50% - 105px);
  top: -webkit-calc(50% - 105px);
  left: calc(50% - 160px);
  left: -webkit-calc(50% - 160px);
  oapcity: 1;
  -webkit-animation: fade-in-out 2.5s infinite; 
  -moz-animation: fade-in-out 2.5s infinite; 
  -o-animation: fade-in-out 2.5s infinite; 
  animation: fade-in-out 2.5s infinite; 
}

.comp{
  position: absolute;
  top: 0px;
  width: 80px;
  height: 55px;
  border: 3px solid #fff;
  border-radius: 5px;
}

.comp:after{
  content: '';
  position: absolute;
  z-index: 5;
  top: 19px;
  left: 5px;
  width: 65px;
  height: 10px;
  border-radius: 360px;
  border: 3px solid #fff;
}

.loader{
  position: absolute;
  z-index: 5;
  top: 26px;
  left: 12px;
  width: 8px;
  height: 8px;
  border-radius: 360px;
  background: #fff;
  -webkit-animation: loader 5s infinite linear 0.5s;
  -moz-animation: loader 5s infinite linear 0.5s;
  -o-animation: loader 5s infinite linear 0.5s;
  animation: loader 5s infinite linear 0.5s;
}

.con{
  position: absolute;
  top: 28px;
  left: 85px;
  width: 100px;
  height: 3px;
  background: #fff;
}

.byte{
  position: absolute;
  top: 25px;
  left: 80px;
  height: 9px;
  width: 9px;
  background: #fff;
  border-radius: 360px;
  z-index: 6;
  opacity: 0;
  -webkit-animation: byte_animate 5s infinite linear 0.5s;
  -moz-animation: byte_animate 5s infinite linear 0.5s;
  -o-animation: byte_animate 5s infinite linear 0.5s;
  animation: byte_animate 5s infinite linear 0.5s;
}

.server{
  position: absolute;
  top: 22px;
  left: 185px;
  width: 35px;
  height: 35px;
  z-index: 1;
  border: 3px solid #fff;
  background: #459BF9;
  border-radius: 360px;
  -webkit-transform: rotateX(58deg);
  -moz-transform: rotateX(58deg);
  -o-transform: rotateX(58deg);
  transform: rotateX(58deg);
}

.server:before{
  content: '';
  position: absolute;
  top: -47px;
  left: -3px;
  width: 35px;
  height: 35px;
  z-index: 20;
  border: 3px solid #fff;
  background: #459BF9;
  border-radius: 360px;
}

.server:after{
  position: absolute;
  top: -26px;
  left: -3px;
  border-left: 3px solid #fff;
  border-right: 3px solid #fff;
  width: 35px;
  height: 40px;
  z-index: 17;
  background: #459BF9;
  content: '';
}

/*Byte Animation*/
@-webkit-keyframes byte_animate{
  0%{
    opacity: 0;
    left: 80px;
  }
  4%{
    opacity: 1;
  }
  46%{
    opacity: 1;
  }
  50%{
    opacity: 0;
    left: 185px;
  }
  54%{
    opacity: 1;
  }
  96%{
    opacity: 1;
  }
  100%{
    opacity: 0;
    left: 80px;
  }
}

@-moz-keyframes byte_animate{
  0%{
    opacity: 0;
    left: 80px;
  }
  4%{
    opacity: 1;
  }
  46%{
    opacity: 1;
  }
  50%{
    opacity: 0;
    left: 185px;
  }
  54%{
    opacity: 1;
  }
  96%{
    opacity: 1;
  }
  100%{
    opacity: 0;
    left: 80px;
  }
}

@-o-keyframes byte_animate{
  0%{
    opacity: 0;
    left: 80px;
  }
  4%{
    opacity: 1;
  }
  46%{
    opacity: 1;
  }
  50%{
    opacity: 0;
    left: 185px;
  }
  54%{
    opacity: 1;
  }
  96%{
    opacity: 1;
  }
  100%{
    opacity: 0;
    left: 80px;
  }
}

@keyframes byte_animate{
  0%{
    opacity: 0;
    left: 80px;
  }
  4%{
    opacity: 1;
  }
  46%{
    opacity: 1;
  }
  50%{
    opacity: 0;
    left: 185px;
  }
  54%{
    opacity: 1;
  }
  96%{
    opacity: 1;
  }
  100%{
    opacity: 0;
    left: 80px;
  }
}

/*LOADER*/
@-webkit-keyframes loader{
  0%{
    width: 8px;
  }
  100%{
    width: 63px;
  }
}

@-moz-keyframes loader{
  0%{
    width: 8px;
  }
  100%{
    width: 63px;
  }
}

@-o-keyframes loader{
  0%{
    width: 8px;
  }
  100%{
    width: 63px;
  }
}

@keyframes loader{
  0%{
    width: 8px;
  }
  100%{
    width: 63px;
  }
}


/*FADE IN-OUT*/
@-webkit-keyframes fade-in-out{
  0%{
    opacity: 1;
  }
  50%{
    opacity: 0;
  }
  100%{
    oapcity: 1;
  }
}

@-moz-keyframes fade-in-out{
  0%{
    opacity: 1;
  }
  50%{
    opacity: 0;
  }
  100%{
    oapcity: 1;
  }
}

@-o-keyframes fade-in-out{
  0%{
    opacity: 1;
  }
  50%{
    opacity: 0;
  }
  100%{
    oapcity: 1;
  }
}

@keyframes fade-in-out{
  0%{
    opacity: 1;
  }
  50%{
    opacity: 0;
  }
  100%{
    oapcity: 1;
  }
}
</style>

<div id="page-preloader">
<div class="text">
  ПОДКЛЮЧЕНИЕ
</div>
<div class="box">
  <div class="comp"></div>
  <div class="loader"></div>
  <div class="con"></div>
  <div class="byte"></div>
  <div class="server"></div>
</div>
</div>
<script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(5000).fadeOut('slow');
});</script>

<div class="theme">Zer<sup>I</sup>Q - radyuk.info</div>

<b><div style="position: fixed; right: 5px; top: 5px; background: rgb(244,196,48,.7); border-radius: 100000000000px; width: 130px; height: 40px; text-align: center; padding-top: 4px;"><span style="font-size: x-large;">ZER</span><sup style="font-size: large;">I</sup><span style="font-size: xx-large;">Q</span></div></b>

<div class="block">
<p>&nbsp&nbspМы очень рады приветствовать тебя!</p><p>&nbsp&nbsp&nbsp&nbspНа этой странице будут появляться обновления, которые мы добавим в следующие версии:</p>
</div>

<hr class="hr">

<div class="block">
<table border="0" width="100%">
<td width="60%"><img src="3.png" height="400px" width="750px" style="margin-top: -70px; margin-bottom: -70px;"></td>

<td width="40%" style="vertical-align: middle;"><h4>&nbsp&nbsp&nbsp-&nbspАдаптация под мобильные устройства</h4></td>
</table>
</div>

<hr class="hr">

<div class="block">
<table border="0" width="100%">
<td width="40%" style="vertical-align: middle;"><h4>&nbsp&nbsp&nbsp-&nbspНовый дизайн</h4></td>

<td width="60%"><img src="4.jpg" height="400px" width="750px" style="border-radius: 60px;"></td>
</table>
</div>

<hr class="hr">

<div class="block">
<table border="0" width="100%">
<td width="60%"><img src="5.svg" height="400px" width="750px" style=""></td>

<td width="40%" style="vertical-align: middle;"><h4>&nbsp&nbsp&nbsp-&nbspВозможность оставлять отзывы, писать комментарии</h4></td>
</table>
</div>

<div class="niz">
<table width="100%" style="height: 100%;">
<td width="50%" style="text-align: center; vertical-align: middle;">Powered by <sup>ZERO</sup>IQ</td>

<td width="50%" style="text-align: center; vertical-align: middle;"><?php echo date(Y); ?></td>
</table>
</div>

</body>
</html>
