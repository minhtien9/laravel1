@extends('layouts.admin.master')
@section('content')

<div>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				User
				<small>List</small>
			</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<i class="fa fa-dashboard">Home</i>
					</a>
				</li>
				<li class="active">User</li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<table class="table table-responsive table-bordered table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Remember token</th>
							<th>Created date</th>
							<th>Updated date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $k => $item)
						<tr>
							<td>{{($k + 1)}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->email}}</td>
							<td>{{$item->password}}</td>
							<td>{{$item->phone}}</td>
							<td>{{$item->address}}</td>
							<td>{{$item->remember_token}}</td>
							<td>{{$item->created_at}}</td>
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