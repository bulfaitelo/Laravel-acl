@extends('painel.templates.template')

@section('content')




<div class="container">
	<h1 class="title">
		Roles: <b>{{ $permission->name }}</b>
	</h1>

	<table class="table table-hover">
		<tr>
			<th>Name </th>
			<th>Label</th>
			<th width="100px">Ações</th>
		</tr>

		@forelse($roles as $role)

			<tr>
				<td>{{ $role->name }}</td>
				<td>{{ $role->label }}</td>
				<td>
					<a href="{{ url("painel/roles/$role->id/delete") }}" class="delete">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>	
		@empty
		<tr>
			<td colspan="90" > Nenhum Resultado</td>
		</tr>
		@endforelse	
	</table>
</div>



@endsection