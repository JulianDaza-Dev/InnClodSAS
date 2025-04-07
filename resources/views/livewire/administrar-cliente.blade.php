<div>
    <div style="text-align: center">
        <p>
            USUARIO: {{$usuario->name}}
        </p>

        <div>
            <p>
                PRODUCTOS VISIBLES
            </p>
            <table class="table table-dark table-striped-columns">

                <tr>
                    <td>
                        PRODUCTO
                    </td>
                    <td>
                        ACCION
                    </td>
                </tr>
                @foreach ($productos_visibles as $producto)
                    <tr>
                        <td>
                            {{$producto->productos->name}}
                        </td>
                        <td>
                            <button class="btn btn-danger" wire:click="eliminar({{$producto->id}})">ELIMINAR</button>
                        </td>
                    </tr>
                @endforeach

                {{--@endfor--}}
            </table>
        </div>

        <div style="margin-top: 3%">
            <p>
                PRODUCTOS OCULTOS
            </p>
            <table class="table table-dark table-striped-columns">

                <tr>
                    <td>
                        PRODUCTO
                    </td>
                    <td>
                        ACCION
                    </td>
                </tr>
                @foreach ($productos_ocultos as $producto)
                    <tr>
                        <td>
                            {{$producto->name}}
                        </td>
                        <td>
                            <button class="btn btn-success" wire:click="agregar({{$producto->id}})">AGREGAR</button>
                        </td>
                    </tr>
                @endforeach

                {{--@endfor--}}
            </table>
            <div style="text-align: center; margin-top: 1%;">
                <a class="btn btn-danger" href="{{route('inicio')}}">VOLVER</a>
            </div>
        </div>

    </div>
</div>