<div>
    <div class="d-grid gap-2" style="margin-bottom: 3%; text-align: center;">
        <p>ORDENES</p>
        <table class="table table-striped">
            <tr>
                <td>
                    PRODUCTO
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
</div>
