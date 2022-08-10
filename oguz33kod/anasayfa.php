<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.navbar {
  overflow: hidden;
  background-color: darkred; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: black;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: white;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: underline;
}

.subnav-content a:hover {
  background-color: darkred;

}

.subnav:hover .subnav-content {
  display: grid;
  background-image: url(x.png);
  background-size: auto;

}

</style>
</head>
<body>

<div class="navbar">
  <a href="#home">ANASAYFA</a>
  <a href="hakkımda.php">HAKKIMDA</a>
 <div class="subnav">
    <button class="subnavbtn">GALERİ<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#galerici.php">OĞUZ33TİMİNDEN KARELER</a>
      <a href="galerici2.php">MÜCADELE YILLARIMDAN KARELER</a>
      <a href="galerici3.php">OHAL</a></u>
      <a href="galerici.php">OPERASYONU DELİLLENDİREN BELGELER</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">OĞUZ33TİMİ KONU BAŞLIKLARI<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="cy.php" target="_blank">ÇAYIRLI KÖYÜ</a>
      <a href="sarı.php" target="_blank">SARI CESET TORBASI</a>
      <a href="pkk.php" target="_blank">PKK'NIN İLK ATEŞKESİ</a>
      <a href="cy.php" target="_blank">TERÖRİSTLERİN İNTİKAMI</a>
      <a href="cy.php" target="_blank">ARAZİDE ÖĞRENDİKLERİM</a>
      <a href="cy.php" target="_blank">ÖĞRETMEN TERÖRİST</a>
      <a href="cy.php" target="_blank">ŞEHİT ÜSTEĞMEN HAKAN</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">OĞUZ33TİMİ KONU BAŞLIKLARI II.<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      
      <a href="cy.php" target="_blank">ŞEHİT YİĞİT MURAT</a>
      <a href="cy.php" target="_blank">MUŞ-ŞENYAYLA</a>
      <a href="cy.php" target="_blank">AĞIR KIŞ KOŞULLARI</a>
      <a href="cy.php" target="_blank">ATAMLA YAŞADIKLARIM</a>
      <a href="cy.php" target="_blank">NASIL BİTER BU ÇATIŞMALAR</a>

    </div>
  </div>
</div>


</body>
</html>

<font color="white"><h3>OĞUZ33TİMİ</h3>
<p>90'lı Yıllarda Terörle Mücaadelenin İçerisinde Yer Almış, Dillere Destan '' O ğ u z 33 '' Timin Yaşadıklarını Anlatan Sitemize Hoş geldiniz</p></font>

</body>
</html>


</body>
</html> 




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("nnn.png"); }
.img2 { background-image: url("n.png"); }

}

body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 18px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
body{
  background-image: url(85.jpg);
  background-size: cover;
}
</style>
</head>
<body>
          
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="nnn.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="jj.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="dd.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="ff.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="gg.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="zz.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="nnn.png" style="width:100%" onclick="currentSlide(1)" alt="OĞUZ33TİMİ">
    </div>
    <div class="column">
      <img class="demo cursor" src="jj.jpg" style="width:100%" onclick="currentSlide(2)" alt="90'lı Yıllarda">
    </div>
    <div class="column">
      <img class="demo cursor" src="dd.jpg" style="width:100%" onclick="currentSlide(3)" alt="Terörle Mücaadelenin İçerisinde Yer Almış">
    </div>
    <div class="column">
      <img class="demo cursor" src="ff.jpg" style="width:100%" onclick="currentSlide(4)" alt=" Dillere Destan '' O ğ u z 33 '' Timin">
    </div>
    <div class="column">
      <img class="demo cursor" src="gg.jpg" style="width:100%" onclick="currentSlide(5)" alt="Yaşadıklarını Anlatan Sitemize Hoş geldiniz">
    </div>    
    <div class="column">
      <img class="demo cursor" src="zz.jpg" style="width:100%" onclick="currentSlide(6)" alt="Sizleri Burada Tutabilmek İçin, Yapılması Gereken Her Şey Yapıldı.">
    </div>
  </div>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: darkred;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

