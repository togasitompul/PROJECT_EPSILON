<div class="container col-12">
	<div class="row">
		<div class="col-md-12">
			<h2>LIST SALE</h2>
			<div class="d-grid gap-0">
</div>

<a href="sales/new" class="btn btn-success md-3 ">Tambah Sale</a>

<?php foreach (session()->getFlashdata() as $key => $flash) : ?>
  <div class="alert alert-<?= $key ?>" role="alert">
    <?= $flash ?>
  </div>
<?php endforeach; ?>

<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>#</th>
        <th>Invoice No</th>
        <th>Invoice Date</th>
        <th>Customer</th>
        <th>Grand Total</th>
      </tr>
    </thead>
    <tbody>
      <?php if(empty($sales)): ?>
        <tr>
          <td colspan=6>Tidak ada data</td>
        </tr>
      <?php else: ?>
        <?php foreach($sales as $index => $sale): ?>
          <tr>
            <td><?= $index + 1 ?></td>
            <td>
              <a href="sales/<?= $sale->id ?>">Detail</a>
            </td>
            <td><?= $sale->invoice_no ?></td>
            <td><?= $sale->invoice_date ?></td>
            <td><?= $sale->customer_id ?></td>
            <td><?= $sale->grand_total ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>

<script type="text/javascript">
</script>
