<style>
    @media print {
        .table .thead-dark th {
            color: #fff !important;
            background-color: #343a40 !important;
            border-color: #454d55 !important;
        }
    }
</style>

<div class="table_styles">
    <div>

    </div>
</div>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="card">
                    <header class="card-header head-border">
                        <?php echo "User Table"; ?>
                        <div style="float: right;">
                            <a class="btn btn-success" href="user/addUser">Add User</a>
                        </div>
                    </header>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Options</th>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $user->username; ?></td>
                                        <td><?php echo $user->email; ?></td>
                                        <td><a class="btn btn-warning" href="user/editUser?id=<?php echo $user->id; ?>">Edit</a> <a class="btn btn-warning" href="user/deleteUser?id=<?php echo $user->id; ?>">Delete</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<script src="<?php echo site_url('common/js/jquery.js'); ?>"></script>