</style>
</head>
<body>

<div class="top-container">
  <fieldset><h1>MUSTAFA BİLGİN</h1>
  <p>Başta ‘oğuz33’ Timi olmak üzere Vatan için canlarını vermiş tüm ŞEHİTLERİMİZİN ruhlarına, Allah rızası için, el-Fâtiha; Bismillâhirrahmânirrahîm. Elhamdü lillâhi rabbil’âlemîn Errahmânirrahîm. Mâliki yevmiddîn İyyâke na’büdü ve iyyâke neste’în. İhdinas-sırâtal müstakîm. Sırâtallezîne en’amte aleyhim gayrilmagdûbi aleyhim ve leddâllîn (âmin) بسم الله الرحمن الرحيم الحمد لله رب العلمين الرحمن الرحيم ملك يوم الدين اياك نعبد واياك نستعين اهدنا الصرط المستقيم صرط الذين انعمت عليهم غير المغضوب عليهم ولا الضالين Rahmân ve rahîm olan Allah'ın ismiyle hamd o âlemlerin rabbi o rahmân ve rahim o din gününün maliki Allah'ın ancak sana ederiz kulluğu ibadeti ve ancak senden dileriz yardımı inayeti, hidayet eyle bizi doğru yola o kendilerine nimet verdiğin mutlu kimselerin yoluna o gazaba uğramışların ve o sapmışların yoluna değil.</p></fieldset>
</div>

<div class="header" id="myHeader">
  <center><h2>Bu çalışmada neler okuyacaksınız…</h2></center>
</div>

<div class="content">
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><font color="white"><fieldset><center><h3>29 Eylül Gecesi</h3>
  Şemdinli Derecik karakoluna 600’den fazla teröristin saldırmasıyla 28 şehit verildi, komutanı ise karakolun bayrak direğine asarak şehit etmişlerdi çünkü silahlı çatışmalar öğlen vaktine kadar tüm mevziilerde korkunç şekilde sürdüğünden ve takviye birlikler engellediğinden, kaybımız bu denli büyük olmuştu ama silahlı helikopterlerin, devreye girmesiyle 200 kadar terörist etkisiz hale getirilmişti, geri kalanlar ise sınırlarımız dışındaki kamplara kaçmışlardı. Kahramanlarımızın dökülen, her damla kanın hesabını, sormak ve karakol komutanın, beylik tabancasına varıncaya kadar, dağa kaldırılan mühimmatımızı, bulabilmek için, Irak’ın kuzeyindeki Zap bölgesine kaçan eli kanlı canilerin peşine düştük. İşimiz zordu lakin başarmalıydık aksi taktirde ettiğimiz yemine sadık kalmayacağımızdan toprağın bağrındaki, silah arkadaşlarımız huzur bulamayacaktı. Sizlere masal anlatmaya cam ama sıkmamak adına, hikaye tadındaymış gibi, yaşananları anlatmaya çalışacağım. Ticari açıdan değeri olmayan bu kanlı çalışmaya kahramanlarımızdan birinin ismini vermeyi düşünüyordum lakin o kadar çok kahramanlıklar yapıldı ki hangisini yazacağıma karar veremediğimden hepsini yazdım, yine de sığdıramadım. Yok olma korkusuyla, yaşadığımız felaketleri anlayacağınızı ümit eder ifade hatalarım için siz değerli okuyucudan, şimdiden af dilerim, göstereceğiniz alaka için teşekkür eder, saygılarımı ve şükranlarımı sunarım…</fieldset></font></center>
</div>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>




</body>
</html>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}

</style>
</head>
<body>



<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <fieldset><h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div></fieldset>
<script type="text/javascript">
  function deneme () {alert("OĞUZ33TİMİ SAYFASINA HOŞGELDİNİZ.");}
  deneme();

</script>
</body>
</html>

