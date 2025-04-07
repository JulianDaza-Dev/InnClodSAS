<div>
    @can('administrar-productos')
        <div style="text-align: center">
            <div class="d-grid gap-2" style="margin-bottom: 3%;margin-top: 3%">
                <a class="btn btn-secondary" href="{{route('crear-producto')}}">Crear Productos</a>
              </div>
            <h2>USUARIOS</h2>
            <br>
            <table class="table table-striped">
                <tr>
                    <td>
                        NOMBRE
                    </td>
                    <td>
                        CORREO
                    </td>
                    <td>
                        PRODUCTOS
                    </td>
                </tr>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>
                            {{$usuario->name}}
                        </td>
                        <td>
                            {{$usuario->email}}
                        </td>
                        <td>
                            <button class="btn btn-success" wire:click="administrar({{$usuario->id}})">Administrar</button>
                        </td>
                    </tr>
                @endforeach

            </table>


            <h2>PRODUCTOS</h2>
            <br>
            <table class="table table-striped">
                <tr>
                    <td>
                        NOMBRE
                    </td>
                    <td>
                        STOCK
                    </td>
                </tr>
                @foreach ($productos_all as $producto)
                    <tr>
                        <td>
                            {{$producto->name}}
                        </td>
                        <td>
                            {{$producto->stock}}
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    @endcan
    @can('comprar-productos')
            <div style="text-align: center">PRODUCTOS</div>
    
            <div class="card-group">
                @foreach ($productos_disponibles as $producto)
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5 class="card-title">{{$producto->productos->name}}</h5>
                        <p class="card-title">stock:{{$producto->productos->stock}}</p>
                        <div>
                            <button class="btn btn-success">AGREGAR</button>
                            <button class="btn btn-danger">ELIMINAR</button>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>

    @endcan
</div>