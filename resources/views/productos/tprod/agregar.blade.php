@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar producto') }}</div>

                <div class="card-body">
                    @if (session('status'))

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




<form method="post" action="{{ url('tproductos') }}" enctype="multipart/form-data">
@csrf
  <div class="form-row">
  
    <div class="form-group ">
      <label for="inputPassword4">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Foto</label>
    <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto">
  </div>
  

  
  <button style="margin-top: 20px"  type="submit" class="btn btn-primary">Guardar</button>
</form>

                    


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
