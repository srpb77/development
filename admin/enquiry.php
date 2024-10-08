<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		//$delete_sql="delete from contact_us where sNo='$id'";
		$delete_sql="UPDATE enquiry SET status = 'No' where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from enquiry where status='Yes' order by id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Enquiry</h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table">
				       <div class="col-md-12 head">
    <div class="float-right">
        <a href="contact-us-export.php" class="btn btn-success">Export</a>
    </div>
</div>
					  <table id="example" class="table table-striped table-bordered" style="width:100%">
						 <thead>
							<tr>
							   <th class="serial">ID#</th>
						
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile NO.</th>
							   <th>Date</th>
							   <th>View</th>
							   <th>Delete</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							   <td><?php echo $row['date']?></td>
							   <td> <button type='button' class='badge badge-complete' data-toggle='modal' data-target='#myModal<?=$row['sNo'];?>'>View</button></td>
							   <td>
							      
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								?>
							   </td>
							</tr>
							
							<!-- Modal -->
<div id="myModal<?=$row['sNo'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">View Details</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12"><b>Name:</b> <?php echo $row['name'];?></div>
      </div>
       <div class="modal-body">
        <div class="col-md-12"><b>Email:</b> <?php echo $row['email'];?></div>
      </div>
       <div class="modal-body">
        <div class="col-md-12"><b>Mobile:</b> <?php echo $row['mobile'];?></div>
      </div>
       <div class="modal-body">
        <div class="col-md-12"><b>Subject:</b> <?php echo $row['subject'];?></div>
      </div>
       <div class="modal-body">
        <div class="col-md-12"><b>Message:</b> <?php echo $row['comments'];?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
							
							
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
<?php
require('footer.inc.php');
?>