<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GALERİ</title>
</head>
 <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,500&display=swap" rel="stylesheet">
 <style type="text/css">
body{
  background-image: url(89.jpg);
  background-size: cover;
}

body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("koyu.png");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 33.33%;
  padding: 100px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
 </style>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <h1>MUSTAFA BİLGİN</h1>
  <p>OGUZ33TİMİ GALERİSİ</p>
</div>

	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<center><font color="white"><h1>OĞUZ33TİMİ GALERİ DOSYASI</h1></font></center>
<hr>

<center><font color="white"><p>kimimiz kolunu, kimimiz postallı ayağını,
acımasız ve dumanlı bir dağ başında bıraktı,
ama gerekli olan, beka ve hilal olunca,
eksik bedenlerimizle sürüne sürüne gittik, ölümlerin üstüne.</p></font></center>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <a href="galerici.php" target="_blank"><img src="2484.jpg" alt="Mountains" style="width:100%"></a>
      <h3>OĞUZ33TİMİN'DEN KARELER</h3>
      <p>"Herkesin bir muradı vardır, muradı olsun diye"
</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="galerici2.php" target="_blank"><img src="2485.jpg" alt="Lights" style="width:100%"></a>
      <h3>OPERASYONLARDAN KARELER</h3>
      <p> "Batsın dağları, başka kuzuları yemesin, o şırnak dağları"
</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="galerici3.php" target="_blank"><img src="2497.jpg" alt="Nature" style="width:100%"></a>
      <h3>Mücaadele Yıllarımdan Kareler</h3>
      <p>"Buralarda birinin mutlu olması için, diğer birinin felaket yaşaması lazım"</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="galerici.php" target="_blank"><img src="ekran.png" alt="Mountains" style="width:100%"></a>
      <h3>Operasyonları Delilendiren Belgeler</h3>
      <p>"ha bu vatanın ekmeğini yemişim, ha uğruna bir kurşun"  </p>
    </div>
  </div>
  
<!-- END GRID -->
</div>

</body>
</html>