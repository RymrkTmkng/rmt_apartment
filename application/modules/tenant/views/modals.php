<!--Add Tenant Info-->
<div class="modal tenant_user_info" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-dark">
        <h5 class="modal-title"><i class="bi bi-person-add"></i> Add Tenant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addTenantinfoform" class="row needs-validation" novalidate>
          <div class="col-sm-6 mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control rounded-pill" name="first_name" required>
            <div class="invalid-feedback">
              Please enter a first name.
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control rounded-pill" name="middle_name" required>
            <div class="invalid-feedback">
              Please enter a middle name.
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control rounded-pill" name="last_name" required>
            <div class="invalid-feedback">
              Please enter a last name.
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control rounded-pill" name="birthdate" required>
            <div class="invalid-feedback">
              Please enter a birthdate.
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control rounded-pill" name="email" required>
            <div class="invalid-feedback">
              Please enter email address.
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="occupation" class="form-label">Occupation</label>
            <input type="text" class="form-control rounded-pill" name="occupation" required>
            <div class="invalid-feedback">
              Please enter an occupation.
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="provincial_address" class="form-label">Provincial Address</label>
            <input type="text" class="form-control rounded-pill" name="provincial_address" required>
            <div class="invalid-feedback">
              Please enter a provincial address.
            </div>
          </div>
          <div class="modal-footer">
            <div class="col-12 text-end">
              <button type="submit" id="nextformTenantInfo" class="btn btn-success rounded-pill">Save</button>
              <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill">Cancel </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Add Tenant Login Credentials-->
<div class="modal tenant_user_creds" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-dark">
        <h5 class="modal-title">Add Login Credentials</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form id="addTenantCredentials" class="row needs-validation" novalidate>
          <input type="hidden" name="user_info_id" value="">
          <input type="hidden" name="role_id" value="2">
          <div class="col-12 mb-3 ">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control rounded-pill" name="username" required>
            <div class="invalid-feedback">
              Please enter a username
            </div>
          </div>
          <div class="col-12 mb-3 ">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control rounded-pill" name="password" required>
            <div class="invalid-feedback">
              Please enter a password
            </div>
          </div>
          <div class="col-12 mb-3 ">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control rounded-pill" name="confirm_password" required>
            <div class="invalid-feedback">
              Please confirm password
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <div class="col-12 text-end ">
          <button type="submit" class="btn btn-success rounded-pill">Save</button>
          <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill">Cancel </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Add Tenant Room Info-->
<div class="modal tenant_room_info" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-dark">
        <h5 class="modal-title">Add Tenant Room Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form id="addTenantRoomInfo" class="row needs-validation" novalidate>
          <input type="hidden" name="user_id" value="" required>
          <div class="col-12 mb-3 ">
            <label for="Room Number" class="form-label">Room Number</label>
            <select class="form-control rounded-pill" name="room_number" id="roomnum" required>
              <option value="" selected disabled>Select Room Number</option>
            </select>
            <div class="invalid-feedback">
              Please select a room number
            </div>
          </div>
          <div class="col-12 mb-3 ">
            <label for="starting date" class="form-label">Starting Date</label>
            <input type="date" class="form-control rounded-pill" name="starting_date" required>
            <div class="invalid-feedback">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <div class="col-12 text-end ">
          <button type="submit" class="btn btn-success rounded-pill">Save</button>
          <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill">Cancel </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Edit Tenant-->
<div class="modal editTenant" data-bs-backdrop="static" tabindex="-1">
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
            <input type="text" class="form-control" name="first_name" required>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-sm-12 mb-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="middle_name" required>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-sm-12 mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="room" class="form-label">Room</label>
            <input type="text" inputmode="numeric" class="form-control" name="room_number" required>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="start_date" class="form-label">Starting Date</label>
            <input type="date" class="form-control" name="starting_date" required>
            <div class="invalid-feedback">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <div class="col-12 text-end">
          <button type="submit" id="saveupdateTenantbtn" class="btn btn-success rounded-pill">Save</button>
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Delete Tenant-->
<div class="modal delTenantModal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="delTenantForm">
        <div class="modal-header text-bg-danger bg-gradient">
          <h5 class="modal-title">Confirm Deletion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Are you sure you want to delete this Tenant?</h5>

          <input type="hidden" name="user_info_id" value="">
          <input type="hidden" name="room_number" value="">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger rounded-pill ">Delete</button>
          <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>