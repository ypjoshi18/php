<?php
    include __DIR__.'/../includes/session.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    <?php
    include __DIR__.'/../controller/show-all-data.php';
    $count = $_SESSION['num_of_rows'];
    ?>
    <body>
        <table table class="table table-striped">
            <thead class="thead dark">
            <tr>
                <th scope="col">Sr. No</th>
                <th scope='col'>Username</th>
                <th scope='col'>Update</th>
                <th scope='col'>Delete</th>
                <th scope='col'>Read</th>
            </tr>
            </thead>
            <tbody>
                <?php
                for ($arrayindex=0;$arrayindex<$count;$arrayindex++){
                    $srno = $arrayindex+1;
                ?>
                <tr>
                    <th scope='row'><?php echo $srno ?></th>
                    <td id="name<?php echo $arrayindex; ?>" ><?php echo $userArray[$arrayindex][0] ?></td>
                    <td><a onclick="update('<?php echo $userArray[$arrayindex][1] ?>')">Update!</a></td>
                    <td><a onclick="confirmation('<?php echo $userArray[$arrayindex][1] ?>')">Delete!</a></td>
                    <td><a onclick="read('<?php echo $userArray[$arrayindex][1] ?>')">Read!</a></td>
                </tr>
                <?php } ?>
        </table>
    <script type="text/javascript">
        function confirmation(user)
        {
            var result = confirm("Want to delete?");
            if (result) window.location.href ="/controller/delete-data.php?u=" + user;  
        }
        function update(user) {
   
         window.location = '/views/update-page.php?u=' + user;  
        }
        </script>
        <script type="text/javascript">
        function read(user)
        { 
            window.location = '/views/read-data.php?u=' + user;
        }
    </script>
    </body>
</html>