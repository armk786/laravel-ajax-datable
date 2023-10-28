<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data-tables-Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
 
</head>
<body>
 <!--  <form action="https://google.com" target="_blank">
    <input type="submit" value="Go to Google"  style="float:right;" />
</form> -->
<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"ajax_datatable");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM users");

?>

<div class="container">
    <table id="example" class="display" style="width:100%">
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
        <thead>
            
            <tr>
                <th >Name</th>
                <th>email</th>
                <th>mobile</th>
                <th>location</th>
                <th>call status</th>
                <th>Action</th>
                <th>Action2</th>
                <th>Action3</th>
                <th>Action4</th>
                <th>Action5</th>
            </tr>
        </thead>
       
        <tbody>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $row["client_name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["mobile"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["company_name"]; ?></td>
                <td>edit</td>
                <td>edit2</td>
                <td>edit3</td>
                <td>edit4</td>
                <td>edit5</td>
            </tr>
                <?php
                $i++;
                }
                ?>
          
           
        </tbody>

        <?php } ?>
       
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

            {
                text: 'My button',
                action: function ( e, dt, node, config ) {
                    window.location='http://www.example.com';
                }
            }
            
        ]
    } );
} );
</script>

</body>
</html>
