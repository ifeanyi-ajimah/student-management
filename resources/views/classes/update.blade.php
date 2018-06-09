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
			<form class="form-horizontal" action="{{route('myclass.update', $classes->myclass_id)}}" method="post" enctype="multipart/form-data">
        {{ method_field('PUT') }}
              {{csrf_field()}}
				<div class="panel panel-body" style="border-bottom: 1px solid #ccc; ">
					<div class="form-group">



						{{---------this group of code has no use --------}}
						
							
		
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


