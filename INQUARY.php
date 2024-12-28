<!-- M.S.Umair Salih  	IT23274716  -->

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/inquary.css">
	
<style>
    * {
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: 404;
    font-style: normal;
  }

body {
  background-color: #f2f2f2;
}

.container {
    margin: 50px auto;
    width: 80%;
    text-align: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1, h2, p {
    color: #212121;
    text-align: center;
}

h1 {
    color: #007bff; 
}

h2 {
    color: #02142f; 
}

.btn,.bt {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0069d9; 
}

.bt {
    background-color: #02142f; 
}

.bt:hover {
    background-color: #010a1f; 
}
</style>
</head>
<body>
<?php
  include './header.php';
  ?>
	<div class="container">
		<h1>Successfully Submit Your Inquiry</h1>
		<h2>Do You Want </h2>
		<div>
			<button type="button" class="bt" onclick="location.href='delete.php'">Delete</button>
			<button type="button" class="btn" onclick="location.href='edit.php'">Edit Your Inquiry</button>
            <button type="button" class="btn" onclick="location.href='read_inquary.php'">Read Inquiry</button>
		</div>
		<p>Thanks for your request. Our staff will contact you soon.</p>
	</div>
	
	
    
    <?php
  include './footer.php';
  ?>
</body>
</html>
