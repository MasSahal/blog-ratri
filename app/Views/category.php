<?= $this->extend("templates") ?>
<?= $this->section("title") ?>

<h2>This is Category's Page</h2>

<?= $this->endSection() ?>
<?= $this->section("content") ?>

<br>

<!-- Ini awal  formulir -->
<div class="card p-3">
	<form method="post" action="<?= base_url('/insert_category') ?>">
		<div class="form-group">
			<label>Category Name</label>
			<input type="text" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-block btn-transparent" style="background:#f5f5f5">
				Submit
			</button>
		</div>
	</form>
</div>
<!-- Ini akhir formulir -->



<?= $this->endSection() ?>