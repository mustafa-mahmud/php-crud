<?php
include 'sql/function.php';

$ids = array_column(read(), 'id');

if (isset($_POST['update'])) {
  $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
  $id = intval($id);
  $name = trim($_POST['name']);
  $age = trim($_POST['age']);
  $password = trim($_POST['password']);

  update($id, $name, $age, $password);
}

?>
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<h3 class="text-center h3 text-info mb-3">Update Value</h3>
			<form action="update.php" method="post">
				<input class="form-control mb-2" type="text" name="name" placeholder="Name..." />
				<input class="form-control mb-2" type="number" name="age" placeholder="Age..." />
				<input class="form-control mb-2" type="password" name="password" placeholder="Password..." />

				<select name="id" class="form-select mb-3" aria-label="Default select example">
					<option value="null" selected>Select below number</option>
					<?php foreach ($ids as $id): ?>
					<?php echo "<option value='$id'>$id</option>" ?>
					<?php endforeach;?>
				</select>

				<input class="btn btn-secondary btn-block w-100" type="submit" value="Update" name="update" />
			</form>
		</div>
	</div>
</div>