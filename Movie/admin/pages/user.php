<?php
include('header.php');
?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                    <?php include('../../msgbox.php');?>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>User Management</h2>                                
                            </div>
                            
                            <div class="col-sm-6">
                                <a href="#editEmployeeModal" class="btn btn-success" data-toggle="modal">
                                    <i class="material-icons"></i><span>Edit User</span>
                                </a>
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                    <i class="material-icons"></i><span>Add User</span>
                                </a>    
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Cinema ID</th>
                                <th>User role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $qry=mysqli_query($con,"select * from app_user");
                            if(mysqli_num_rows($qry))
                            {
                               while($u=mysqli_fetch_array($qry))
                               {
                        ?>
                            <tr>
                                <td style="width: 30%;"><?php echo $u['username'];?></td>
                                <td style="width: 25%;"><?php echo $u['cinema_id'];?></td>
                                <td style="width: 25%;"><?php echo $u['user_type'];?></td>
                                <td style="width: 10%;">
                                    <!--<a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit"></i><span>Edit</span>
                                    </a>-->
                                    <a href="process_user.php?username=<?php echo $u['username'];?>" class="delete" data-toggle="modal">
                                        <i class="material-icons" data-toggle="tooltip" title="Delete"></i><span>Del</span>
                                    </a>
                                    
                                </td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="process_user.php" method="post" id="form1">
                        <div class="modal-header">
                            <h4 class="modal-title">Add User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="add_username" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Cinema ID</label>
                                <input type="text" name="add_cid" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>User role</label>
                                <input type="text" name="add_usertype" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="add_psw" class="form-control" required></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <!--<input type="submit" class="btn btn-success" value="Add">-->
                            <button class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                <form action="process_user.php" method="post" id="form2">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>User name</label>
                                <input type="text" name="upd_username" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Cinema ID</label>
                                <input type="text" name="upd_cid" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>User role</label>
                                <input type="text" name="upd_usertype" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="upd_psw" class="form-control" required></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <!--<input type="submit" class="btn btn-info" value="Save">-->
                            <button class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('footer.php');
?>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}

.table-responsive {
    margin: 30px 0;
}

.table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 1000px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.table-title {
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

.table-title .btn-group {
    float: right;
}

.table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}

.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}

.table-title .btn span {
    float: left;
    margin-top: 2px;
}

table.table tr th,
table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}

table.table tr th:first-child {
    width: 60px;
}

table.table tr th:last-child {
    width: 100px;
}

table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}

table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}

table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}

table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}

table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
}

table.table td a:hover {
    color: #2196F3;
}

table.table td a.edit {
    color: #FFC107;
}

table.table td a.delete {
    color: #F44336;
}

table.table td i {
    font-size: 19px;
}

table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}

.pagination {
    float: right;
    margin: 0 0 5px;
}

.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}

.pagination li a:hover {
    color: #666;
}

.pagination li.active a,
.pagination li.active a.page-link {
    background: #03A9F4;
}

.pagination li.active a:hover {
    background: #0397d6;
}

.pagination li.disabled i {
    color: #ccc;
}

.pagination li i {
    font-size: 16px;
    padding-top: 6px
}

.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}

/* Custom checkbox */
.custom-checkbox {
    position: relative;
}

.custom-checkbox input[type="checkbox"] {
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
}

.custom-checkbox label:before {
    width: 18px;
    height: 18px;
}

.custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 2px;
    box-sizing: border-box;
    z-index: 2;
}

.custom-checkbox input[type="checkbox"]:checked+label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
}

.custom-checkbox input[type="checkbox"]:checked+label:before {
    border-color: #03A9F4;
    background: #03A9F4;
}

.custom-checkbox input[type="checkbox"]:checked+label:after {
    border-color: #fff;
}

.custom-checkbox input[type="checkbox"]:disabled+label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
}

/* Modal styles */
.modal .modal-dialog {
    max-width: 400px;
}

.modal .modal-header,
.modal .modal-body,
.modal .modal-footer {
    padding: 20px 30px;
}

.modal .modal-content {
    border-radius: 3px;
    font-size: 14px;
}

.modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 3px 3px;
}

.modal .modal-title {
    display: inline-block;
}

.modal .form-control {
    border-radius: 2px;
    box-shadow: none;
    border-color: #dddddd;
}

.modal textarea.form-control {
    resize: vertical;
}

.modal .btn {
    border-radius: 2px;
    min-width: 100px;
}

.modal form label {
    font-weight: normal;
}
</style>
<script>
function del(m)
    {
        if (confirm("Are you want to delete this user") == true) 
        {
            window.location="process_user.php?mid="+m;
        } 
    }
    </script>