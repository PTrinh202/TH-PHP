<!DOCTYPE html>
<html lang="en">
<head>
<title>BRUH</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.header {
  padding: 80px;
  text-align: center;
  background-image: url(/imgs/bg1.jpeg);
}
.header h1 {
  font-size: 40px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
.navbar a.right {
  float: right;
}
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}
.xnamefname {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="header">
  <h1 color = #569CD5>TEA FOR CHILL</h1>
  <p>Welcome</p>
</div>
<div class="navbar">
  <a href="#">Mua hàng</a>
  <a href="#">Giỏ hàng</a>
  <a href="#">Thông tin</a>
  <a href="#" class="right">LOGIN</a>
</div>
<div class="row">
  <div class="side">
    <h2>GIỚI THIỆU</h2>
    <h5>Welcome</h5>
    <img src = "/imgs/ben_001.jpg.jpg">
    <h3>RECOMMEND</h3>
    <div class="xnamefname" style="height:60px;">Trà đen</div><br>
    <div class="xnamefname" style="height:60px;">Trà xanh</div><br>
    <div class="xnamefname" style="height:60px;">Trà trắng</div>
  </div>
  <div class="main">
    <h2>TRÀ CỦA THÁNG</h2>
    <h5>TP.HCM, 10/03/2023</h5>
    <img src = "/imgs/ben_002.jpg">
    <p>Chào mừng đến Tea for CHILL</p>
    <br>
    <h2>Trà theo mùa</h2>
    <h5>Tháng 3</h5>
    <img src = "/imgs/ben_003.jpg">
  </div>
</div>
<div class="footer">
  <h2>Liên hệ</h2>
</div>
</body>
</html>