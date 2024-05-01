<div class="tenant-list p-5 table-responsive">
    <div class="row ">
        <div class="col-12 mb-3">
            <button id="addTenantmodalbtn" class="btn btn-dark rounded-pill "><i class="bi bi-person-add"></i> Add Tenant</button>
        </div>
        <div class="col-12">
            <table id="tenant-table" class="table table-dark text-center">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Room</th>
                        <th>Start Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
    include 'modals.php';
?>