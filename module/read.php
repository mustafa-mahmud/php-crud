<?php
include 'sql/function.php';

$allKeys = [];

foreach (read() as $value) {
  foreach ($value as $key => $val) {
    array_push($allKeys, $key);
  }
}

$keys = array_unique($allKeys);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 py-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<?php foreach ($keys as $key): ?>
						<th scope="col"><?php echo ucfirst($key); ?></th>
						<?php endforeach;?>
					</tr>
				</thead>
				<tbody>
					<?php foreach (read() as $values): ?>
					<tr>
						<?php foreach ($values as $value): ?>
						<td><?php echo $value; ?></td>
						<?php endforeach;?>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>