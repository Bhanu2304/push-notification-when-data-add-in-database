<?php require_once('export.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>fb leads</title>
    <link rel="shortcut icon" href="favicon.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- push notification -->
    <script src="push.min.js"></script>
    <script src="serviceWorker.min.js"></script>

    <!-- Datatable Dependency end -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>


    <style>
        th {
            background-color: #0080ff;
            color: white;
           }
    </style>

</head>

<body>
    <div class="container">

        <div class="col-md-12">
            <div class="card">

                <div class="card-header text-center">

                    <form method='get' action=''>

                        <label>Start Date:</label>
                        <input type='date' class='dateFilter' name='created_at'
                            value='<?php if(isset($_GET['created_at'])) echo $_GET['created_at']; ?>'>

                        <label>End Date:</label>
                        <input type='date' class='dateFilter' name='updated_at'
                            value='<?php if(isset($_GET['updated_at'])) echo $_GET['updated_at']; ?>'>

                        <input type='submit' name='but_search' value='Search' class="btn btn-primary">
                    </form>

                </div>

                <div class="card-body">
                    <br>
                    <form action="export.php" method="post">
                        <input type='hidden' class='dateFilter' name='created_at'
                            value='<?php if(isset($_GET['created_at'])) echo $_GET['created_at']; ?>'>

                        <input type='hidden' class='dateFilter' name='updated_at'
                            value='<?php if(isset($_GET['updated_at'])) echo $_GET['updated_at']; ?>'>

                        <input class="btn btn-primary" type="submit" name="export" value="Export to Excel">
                    </form>
                    <br>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Mobile</th>
                                <th>Created Date</th>
                                <th>User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
           if(!empty($arr_users)) { ?>
                            <?php foreach($arr_users as $user) { ?>

                            <tr>
                                <td><?php echo $user['full_name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['company_name']; ?></td>
                                <td><?php echo $user['phone_number']; ?></td>
                                <td><?php echo $user['created_date']; ?></td>
                                <td>
                                    <form action="update.php">
                                        <input type="hidden" name="id" value="<?php echo $user['idx']; ?>">
                                        <select name="select" class="form-control form-control-sm text-primary"
                                            onchange="this.form.submit()" id="select">

                                                    <?php if($user['user'] != '')  { ?>
                                                    <option value="<?php echo $user['user']; ?>"> <?php echo $user['user']; ?>
                                                    </option>
                                                    <?php } else { ?>
                                                    <option value="">Select</option>

                                                    <option value="Varuna">Varuna</option>
                                                    <option value="Nitish">Nitish</option>
                                                    <option value="Srishti">Srishti</option>
                                                    <option value="Komal">Komal</option>

                                                    <?php } ?>

                                        </select>

                                    </form>


                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "ordering": false
            });
        });
    </script>

    <script>
        var old_count = 0;
        var i = 0;
        setInterval(function () {

            $.ajax({
                type: "POST",
                url: "count.php",
                success: function (data) {
                    if (data > old_count) {
                        if (i == 0) {
                            old_count = data;
                        } else {
                            // alert('New Record Found!');
                            start();
                            //$('.alert').show();
                            old_count = data;

                        }
                    }
                    i = 1;
                }
            });
        }, 1000);
    </script>

    <script>
        window.setInterval('refresh()', 120000);

        function refresh() {
            window.location.reload();
        }
    </script>

<script>
    
    function start(){
        Push.create("Hello!", {
            body: "New Record Found!",
            icon: 'favicon.png',
            timeout: 20000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    }

</script>

</body>

</html>