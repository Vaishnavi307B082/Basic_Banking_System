<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class = "body" style="background-color : white;">

<?php
    include 'connection.php';
    $sid = $_GET['id'];
    $sql = "SELECT * From users where id = $sid";
    $result  = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($result);
?>

<?php
  include 'navigation.php';
?>

  <h2 class="text-center pt-4" style="color : rgb(11, 139, 161);"><b>View User</b></h2><br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/avtar1.jfif" style=" color:black; border: solid 2px; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
                ID:<?php echo $rows['id']?>
            </div>
            <div class="app-form-group">
                Name:<?php echo $rows['name']?>
            </div>
            <div class="app-form-group">
                Email:<?php echo $rows['email']?>
            </div>
            <div class="app-form-group">
                IFSCcode :<?php echo $rows['ifsc_code']?>
            </div>
            <div class="app-form-group">
                Account No :<?php echo $rows['Account_no']?>
            </div>
            <div class="app-form-group">
                Mobile No:<?php echo $rows['Mob_no']?>
            </div>
            <div class="app-form-group">
                Balance:<?php echo $rows['balance']?>
            </div>
            <br>
            <div class=" button">
              <a href="transfermoney.php?> "> <button type="button" class="btn" style=" background-color : rgb(11, 139, 161); border:solid 1px black">Transact</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <p>&copy 2022. Made by <b>VAISHNAVI SAWANT</b></p>
</footer>
<style>
  .body
  {
    overflow:hidden;
  }
  button,input 
  {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
  }
  .background 
  {
    width: 100%;
    display: flex;
  }

  .container 
  {
    flex: 0 1 700px;
    width: 100%;
    margin: auto;
    padding: 10px;
  }

  .screen 
  {
    position: relative;
    background: #d9d9d9;
    border-radius: 15px;
    box-shadow: 5px 10px 10px rgba(0, 0, 0, .25);
  }

  .screen-body 
  {
    display: flex;
    background-color:lightblue;
    border:solid 2px;
    border-radius:10px;
    margin-top:50px;
  }

  .screen-body-item 
  {
    flex: 1;
    padding: 50px;
  }
  
  .app-form-group 
  {
    margin-bottom: 15px;
  }

  .app-form-group.button 
  {
    margin-bottom: 0;
    text-align: right;
    position: absolute;
    bottom: 30px;
    right:40px;
  }

  .app
  {
    width: 100%;
    padding: 10px 0;
    background: none;
    border: none;
    border-bottom: 1px solid #4C4B4B;
    font-size: 17px;
    outline: none;
    transition: border-color .2s;
  }

  .app-form-control::placeholder 
  {
    color: #666;
  }

  .app-form-control:focus 
  {
    border-bottom-color: #4C4B4B;
  }

  .app-form-button 
  {
    background: white;
    border: solid 2px;
    border-radius:10px;
    margin-left: 20px;
    color: black;
    font-size: 17px;
    cursor: pointer;
    outline: none;
    padding:5px;
  }

  .app-form-button:hover 
  {
    color: blue;
  }
  @media screen and (max-width: 600px) 
  {
    .screen-body 
    {
      padding: 40px;
    }
    .screen-body-item 
    {
      padding: 0;
    }
  }
  @media screen and (max-width: 520px) 
  {
    *
    {
      letter-spacing:1px;
    }
    .container
    {
      margin-left: 20px;
      margin-right: 20px;
      margin-bottom: 40px;
    }
    .screen-body 
    {
      flex-direction: column;
    }
    .screen-body-item.left 
    {
      margin-bottom: 50px;
    }
    .app-form-butto
    {
      margin-top:5px;
    }
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
    margin-top: 110px;
    margin-bottom:0px;
	  font-size: 15px;
    padding-bottom:25px;
    padding-top:20px;
	  margin-left:0px;
  }

</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>