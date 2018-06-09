@extends('layout.master')
@section('content')




<div class="row">

	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-file-text-0"></i>Courses</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#">Home</a></li>
			<li><i class="icon_document_alt"></i>Courses</li>
			<li><i class="fa fa-file-text-o"></i>Manage Courses</li>
		</ol>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<section class="panel panel-default">
			<header class="panel-heading">
				Manage Course
			</header>
			<form class="form-horizontal" action="{{route('myclass.store')}}" method="post" enctype="multipart/form-data">
				<div class="panel panel-body" style="border-bottom: 1px solid #ccc; ">
					<div class="form-group">



						{{---------this group of code has no use --------}}
						
								<!-- this is useless but keeps the code working well . -->
  <div class="modal fade" id="demicModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Academic Headers</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter academic Here.</p>

        <form action="#" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="academic"> Academic</label>
    <input type="text" class="form-control" id="academic" name="academic" aria-describedby="emailHelp" placeholder="Enter Academic">
    <small id="emailHelp" class="form-text text-muted">Name of academic.</small>
  </div>

  <div class="form-group">
    <label for="description"> Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Academic Description">
    <small id="emailHelp" class="form-text text-muted">Academic Description.</small>
  </div>
  
  
    <button  type="submit" class="btn btn-danger">Create Academic</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}

		
		{{-----------no use of the code above-----------------}}



		{{--------------------------------------}}
						<div class="col-sm-3">
							<label for="academic-year">Academic Year</label>
							<div class="input-group">
								<select class="form-control" name="academic_id" id="academic_id" required>
									<option value="">==========</option>
									@foreach($academic as $aca )
									<option value="{{$aca->academic_id}}">{{$aca-> academic_id}}-{{$aca -> academic}}</option>
									@endforeach
								</select>
								<div class="input-group-addon">
									<span ><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#academicModal">+</button></span>
								</div>

					 <!-- Modal -->
  <div class="modal fade" id="academicModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Academic Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter Academic Here.</p>

        <form action="{{route('academic.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="academic"> Academic</label>
    <input type="text" class="form-control" id="academic" name="academic" aria-describedby="emailHelp" placeholder="Enter Academic">
    <small id="emailHelp" class="form-text text-muted">Name of academic</small>
  </div>
  <div class="form-group">
    <label for="academic"> Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Description">
    <small id="emailHelp" class="form-text text-muted">Description.</small>
  </div>
  
  
    <button  type="submit"class="btn btn-primary">Create Academic</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}
	</div>
	</div>



						{{-----------------}}
						<div class="col-sm-3 ">
							<label for="program">Course/ Program</label>
							<div class="input-group">
								<select class="form-control" name="program_id" id="program_id" required>
								 <option value="">==========</option>
									@foreach($program as $p )
									<option value="{{$p->program_id}}">{{$p->program_id}} - {{$p -> program}}</option>
									@endforeach
								</select>
								<div class="input-group-addon">
									<span><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#programModal">+</button></span>
								</div>
								 <!-- Modal -->
  <div class="modal fade" id="programModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Program Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter Program Here.</p>

        <form action="{{route('program.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="program"> Program</label>
    <input type="text" class="form-control" id="program" name="program" aria-describedby="emailHelp" placeholder="Enter Program">
    <small id="emailHelp" class="form-text text-muted">Name of shift.</small>
  </div>
  <div class="form-group">
    <label for="description"> Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Description">
    
  </div>
  
    <button  type="submit"class="btn btn-danger">Create Course/Program</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}



							</div>
						</div>


						{{-----------------}}
						<div class="col-sm-3">
							<label for="level">Student Level</label>
							<div class="input-group">
								<select class="form-control" name="level_id" id="level_id" required>
									<option value=""> ========</option> 
									@forelse($level as $l)
									<option value="{{$l->level_id}}"> {{$l->level_id}} - {{$l ->level}}</option>
									@empty
									<option value="{{$l->level_id}}"> {{"Enter Level"}}</option>
									@endforelse

								</select>
								<div class="input-group-addon">
									<span><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#levelModal">+</button></span>
								</div>

								<!-- Modal -->
  <div class="modal fade" id="levelModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Level Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter level Here.</p>

        <form action="{{route('level.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="level"> Level</label>
    <input type="text" class="form-control" id="level" name="level" aria-describedby="emailHelp" placeholder="Enter level">
    <small id="emailHelp" class="form-text text-muted">Name of Level.</small>
  </div>
  <div class="form-group">
    <label for="description"> Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Description">
    <small id="emailHelp" class="form-text text-muted">Description.</small>
  </div>
  <div class="form-group">
    <label for="description"> Program_id</label>
    <input type="text" class="form-control" id="program_id" name="program_id" aria-describedby="emailHelp" placeholder="Program id">
    <small id="emailHelp" class="form-text text-muted">program id.</small>
  </div>
  
    <button  type="submit" class="btn btn-primary">Create Level</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}

			</div>
			</div>


						{{--------------------------------------}}
						<div class="col-sm-3">
							<label for="shift">Shift</label>
							<div class="input-group">
								<select class="form-control" name="shift_id" id="shift_id" required>
								<option value=""> ========</option>
									@forelse($shift as $sh)
									<option value="{{$sh->shift_id}}"> {{$sh->shift_id}} - {{$sh ->shift}}</option>
									@empty
									<option value="{{$sh->shift_id}}"> {{"Enter Shift"}}</option>
									@endforelse
								</select>
								<div class="input-group-addon">
									<span ><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#shiftModal">+</button></span>
								</div>

					 <!-- Modal -->
  <div class="modal fade" id="shiftModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Shift Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter Shift Here.</p>

        <form action="{{route('shift.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="shift"> Shift</label>
    <input type="text" class="form-control" id="shift" name="shift" aria-describedby="emailHelp" placeholder="Enter Shift">
    <small id="emailHelp" class="form-text text-muted">Name of shift.</small>
  </div>
  
  
    <button  type="submit"class="btn btn-primary">Create shift</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}
	</div>
	</div>

  





						{{-----------------}}
						<div class="col-sm-3">
							<label for="time">Time</label>
							<div class="input-group">
								<select class="form-control" name="time_id" id="time_id" required>
									<option value=""> ========</option>
									@forelse($time as $t)
									<option value="{{$t->time_id}}"> {{$t->time_id}} - {{$t ->start_time}} - {{$t ->end_time}}</option>
									@empty
									<option value="{{$l->time_id}}"> {{"Enter Time for course"}}</option>
									@endforelse
								</select>
								<div class="input-group-addon">
									<span><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#timeModal">+</button></span>
								</div>

