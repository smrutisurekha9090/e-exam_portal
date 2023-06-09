<?php 
// include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sticky Navbar Example</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .btn {
          background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 10px 25px;
          cursor: pointer;
          font-size: 15px;
        }
       
        .btn:hover {
          background-color: RoyalBlue;
        }
        </style>
</head>
<body>
	<!-- <header>
		<nav class="navbar">
			<ul>
				<li><a href="#">e-Exam</a></li>
				<li><a href="#">openforum</a></li>
				<li><a href="#">e-repository</a></li>
				<li><a href="#">Mywall</a></li>
			</ul>
		</nav>
	</header> -->
    <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="ps-5">
              <a class="nav-link active" href="../index.php">Home</a>
            </li>
           <li class="ps-5">
              <a class="nav-link active" href="#">openforum</a>
            </li>
            <li class="ps-5" >
              <a class="nav-link active" href="../e-repo/day1.html">e-repository</a>
            </li>
            <li class="ps-5">
              <a class="nav-link active" href="../mywall/account.php">mywall</a>
            </li>
      </ul>
            <a href="../quiz/logout.php" class="btn btn-info btn-sm">
                <span class="glyphicon glyphicon-log-out"></span><i class='fas fa-sign-out-alt'></i> Log out
            </a>
        </div>
      </nav>
      
    <form action="download.php" method="post" enctype="multipart/form-data">

    <main>
        <h1>Welcome to my e-exam website</h1>
		<p>Choose a file to upload:</p>
		<div class="file-upload">
			<input type="file" name="my-file" id="file-input" />
			<label style="color: green;" for="file-input">Choose a file <i class="fa fa-upload" aria-hidden="true"></i></label>
			<button type="submit" name="submit">Upload</button>
		</div>
	</main>


    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>File Name</th>
                <th>Time</th>
                <th>Download Your file</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>prakash</td>
                <td>Doe</td>
                <td>file1.pdf</td>
                <td>12:30 PM  </td>
                <td><button class="btn" name="upload" ><i class="fa fa-download"></i> Download </button></td>
            </tr>
            <tr>
                <td>Rachit</td>
                <td>Doe</td>
                <td>file1.pdf</td>
                <td>12:30 PM  </td>
                <td><button class="btn" name="upload" ><i class="fa fa-download"></i> Download </button></td>
            </tr>
            <tr>
                <td>sushil</td>
                <td>Doe</td>
                <td>file1.pdf</td>
                <td>12:30 PM  </td>
                <td><button class="btn" name="upload" ><i class="fa fa-download"></i> Download </button></td>
            </tr>
            <tr>
                <td>happy</td>
                <td>Doe</td>
                <td>file1.pdf</td>
                <td>12:30 PM  </td>
                <td><button class="btn" name="upload" ><i class="fa fa-download"></i> Download </button></td>
            </tr>
            <tr>
                <td>Raiko</td>
                <td>Doe</td>
                <td>file1.pdf</td>
                <td>12:30 PM  </td>
                <td><button class="btn" name="upload" ><i class="fa fa-download"></i> Download </button></td>
            </tr>
            <tr>
                <td>sree</td>
                <td>Doe</td>
                <td>file1.pdf</td>
                <td>12:30 PM  </td>
                <td><button class="btn" name="upload" ><i class="fa fa-download"></i> Download </button></td>
            </tr>
        </tbody>
    </table>
</form>

</body>
</html>
