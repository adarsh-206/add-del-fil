
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>   
<body>

<div id="wrapper">

<div id="page-wrapper">

    <div class="container-fluid">
    <a href="index.php" class="btn btn-success btn-lg"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                 Welcome to the Transac Page
                </h1>
               
            </div>
        </div>
        <!-- /.row -->


             <div class="col-lg-12">
                <?php
						$fname = $_POST['firstname'];
					    $lname = $_POST['lastname'];
						$city = $_POST['City'];
						$year = $_POST['year'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO people
								(people_id,first_name, last_name, City, year)
								VALUES ('Null','".$fname."','".$lname."','".$mname."','".$city."','$year')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

