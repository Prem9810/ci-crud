
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
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
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
table.table tr th, table.table tr td {
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
.pagination li.active a, .pagination li.active a.page-link {
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
.custom-checkbox label:before{
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
.custom-checkbox input[type="checkbox"]:checked + label:after {
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
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
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
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#multipleDeleteEmployeeModal" class="btn btn-danger" id="all-delete"data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

                <?php 
                if($employees){
                    foreach($employees as $employee){ ?>

                        <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="selected" name="selected[]" value="<?php echo $employee['emp_id']; ?>">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $employee['name']; ?> </td>
                        <td><?php echo $employee['email']; ?> </td>
                        <td><?php echo $employee['address']; ?> </td>
                        <td><?php echo $employee['phone']; ?> </td>
						
						<td>
							<a href="#editEmployeeModal"  editid="<?php echo $employee['emp_id']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" deleteid="<?php echo $employee['emp_id']; ?>"class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>

               <?php     }
                }
               ?>
					
					
				</tbody>
			</table>

			<div class="clearfix">
			
			<?php echo $result?>
				<div id="pagination" > <?php echo $pagination ; ?></div>
				
			</div>


			<!-- <div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div> -->
		</div>
	</div>        
</div>
<!-- ADD Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="addEmployee"  >
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                <div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="name"  name="name"  class="form-control" >
                        <div id="error-name"></div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email" name="email" class="form-control" >
                        <div id="error-email"></div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" id="address" name="address"  ></textarea>
                        <div id="error-address"></div>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control"  id="phone" name="phone" >
                        <div id="error-phone"></div>
                        <div id="message"></div>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button  class="btn btn-success" id="addEmp" value="Add"> Add</button>
					
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="editEmployee">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                <div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="edit_name"  name="name"  value="" class="form-control" >
                        <div id="error-name"></div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="edit_email" name="email" class="form-control" >
                        <div id="error-email"></div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" id="edit_address" name="address"  ></textarea>
                        <div id="error-address"></div>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control"  id="edit_phone" name="phone" >
                        <div id="error-phone"></div>
                        <div id="message"></div>
					</div>					
				</div>
                <input type="hidden" name="emp_id" id="edit_emp_id" value="" >
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button  class="btn btn-success" id="updateEmp" value="Add"> Update</button>
					
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="deleteEmployee" >
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">					
                    <button  class="btn btn-danger" id="deleteEmp" value="Add"> Delete</button>
				</div>
				
                <input type="hidden" name="delete_id" id="delete_id" value="" >
			</form>
		</div>
	</div>
</div>

<!-- Multiple Delete Modal HTML -->
<div id="multipleDeleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="deleteEmployee" >
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">					
                    <button  class="btn btn-danger" id="multiDeleteEmp" value="Add"> Delete</button>
				</div>
				<input type="hidden" name="multiple_delete" id="multiple_delete" value="" >
			</form>
		</div>
	</div>
</div>
  
<script>
 var baseurl = '<?php echo base_url(); ?>';
    $('#addEmp').on('click', function (e) { 
       e.preventDefault();
        $.ajax({
            
            url: baseurl + 'employee/add',
            data: new FormData(document.querySelector('#addEmployee')),
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'POST',
            beforeSend(xhr) {


            },
            success: function (result) {
                console.log(result );
                if(result.error==1){
                   
                  
                    if(result.error_message.name){
                      $('#error-name').html(result.error_message.name);
                    }else{
                        $('#error-name').html('');
                    }

                    if(result.error_message.email){
                      $('#error-email').html(result.error_message.email);
                    }else{
                        $('#error-email').html('');
                    }

                    if(result.error_message.address){
                      $('#error-address').html(result.error_message.address);
                    }else{
                        $('#error-address').html('');
                    }

                    if(result.error_message.phone){
                      $('#error-phone').html(result.error_message.phone);
                    }else{
                        $('#error-phone').html('');
                    }

                    $('#message').html(result.error_message.message);
                  
                   
                }else{
                   
                    $('#error-name').html('');
                    $('#error-email').html('');
                    $('#error-address').html('');
                    $('#error-email').html('');


                    $('#message').html(result.success_message.message);
                 
                }

              
             //   $('#success-message').html(result.message);

            }
        });
    });


    $('.edit').on('click', function (e) { 
      e.preventDefault();
      var id = $(this).attr('editid');  
        $.ajax({
            
            url: baseurl + 'employee/edit/'+id,
            data: new FormData(document.querySelector('#editEmployee')),
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'GET',
            beforeSend(xhr) {


            },
            success: function (result) {
               
                if(result){                  
                   $('#edit_name').val(result.name);
                   $('#edit_email').val(result.email);
                   $('#edit_address').val(result.address);
                   $('#edit_phone').val(result.phone);
                   $('#edit_emp_id').val(result.emp_id);
                }
             
            }
        });
    });

    $('#updateEmp').on('click', function (e) { 
       e.preventDefault();        
        $.ajax({
            
            url: baseurl+'employee/update',
            data: new FormData(document.querySelector('#editEmployee')),
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'POST',
            beforeSend(xhr) {


            },
            success: function (result) {               
                if(result){                  
                    location.reload();
                }
             
            }
        });
    });


    $('.delete').on('click', function (e) { 
      e.preventDefault();   
      var id = $(this).attr('deleteid');  
      $('#delete_id').val(id);
    });


	var ids = [];
	var id_str = '';
	
	$('#all-delete').on('click', function (e) { 
      e.preventDefault();
	  ids = [];
	  document.querySelectorAll('.selected').forEach(function(value,index){
		if(value.checked){
			ids.push(value.value);

		}
     })
	 id_str = "[" + ids.toString() +"]";
	 $('#multiple_delete').val(id_str);
	
    });
	
	

    $('#deleteEmp').on('click', function (e) { 
       e.preventDefault();        
        $.ajax({
            
            url: baseurl+'employee/delete',
            data: new FormData(document.querySelector('#deleteEmployee')),
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'POST',
            beforeSend(xhr) {


            },
            success: function (result) {
                console.log(result.name);
                if(result){                  
                    location.reload();
                }
             
            }
        });
    });


	$('#multiDeleteEmp').on('click', function (e) { 		
       e.preventDefault();        
        $.ajax({
            
            url: baseurl+'employee/multidelete',
            data: {ids: ids},
            dataType: 'json',          
            type: 'POST',
            beforeSend(xhr) {


            },
            success: function (result) {               
                if(result){                  
                    location.reload();
                }
             
            }
        });
    });
</script>