<?php error_reporting(E_ERROR | E_PARSE);?>
<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["ownerloginform"]["ownerusername"].value;
  var y = document.forms["ownerloginform"]["ownerpassword"].value;
  if (x == "") {
    alert("Credentials must be filled out");
    return false;
  }
  if (y == "") {
    alert("Credentials must be filled out");
    return false;
  }
  
  if (x != "aslam") {
    alert("Entered incorrect user name or password!!please enter correct credentials");
    return false;
  }
  if (y != "aslam123") {
    alert("Entered incorrect user name or password!!please enter correct credentials");  
    return false;
  }
  
}
</script>
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
    <style>
        html, body {
            min-height: 100%;
        }

        body, div, form, input, select, p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
			
        }

        body {
            background: url("royal.jpeg") no-repeat center;
            background-size: cover;
        }

        h1, h2 {
            text-transform: uppercase;
            font-weight: 400;
        }

        h2 {
            margin: 0 0 0 8px;
        }

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 25px;
            background: rgba(0, 0, 0, 0.5);
        }

        .left-part, form {
            padding: 25px;
        }

        .left-part {
            text-align: center;
        }

        .fa-graduation-cap {
            font-size: 72px;
        }

        form {
            background: rgba(0, 0, 0, 0.7);
        }

        .title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
			
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        input, select {
            padding: 5px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }

            input::placeholder {
                color: #eee;
            }

        option:focus {
            border: none;
        }

        option {
            background: black;
            border: none;
        }

        .checkbox input {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }

        .checkbox a {
            color: #26a9e0;
        }

            .checkbox a:hover {
                color: #85d6de;
            }

        .btn-item, button {
            padding: 10px 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background: #26a9e0;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            color: #fff;
        }

        .btn-item {
            display: inline-block;
            margin: 20px 5px 0;
        }

        button {
            width: 100%;
        }

            button:hover, .btn-item:hover {
                background: #85d6de;
            }

        @media (min-width: 568px) {
            html, body {
                height: 100%;
            }

            .main-block {
                flex-direction: row;
                height: calc(100% - 50px);
            }

            .left-part, form {
                flex: 1;
                height: auto;
            }
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    <div class="main-block">
        <div class="left-part">
            <i class=""></i>
            <h1>Royal Hotel, Naran</h1>
            <p></p>
            <div class="btn-group">

            </div>
        </div>
        <form name="ownerloginform" action="indexownerhomearcher.html" onsubmit="return validateForm()" method="post">
            <div class="title">
                <i class="fas fa-pencil-alt"></i>
                <h2>LOGIN</h2>
				
            </div>
			<div class="title">
                
                <h2>OWNER</h2>
				
            </div>
            <div class="info">
                <input class="fname" type="text" name="ownerusername" placeholder="username-owner">
                <input type="password" name="ownerpassword" placeholder="password">

            </div>
            <div class="checkbox">

            </div>
            <button type="submit" href="indexownerhomearcher.html">LOGIN</button>
			 <a type="forget" href="forgetpassword.php">forgetpassword</a>
        </form>
		
    </div>
</body>
</html>