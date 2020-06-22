<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<link rel='stylesheet' type='text/css' href='https://localhost/eagleuniversity/css/bootstrap.css'>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #2d3744;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="https://localhost/eagleuniversity/img/eagleuniversity_signup.png" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
	</div>
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="https://localhost/eagleuniversity/img/eagleuniversity_signup.png" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
	</div>
</div>
   
</body>
</html> 
