@extends('layout.master')
@section('content')
<style type="text/css">
.student-photo{
	height:160px;
	padding-left: 1px;
	padding-right: 1px;
	border:1px solid #ccc;
	background: #eee;
	width: 140px;
	margin: 0 auto;
}

.photo>input[type='file']{
	display:none;
}

.photo{
	width:30px;
	height:30px;
	border-radius: 100%;
}
.student-id{
	background-repeat: repeat-x;
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background: #eee;
	border-bottom: 1px solid #ccc;
}

.btn-browse{
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background: #eee;
	border: none;
	border-top:1px solid #ccc;
}

fieldset{
	margin-top: 5px;
}
 fieldset legend{
 	display: block;
 	width: 100%;
 	padding: 0;
 	font-size: 15px;
 	line-height: inherit;
 	color:#797979;
 	border: 0;
 	border-bottom: 1px solid #e5e5e5;
 }

</style>

{{-----------------------}}
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i>Student Registration</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#">Home</a></li>
			<li><i class="icon_document_alt"></i>Student</li>
			<li><i class="fa fa-file-text-o"></i>Create Student</li>
		</ol>
	</div>
</div>


{{-----------------------}}
<div class="row">
</div>

{{-----------------------}}

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapsel" style="text-decoration:none;">Choose Academic</a>
			<a href="#" class="pull-right"><i class="fa fa-plus"></i></a>
		</div>
		<div id="collapsel" class="panel-collapse collapse in">
			<div class="panel-body academic-detail"><p></p></div>

		</div>
	</div>
</div>
{{---------------------}}

<form action="#" method="POST" id="frm-create-student">
			<input type="hidden" name="myclass_id" id="myclass_id">

<div class="panel panel-default">
	<div class="panel-heading">
		<b><i class= "fa fa-apple"></i> Student Information</b>
	</div>

		
	<div class="panel-body" style="padding-bottom:4px;">
			<div class="row">
				<div class="col-lg-9 col-sm-9">

	{{------First Name-------}}


	
		<div class="col-md-4">
			<div class="form-group">
				<label for="firstname"> First Name</label>
				<input type="text" name="firstname" id="firstname" class="form-control" required>
			</div>
		</div>
{{---------Middle Name----------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="firstname"> Middle Name</label>
				<input type="text" name="firstname" id="firstname" class="form-control" required>
			</div>
		</div>


{{---------Gender----------}}
		<div class="col-md-4">
			<div class="form-group">
				<fieldset>
					<legend>Sex</legend>
					<table style="width:100%; margin-top:-14px;">
					<tr style="border-bottom:1px solid #ccc;">
						<td>
							<label>
								<input type="radio" name="sex" id="sex" value="0" required>
								Male
							</label>
						</td>
						<td>
							<label>
								<input type="radio" name="sex" id="sex" value="1" required>
								Female
							</label>
						</td>
					</tr>
					</table>
				</fieldset>
			</div>
		</div>

{{-----------DOB-------------}}
	<div class="col-md-4">
		<div class="form-group">
			<label for="dob"> Birth Date</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-calender studentdob"></i>
				</div>
				<input type="date" name="dob" id="dob" class="form-control" required>
			</div>
		</div>
	</div>


	{{-----------Card Number-----------}}
	  <div class="col-md-4">
	  	<div class="form-group">
	  		<label for="card_number"> Card Number</label>
	  		<input type="text" name="card_number" id="card_number" class="form-control" placeholder="Optional">
	  	</div>
	  </div>

{{-----------Address------------}}
	<div class="col-md-4">
		<div class="form-group">
			<fieldset>
				<legend>Status</legend>
				<table style="width:100px; margin-top:-14px;">
					<tr style="border-bottom:1px solid #ccc;">
						<td>
							<label>
								<input type="radio" name="status" value="1" required checked> Single
							</label>
							<td>
								<label>
									<input type="radio" name="status" value="0" required> Married
								</label>
							</td>
						</td>
					</tr>
				</table>
			</fieldset>
		</div>
	</div>

		{{-----------Nationality------------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="nationality"> Nationality</label>
				<input type="text" name="nationality" id="nationality" class="form-control">
			</div>
		</div>

		{{-----------Paraent Phone Number------------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="nationality">Parent Phone Number</label>
				<input type="text" name="nationality" id="nationality" class="form-control">
			</div>
		</div>

		{{----------Passport-------------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="nationality">Passport</label>
				<input type="text" name="nationality" id="nationality" class="form-control">
			</div>
		</div>

		{{----------Phone Number-------------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="nationality">Phone Number</label>
				<input type="text" name="nationality" id="nationality" class="form-control">
			</div>
		</div>

		{{----------Email-------------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="nationality">Email</label>
				<input type="email" name="nationality" id="nationality" class="form-control">
			</div>
		</div>

		{{----------Passport-------------}}
		<div class="col-md-4">
			<div class="form-group">
				<label for="nationality">Passport</label>
				<input type="text" name="nationality" id="nationality" class="form-control">
			</div>
		</div>

		{{-----------Photo------------}}
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="form-group form-group-login">
				<table style="margin:0 auto;">
					<thead>
						<tr class="info">
							<td class="student-id">0000</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="photo">
							<div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="image" id="image" aria-describedby="fileHelp">
                            </div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
			{{---------close photo-----------}}

	            </div>
			</div>


          </div>

			</div>

{{------------address------------}}
	<div class="panel panel-default">
		<div class="panel-heading" style="margin-top:-20px;">
			<b><i class="fa fa-apple"></i> Address</b>
		</div>
		<div class="panel-body" style="padding-bottom:10px; margin-top:0;">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="localgovenment">Local Government</label>
						<input type="text" name="localgovt" id="localgovt" class="form-control">
					</div>
				</div>

		<div class="col-md-3">
			<div class="form-group">
				<label for="localgovt">Community</label>
				<input type="text" name="commune" id="commune" class="form-control">
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label for="localgovt">District</label>
				<input type="text" name="commune" id="commune" class="form-control">
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label for="localgovt">Province</label>
				<input type="text" name="commune" id="commune" class="form-control">
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="localgovt">Current Address</label>
				<input type="text" name="commune" id="commune" class="form-control">
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="localgovt">Current Study Address</label>
				<input type="text" name="commune" id="commune" class="form-control">
			</div>
		</div>

			</div>

			<div class="panel-footer">
						<button type="submit" class="btn btn-primary btn-sm "> Save</button> 
            
		   </div>
		</div>

		</form>

	</div>

</div>


@endsection