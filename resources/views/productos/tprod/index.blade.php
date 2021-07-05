@extends('./layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }} 

                </div>

<a  href="{{ Route('tproductos.create') }} " class=" btn btn-primary">Agregar nuevos productos</a>
                <div class="card-body">
                    @if (session('status'))

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cantidad</th>
      <th scope="col">Nombre</th>
      <th scope="col">Lote</th>
      <th scope="col">Precio</th>
       <th scope="col">Fecha de vencimiento</th>
      <th scope="col">Foto</th>
     

    </tr>
  </thead>
  <tbody>

    @foreach($proys as $producto)
    <tr>
      <td>{{ $producto->cant}}</td>
      <td>{{ $producto->nombre}}</td>
      <td>{{ $producto->n_lote}}</td>
      <td>{{ $producto->precio}}</td>
      <td>{{ $producto->fecha_vencimieto}}</td>
      <td>
<img width="100px" height="100px" src="{{ asset('storage'). '/' .$producto->foto}}">
        </td>

   @endforeach
  </tbody>
</table>


                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
