<?php
include('header.php');
?>

        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Features Details</h1>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="./bus_details.php">Create</a></li>
                            <li class="active">Details </li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
				
                            <div class="card-header">
                                <!-- <strong class="card-title">Bus Details</strong> -->
								<a href="add_features.php" class="btn btn-primary" style="float: right;padding:10px;width:200px;">Add Features</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
								<?php
									$sql="select * from tbl_features inner join tbl_technology on tbl_features.technology_id=tbl_technology.id";
									$result = mysqli_query($con,$sql);
								    echo"<thead>";
                                    echo"<tr>";
                                    echo"<th>Id</th>";
                                    echo"<th>Technology Name</th>";
                                    echo"<th>Chapter Name</th>";
									echo"<th>File</th>";
								    echo"<th>Update</th>";
									echo"<th>Delete</th>";
									echo"</tr>";
                                    echo"</thead>";
                                    echo"<tbody>";
                                    $i=1;
									while ($row=mysqli_fetch_row($result))
									{
										//$p_id=$row['p_id'];
                                        echo"<tr>";
                                        echo"<td>$i</td>";
                                        echo"<td>$row[6]</td>";
                                        echo"<td>$row[3]</td>";
										?>
										<td><video src="videos/<?php echo $row[2];?>" height="200px" width="200px" controls></td>
										<?php
                                        echo "<td><a href='edit_features.php?id=$row[0]' class='btn btn-warning btn-sm' style='color:white;'>Edit</a></td> ";
										echo "<td><a href='delete_features.php?id=$row[0]' class='btn btn-sm btn-danger btn-sm'>Delete</a></td>";
									    echo"</tr>";
                                        $i++;
                                    }
                                    echo"</tbody>";
									
								?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
