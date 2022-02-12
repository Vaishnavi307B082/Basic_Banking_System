<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

    <title>Basic Banking System</title>
  </head>

  <body class = "imp"> 
  <?php
  include 'navigation.php';
  ?>
  <div class ="cont">
    <div class="heading text-center my-5">
      <h3><b id = "bold">Welcome to</b></h3>
      <b><h1 data-text="Spark Bank India"></h1></b>
    </div>
              

    <!--  section of function -->
    <div class="container">
      <div class="text" id = "new">
        <div class="col">
            <img src="img/avtar1.jfif" class="img-fluid"><br>
            <a href="viewuser.php"><button style="background-color : #2785C4; ">View User</button></a>
        </div>

        <div class="col">
            <img src="img/transfermoney.jfif" class="img-fluid"><br>
            <a href="transfermoney.php"><button style="background-color : #2785C4; ">Transfer Money </button></a>
        </div>

        <div class="col">
            <img src="img/transactionhistory1.jfif" class="img-fluid"><br>
            <a href="transchistory.php"><button style="background-color : #2785C4; ">Transaction History</button></a>
        </div>
      </div>
    </div>
</div>
<footer class="footer">
  <p><br>&copy 2022. Made by <b>VAISHNAVI SAWANT</b> <br></p>
</footer>

<style>
  .cont
  {
    display:flex;
  }
  .imp
  {
    width = 100%;
    min-height = 100vh;
    background:cover;
    position:relative;
    overflow:hidden;
  }
  h1
  {
    font-size: 80px;
    line-height: 80px;    
    color:  rgb(11, 139, 161);
    -webkit-text-stroke: 0vw rgb(11, 139, 161);
    text-transform: uppercase;
  }
  h1::before
  {
    content: attr(data-text);
    position: absolute;
    left: 3%;
    width: 0;
    height: 30%;
    margin-top:30px;
    font-weight:bold;
    color: rgb(11, 139, 161);
    -webkit-text-stroke:0vw rgb(11, 139, 161);
    border-right: 2px solid #01fe87;
    overflow: hidden;
    animation: animate 6s linear infinite;
  }
  @keyframes animate
  {
    0%,10%,100%
    {
      width: 0;
    }
    70%,90%
    {
      width: 30%;
    }
  }
  h3
  {
    font-weight:bold;
    font-size:45px;
    margin-right:800px;
    margin-left:70px;
    margin-top:2%;
    color:#c71f09;
  }
  #bold
  {
    width:500px;
  }
  #new
  {
    display:inline;    
  }
  .col
  {
    display:flex;
  }
  .container
  {
    margin-top:20px;
    margin-right:2000px;
    margin-left:-350px;
    height:700px;
    width:500px;
  }
  .img-fluid
  {
    height: 150px;
    width: 150px;
    margin:20px;
  }
  button
  {
    width :200px;
    padding:10px;
    border-radius:10px;
    color:white;
    font-size:20px;  
  }
  button:hover
  {
    color:black;
  }
  a
  { 
    padding: 65px;
  }
  a:hover
  {
    background-color:white;
  }
  .footer
  {
    color:#fff;
	  background-color:#021222;
	  letter-spacing: 0.5px;
	  height:60px;
  }
  .footer p
  {
	  text-align:center;
    margin-top: -120px;
    margin-bottom:0px;
	  font-size: 15px;
    padding-bottom:25px;
	  margin-left:0px;
  }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>