<!--Add Tenant Info-->
<div class="modal tenant_user_info" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-dark">
        <h5 class="modal-title">Add Tenant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form id="addTenantinfoform" class="row needs-validation" novalidate>
          <div class="col-sm-6 mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control rounded-pill" name="first_name">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3 ">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control rounded-pill" name="middle_name">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3 ">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control rounded-pill" name="last_name">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3 ">
            <label for="start_date" class="form-label">Birthdate</label>
            <input type="date" class="form-control rounded-pill" name="birthdate">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-12 mb-3 ">
            <label for="provincial_address" class="form-label">Occupation</label>
            <input type="text" class="form-control rounded-pill" name="occupation">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-12 mb-3 ">
            <label for="provincial_address" class="form-label">Provincial Address</label>
            <input type="text" class="form-control rounded-pill" name="provincial_address">
            <div class="valid-feedback">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <div class="col-12 text-end ">
          <button type="submit" class="btn btn-success rounded-pill tenantbtninfonext">Next <i class="bi bi-arrow-right-short"></i></button>
          <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill">Cancel </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Edit Tenant-->
<div class="modal editTenant" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-dark">
        <h5 class="modal-title">Edit Tenant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editTenantform" class="row needs-validation" novalidate>
          <input type="hidden" value="" name="tenant_id">
          <input type="hidden" value="" name="user_id">
          <div class="col-sm-12 mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control rounded-pill" name="first_name">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-12 mb-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control rounded-pill" name="middle_name">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-12 mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control rounded-pill" name="last_name">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="room" class="form-label">Room</label>
            <input type="text" inputmode="numeric" class="form-control rounded-pill" name="room_number">
            <div class="valid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="start_date" class="form-label">Starting Date</label>
            <input type="date" class="form-control rounded-pill" name="starting_date">
            <div class="valid-feedback">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <div class="col-12 text-end">
          <button type="submit" id="saveupdateTenantbtn" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Delete Tenant-->
<div class="modal delTenantModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-bg-danger bg-gradient">
        <h5 class="modal-title">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Are you sure you want to delete this Tenant?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger rounded-pill">Delete</button>
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>