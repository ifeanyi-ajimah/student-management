@extends('layout.master')
@section('content')

<div class="panel panel-default">
					<div class="panel panel-heading"> Class Info</div>

					<div class="panel panel-body" id="add-class-info">
	<table class="table table-striped table-bordered table-condensed table-hover table-sm">
	<thead>
		<tr class="success">
			<th>Program</th>
			<th>Level</th>
			<th>Shift</th>
			<th>Time</th>
			<th>Academic Details</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($classes as $c)
		<tr>
			<td>{{$c->program}}</td>
			<td>{{$c->level}}</td>
			<td>{{$c->shift}}</td>
			<td>{{$c->start_time}} - {{$c->end_time}}</td>
			<td>
				<a href="#" data-id="{{ $c->myclass_id}}" style="font-size:13px;">
					COURSE: {{$c->program}} / LEVEL: {{$c->level}} / SHIFT: {{$c->shift}} / TIME: {{$c->start_time}} - {{$c->end_time}} / / BATCH: {{$c->batch}} / 
					GROUP: {{$c->groups}} / START-DATE: {{date("d-M-y",strtotime($c->start_date))}} / END-DATE: {{ date("d-M-y", strtotime($c->end_date))}}
				</a>
			</td>
			<td>
				

				<form action="{{route('myclass.edit', $c->myclass_id)}}" method="GET"  style="display:inline" >  <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-pencil"></i></button> </form>


        <form action="{{route('myclass.destroy', $c->myclass_id)}}" method="POST" style="display:inline">  <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i></button> </form>


			</td>
		</tr>
		@empty
		{{"No Data"}}
		@endforelse
	</tbody>
</table>
          </div>

          <div class="panel panel-footer" id="add-class-info">
          		 <a href="{{route('manageCourses')}}" class="btn btn-info btn-sm " role="button">Manage Courses</a>
            
          </div>

@endsection