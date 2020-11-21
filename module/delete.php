<?php
include 'sql/function.php';

$id = array_column(read(), 'id');

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  delete($id);
}

?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-5">
			<form action="delete.php" method="post">
				<select name="id" class="form-select">
					<option value="null" selected>Select Id</option>
					<?php foreach ($id as $key => $results): ?>
					<option value="<?php echo $results; ?>"><?php echo $key + 1; ?></option>
					<?php endforeach;?>
				</select>
				<input class="btn btn-danger py-2 px-4 mt-3" type="submit" value="Submit" name="submit" />
			</form>
		</div>
	</div>
</div>