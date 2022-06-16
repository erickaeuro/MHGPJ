@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Auction</h1>
	</div>
</div>

 <!-- Topbar Search -->

 <div class="row">
	<div class="col-1"></div>
	<div class="col-12 col-lg">
		<input type="text" placeholder="Search" class="form-control">
	</div>

	<div class="col-12 col-sm-2">
		<a href="{{ url('/inventory/create') }}"><button class="form-control">Add</button></a>            </div>
    </div>
<br>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			
			<div class="panel-body">

				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Item Type</th>
							<th>Karat Gold</th>
							<th>Kind of Stone</th>
							<th>Weight</th>
							<th>Tag Price</th>
							<th>Amount</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr style="{{ ($product->item_type) ? 'background-color: #f4433636' : '' }}" >
							<td class="center"> {{ $product->item_type }} </td>
							<td class="center"> {{ $product->karat_gold }} </td>
							<td class="center"> {{ $product->kind_of_stone }} </td>
							<td class="center"> {{ $product->weight }} </td>
							<td class="center"> {{ $product->tag_price }} </td>
							<td class="center">{{ ($product->amount) }}</td>
							<td class="center"><a href="{{ url('/inventory'."/". $product->id."/edit") }}"><button class="btn-primary">Edit</button></a></td>
							<td class="center"> <form method="POST" action="{{ url('/inventory' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
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