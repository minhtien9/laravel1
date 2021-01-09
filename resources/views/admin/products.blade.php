@extends('layouts.admin.master')
@section('content')

<div>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Product
				<small>List</small>
			</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<i class="fa fa-dashboard">Home</i>
					</a>
				</li>
				<li class="active">Products</li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<table class="table table-responsive table-bordered table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Type</th>
							<th>Description</th>
							<th>Unit price</th>
							<th>Promotion price</th>
							<th>Image</th>
							<th>Unit</th>
							<th>New</th>
							<th>Created date</th>
							<th>Updated date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $k => $item)
						<tr>
							<td>{{($k + 1)}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->id_type}}</td>
							<td>{{$item->description}}</td>
							<td>{{$item->unit_price}}</td>
							<td>{{$item->promotion_price}}</td>
							<td>{{$item->image}}</td>
							<td>{{$item->unit}}</td>
							<td>{{$item->new}}</td>
							<td>{{$item->created_date}}</td>
							<td>{{$item->updated_date}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>
@endsection