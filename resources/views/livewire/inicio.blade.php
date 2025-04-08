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
        <div class="d-grid gap-2" style="margin-bottom: 1%;margin-top: 1%">
            <a class="btn btn-secondary" href="{{route('ver-ordenes')}}">Ver Ordenes</a>
        </div>
        <div style="text-align: center;margin-bottom:1%">
            AGREGAR PRODUCTO A LA ORDEN
            <form wire:submit="agregar_orden">

                <select wire:model="product_id">
                    <option value="">SELECCIONE UN PRODUCTO</option>
                    @foreach ($productos_elegibles as $producto)
                        <option value="{{$producto->productos->id}}">{{$producto->productos->name}}</option>
                    @endforeach

                </select>
                <input type="number" placeholder="Cantidad" wire:model="quantity">
                <button type="submit" class="btn btn-success"> AGREGAR</button>
            </form>

        </div>
        <div style="text-align: center;margin-bottom:1%">
        @error('product_id')
            <p style="color: red">{{$message}}</p>
        @enderror
        @error('quantity')
            <p style="color: red">{{$message}}</p>
        @enderror
    </div>
        <div class="d-grid gap-2" style="margin-bottom: 3%; text-align: center;">
            <p>ORDEN ACTUAL</p>
            <table class="table table-striped">
                <tr>
                    <td>
                        NOMBRE
                    </td>
                    <td>
                        CANTIDAD
                    </td>
                    <td>
                        ACCION
                    </td>
                </tr>
                @foreach ($orden_actual_productos as $producto)
                    <tr>
                        <td>
                            {{$producto->productos->name}}
                        </td>
                        <td>
                            {{$producto->quantity}}
                        </td>
                        <td>
                            <button class="btn btn-danger" wire:click="eliminar({{$producto->id}})">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
               
            </table>
            <div>
                @if ($orden_actual_productos->isEmpty())

                @else
                <a class="btn btn-success" wire:click="ordenar">ORDENAR</a>
                @endif
            </div>
            
        </div>

        <div style="text-align: center">PRODUCTOS</div>

        <div class="card-group">
            @foreach ($productos_disponibles as $producto)
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5 class="card-title">{{$producto->productos->name}}</h5>
                        <p class="card-title">stock:{{$producto->productos->stock}}</p>
                    </div>
                </div>
            @endforeach
        </div>

    @endcan
    <br>
    <br>
</div>