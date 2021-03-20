
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/table.css">
    
   

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:orange;
        color: white;
      }
      footer{
      background-color: black;
      text-align: center;
      left: 0%;
      width:100%;
      height:8%;
      bottom:0;
      color:red;
  }
  nav{
	float:left;
	top:0;
	background-color:black;
	opacity:0.5;
	width:100%;
	margin-top:0px;
		}
 li{
	 display: inline-block;
	 color: red;
	 padding: 10px;
	 font-size: large;
	 margin: 10px;
 }
 li:hover{
	 background-color: whitesmoke;
	 background-size: cover;
	 border-radius:5mm;
 }
    </style>
</head>

<body style="background-color : #F9B960;height:100%">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table   width="100%"  class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-1">Sr no.</th>
                            <th scope="col" class="text-center py-1">Name</th>
                            <th scope="col" class="text-center py-1">E-Mail</th>
                            <th scope="col" class="text-center py-1">Balance</th>
                            <th scope="col" class="text-center py-1">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-1"><?php echo $rows['id'] ?></td>
                        <td class="py-1"><?php echo $rows['name']?></td>
                        <td class="py-1"><?php echo $rows['email']?></td>
                        <td class="py-1"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #5ed9e4;;">Transact</button></a></td> 
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
         <footer class="text-center mt-5 py-2">
         <p>&copy 2021. By <b>Vaishnavi Shetty</b> <br> Sparks Foundation</p>
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>