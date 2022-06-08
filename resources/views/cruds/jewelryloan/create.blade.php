@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Jewelry Loan</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
	
			<div class="panel-body">

				<div class="row" style="margin-left: 5px"> 
				<a href="{{ url('/jewelryloan/create') }}"> <button class="btn-primary btn-sm">Add</button></a>
				</div>

				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Cellphone Number</th>
							<th>Birthdate</th>
							<th>ID</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($jewelryloan as $jewelryloan)
							<td class="center"> {{ $jewelryloan->firstname }} </td>
							<td class="center"> {{ $jewelryloan->lastname }} </td>
							<td class="center"> {{ $jewelryloan->address }} </td>
							<td class="center"> {{ $jewelryloan->cpnum }} </td>
							<td class="center"> {{ $jewelryloan->birthdate }} </td>
							<td class="center">{{ ($jewelryloan->valid_id) }}</td>
							<td class="center"><a href="{{ url('/inventory'."/". $jewelryloan->id."/edit") }}"><button class="btn-primary">Edit</button></a></td>
							<td class="center"> <form method="POST" action="{{ url('/inventory' . '/' . $jewelryloan->id) }}" accept-charset="UTF-8" style="display:inline">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<button type="submit" class="btn btn-danger btn-sm" title="Delete Stock" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></td>
						</tr>

						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
	</div>
</div>
</div>

@endsection