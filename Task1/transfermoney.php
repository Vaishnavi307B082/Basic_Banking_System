<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style type="text/css">
      button
      {
        transition: 1.5s;
      }
      button:hover
      {
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : #fff;">
<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navigation.php';
?>

<div class="container">
    <h2 class="text-center pt-4" style="color : rgb(11, 139, 161)"><b>Transfer Money</b></h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm"  style="color:black;">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="color:black;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selectuserdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style=" background-color : rgb(11, 139, 161);">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="footer">
            <p>&copy 2022. Made by <b>VAISHNAVI SAWANT</b></p>
        </footer>
        <style>
            *
            {
	            padding: 0;
	            margin: 0;
	            box-sizing: border-box;
	            font-family: sans-serif;
            }
            h2
            {
	            font-size: 40px;
            }
            table
            {
	            letter-spacing: 1.2px;
            }
            td
            {
	            text-align: center;
            }
            button
            {
	            border:none;
	            background: #d9d9d9;
                transition: 1s;
            }
            @media only screen and (orientation: portrait){
	        *
            {
		        letter-spacing: 1px;
	        }
            }
            .footer
            {
                color:#fff;
	            background-color:#021222;
	            letter-spacing: 0.5px;
	            height:60px;
                position:relative;
            }
            .footer p
            {
	            text-align:center;
                margin-top: 20px;
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