<!-- Modal -->
  <div class="modal fade" id="timeModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Course Time Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter Course Time Here.</p>

        <form action="{{route('time.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="start_time"> Course Start Time</label>
    <input type="time" class="form-control" id="start_time" name="start_time" aria-describedby="emailHelp" placeholder="time">
    <small id="emailHelp" class="form-text text-muted">Course Start Time.</small>
  </div>

  <div class="form-group">
    <label for="end_time"> Course End Time</label>
    <input type="time" class="form-control" id="end_time" name="end_time" aria-describedby="emailHelp" placeholder="time">
    <small id="emailHelp" class="form-text text-muted">Course End Time.</small>
  </div>
  
  
    <button  type="submit"class="btn btn-primary">Create Time</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}

							</div>
						</div>


						{{-----------------}}
						<div class="col-sm-3">
							<label for="batch">Batch</label>
							<div class="input-group">
								<select class="form-control" name="batch_id" id="batch_id" required>
								<option value=""> ========</option>
									@forelse($batch as $ba)
									<option value="{{$ba->batch_id}}"> {{$ba->batch_id}} - {{$ba ->batch}}</option>
									@empty
									<option value="{{$ba->batch_id}}"> {{"Enter Batch"}}</option>
									@endforelse
								</select>
								<div class="input-group-addon">
									<span><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#batchModal">+</button></span>
								</div>

						<!-- Modal -->
  <div class="modal fade" id="batchModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Batch Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter Batch Here.</p>

        <form action="{{route('batch.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="batch"> Batch</label>
    <input type="text" class="form-control" id="batch" name="batch" aria-describedby="emailHelp" placeholder="Enter Batch" required>
    <small id="emailHelp" class="form-text text-muted">Batch.</small>
  </div>
  
  
    <button  type="submit"class="btn btn-primary">Create Batch</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}


							</div>
						</div>


						{{-----------------}}
						<div class="col-sm-3">
							<label for="group">Group</label>
							<div class="input-group">
								<select class="form-control" name="group_id" id="group_id" required>
								<option value=""> ========</option> 
									@forelse($group as $grp)
									<option value="{{$grp->group_id}}"> {{$grp->group_id}} - {{$grp ->group}}</option>
									@empty
									<option value="{{$grp->group_id}}"> {{"Enter Group"}}</option>
									@endforelse
								</select>
								<div class="input-group-addon">
									<span><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#groupModal">+</button></span>
								</div>

								<!-- Modal -->
  <div class="modal fade" id="groupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Group Header</h4>
        </div>
        <div class="modal-body">
          <p>Please Enter Group Here.</p>

        <form action="{{route('group.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="group"> Group</label>
    <input type="text" class="form-control" id="group" name="group" aria-describedby="emailHelp" placeholder="Enter Group">
    <small id="emailHelp" class="form-text text-muted">Name of Group.</small>
  </div>
  
  
    <button  type="submit"class="btn btn-primary">Create Group</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>{{----end of modal--------}}


							</div>
						</div>


						{{-----------------}}
						<div class="col-sm-3">
							<label for="startDate">Start Date</label>
							<div class="input-group">
								<input type="date" class="form-control" name="start_date" id="start_date" required>
						
								
							</div>
						</div>



						{{-----------------}}
						<div class="col-sm-4">
							<label for="endDate">End Date</label>
							<div class="input-group">
								<input type="date" class="form-control" name="end_date" id="end_date" required>
						
								
							</div>
						</div>

            {{------------------}}


            {{-----------------}}
            <div class="col-sm-4">
              <div class="form-group">
                <lebel> Active or not ? </lebel><br>
     <label class="radio-inline"> 
     <input type="radio" id="active" value="1" name="active">active</label>
     
    <label class="radio-inline">
    <input type="radio" id="active" value="0" name="active">inactive</label>
</div>
            </div>

						{{-----------------}}
					</div>

					<div class="panel-footer">
						<button type="submit" class="btn btn-primary btn-sm "> Create Course</button> 
            <a href="{{route('showClassInfo')}}" class="btn btn-primary btn-sm pull-right" role="button">View Created Courses</a>
            
					</div>
				</div>
			</div>
			</form>
{{----------------}}
				
				<div class="panel panel-default">
					<div class="panel panel-heading"> Class Info</div>
					<div class="panel panel-body" id="add-class-info">

          </div>
				</div>
		</section>
	</div>
</div>
@endsection


