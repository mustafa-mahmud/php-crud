<?php
include 'sql/function.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $password = $_POST['password'];

  insert($name, $age, $password);
}
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<h1 class="text-center bg-success my-5 py-2 text-white">Insert Data to DB</h1>
			<form action="#" method="post">
				<input placeholder="Name..." class="form-control mb-3" type="text" name="name" id="name" />
				<input placeholder="Age..." class="form-control mb-3" type="number" name="age" id="age" />
				<input placeholder="Password..." class="form-control mb-3" type="password" name="password" id="password" />
				<button type="submit" name="submit" class="btn btn-success px-5 py-1">Insert</button>
			</form>
		</div>
	</div>
</div>