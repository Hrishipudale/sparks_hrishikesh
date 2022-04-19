<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/name.css">

    <title>Bank Management</title>

    <style type="text/css">
      body{
	      background-image:url("home.jpg") ;
	      background-position: center;
	      background-size:cover;
	      height: 100vh;
      }
      .btn{
        position:absolute;
        top:50%;
        left:20%;
      }
      h1{
        color:White;
      }
      h3{
        color:#f7f7d2;
      }
    .button-27 {
      appearance: none;
      background-color:#0059b3;
      border: 2px solid #1A1A1A;
      border-radius: 15px;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      
      font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
      font-size: 16px;
      font-weight: 600;
      line-height: normal;
      margin: 0;
      min-height: 60px;
   
      outline: none;
      padding: 16px 24px;
      text-align: center;
      text-decoration: none;
      transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width:200px;
      will-change: transform;
    }

    .button-27:disabled {
      pointer-events: none;
    }

    .button-27:hover {
      box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
      transform: translateY(-2px);
    }

    .button-27:active {
      box-shadow: none;
      transform: translateY(0);
    }
    </style>

  </head>

  <body>
    <?php
      include 'name.php';
    ?>
      <br>
      <br>
    <div class="container-fluid">
      <div class="row intro py-1">
          <div class="col-sm-12 col-md">
            <div class="heading my-6" >
              <center><h1>Basic Banking System</h1></center>
            </div>
          </div>
        </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h3 class="action" ><center><span >Your Bank at Your Fingertips</h3></span></center>
          <div class="column activity text-center">
            <div class="col-md act">
              <br>
              <br>
              <br>
              <a href="history.php"><button class="button-27" role="button">Transaction History</button></a>
            </div>
            <div class="col-md act">
              <br>
              <br>
              <br>
              <a href="transfermoney.php"><button class="button-27" role="button"> Customers Details</button></a>
            </div>
                  
        </div>
      </div>
      <br>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </div>
  </body>
</html>


