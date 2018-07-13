<!doctype html>
<html lang="en">
	<head>
	
		<title>Hello, world!</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	</head>
	<body>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
	<h1>Hello, world!</h1>

	<div class="container">
	<h2>Dropdowns</h2>
	<p>The .dropdown-header class is used to add headers inside the dropdown menu:</p>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li class="dropdown-header">Dropdown header 1</li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Dropdown header 2</li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
	</div>
	
	<div class="container">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
      </tr>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	
	</body>
</html>