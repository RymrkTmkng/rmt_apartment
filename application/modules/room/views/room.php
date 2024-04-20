<div class="room-cont p-5">
    <div class="row m-auto">
        <div class="col-md-12 mb-3">
            <a href="javascript:void(0);" class="btn btn-dark bg-gradient rounded-pill add_roombtn">
                <i class="bi bi-house-add"> </i>Add Room
            </a>
        </div>
        <?php
        for ($i = 1; $i < 17; $i++) :
            if ($i == 13) {
                $i = 14;
            }
        ?>
            <div class="col-md-4 mb-3 ">
                <a href="" class="room-card-img">
                    <div class="card room-card">
                        <img src="<?= base_url('assets/images/rooms/sampleroom.jpg') ?>" class="card-img" alt="room <?= $i ?>">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-light">Room <?= $i ?></h5>
                            <p class="card-text"></p>
                            <p class="card-text"><small></small></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endfor; ?>

    </div>
</div>
<!--Add Room Modal-->
<div class="modal" tabindex="-1" id="add_room">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-dark bg-gradient">
        <h5 class="modal-title"><i class="bi bi-house-add"> </i>Add Room</h5>
      </div>
      <div class="modal-body">
        <h5>Room Details</h5>
        <form id="add_roomform">
            <label for="room_id">Room Number</label>
            <input type="text" name="room_id" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>