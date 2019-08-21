                
Registrar Persona y Vehiculo

<div>
    <button type="button" onclick="window.location='/A765'" class="btn btn-outline-primary float-right">Volver</button>
</div>

@csrf

<form method="POST" action="{{ route('vehiculo.store') }}">
@csrf

<div>

    <label for="cedula" class="col-md-4 col-form-label text-md-right">Cédula</label>

    <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus placeholder="Ingrese la cédula" min="0">
                            
</div>

<div>
    
    <label for="nombre_completo" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        
    <input id="nombre_completo" type="text" class="form-control @error('nombre_completo') is-invalid @enderror" name="nombre_completo" value="{{ old('nombre_completo') }}" required autocomplete="nombre_completo" autofocus placeholder="Ingrese el nombre completo">
                            
</div>

<div>
    
    <label for="placa" class="col-md-4 col-form-label text-md-right">Placa</label>

    <input id="placa" type="text" class="form-control @error('placa') is-invalid @enderror" name="placa" value="{{ old('placa') }}" required autocomplete="placa" autofocus placeholder="Ingrese la placa">
                        
</div>

<div>
    
    <label for="nombre_marca" class="col-md-4 col-form-label text-md-right">Marca</label>
    
    <select name="nombre_marca" required id="nombre_marca" class="form-control ">
    @foreach($todas_marcas as $marca_row)
        <option value="{{ $marca_row -> nombre_marca }}">{{ $marca_row -> nombre_marca }}</option>
    @endforeach
    </select>

     @error('nombre_marca')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
                        
</div>

<button type="submit" class="btn btn-primary">Registrar</button>
                        