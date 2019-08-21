


<button type="button" onclick="window.location='/A765'" class="btn btn-outline-primary float-right">Volver</button>

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<h4 style="color:black;">Listar Vehiculos</h4>
		</div>
	</div>
</div>

<p></p>

<div class="card-body">
	<table class="table table-hover">
		<thead class="thead-light">
			<tr>
				<th scope="col" style="text-align:center">Placa</th>
				<th scope="col" style="text-align:center">Marca</th>
				<th scope="col" style="text-align:center"></th>
			</tr>
		</thead>

		<tbody>
			@foreach($lista_vehiculos as $vehiculo)
				<tr>
					@if ($vehiculo -> marca == "Mazda")
						<th style="text-align:center"> {{ $vehiculo -> placa }} <span style="color:green"> Los de Mazda son los mejores </span>
						</th> 
					@elseif ($vehiculo -> marca == "Toyota")
						<th scope="col" style="text-align:center">
							<div style="background:red">
								<div style="color:black">
									{{ $vehiculo -> placa }}
								</div>                           
							</div>                                
                        </th>
					@else
						<td style="text-align:center">
							{{ $vehiculo -> placa }}
						</td>
					@endif
					<th style="text-align:center">
						{{ $vehiculo -> marca }}
					</th>
				
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

