<h3>Tambah Barang</h3>

<a href="/items" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/items" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
    <?php if (isset($errors) and $errors->getError('name')) { ?>
      <div class='text-danger mt-2'>
        <?= $error = $errors->getError('name'); ?>
      </div>
    <?php } ?>
  </div>
  <div class="mb-3">
    <label for="venue" class="form-label">venue</label>
    <input type="text" name="venue" id="venue" class="form-control" value="<?= set_value('venue') ?>">
    <?php if (isset($errors) and $errors->getError('venue')) { ?>
      <div class='text-danger mt-2'>
        <?= $error = $errors->getError('venue'); ?>
      </div>
    <?php } ?>
  </div>
  </div>
  <div class="mb-3">
    <label for="ticket_limit" class="form-label">ticket_limit</label>
    <input type="text" name="ticket_limit" id="ticket_limit" class="form-control" value="<?= set_value('ticket-limit') ?>">
    <?php if (isset($errors) and $errors->getError('ticket_limit')) { ?>
      <div class='text-danger mt-2'>
        <?= $error = $errors->getError('ticket_limit'); ?>
      </div>
    <?php } ?>
  </div>
  </div>
  <div class="mb-3">
    <label for="event_date" class="form-label">event_date</label>
    <input type="text" name="event_date" id="event_date" class="form-control" value="<?= set_value('event_date') ?>">
    <?php if (isset($errors) and $errors->getError('event_date')) { ?>
      <div class='text-danger mt-2'>
        <?= $error = $errors->getError('event_date'); ?>
      </div>
    <?php } ?>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" name="price" id="price" class="form-control" value="<?= set_value('price') ?>">
    <?php if (isset($errors) and $errors->getError('price')) { ?>
      <div class='text-danger mt-2'>
        <?= $error = $errors->getError('price'); ?>
      </div>
    <?php } ?>
  </div>
  <div class="mb-3">
    <label for="image_upload" class="form-label">Image</label>
    <input type="file" name="image_upload" id="image_upload" class="form-control" value="<?= set_value('image_upload') ?>">
    <?php if (isset($errors) and $errors->getError('image_upload')) { ?>
      <div class='text-danger mt-2'>
        <?= $error = $errors->getError('image_upload'); ?>
      </div>
    <?php } ?>
  </div>
  <div class="mb-3">
    <label for="status_id" class="form-label">Status</label>
    <select name="status_id" class="form-control">
      <option value="1">Aktif</option>
      <option value="2">Tidak Aktif</option>
    </select>
  </div>
  <div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
  </div>
</form>

<script>
  $('#event_date').datetimepicker();
</script>