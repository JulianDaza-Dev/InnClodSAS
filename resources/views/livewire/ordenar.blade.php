<div>
    <div class="d-grid gap-2" style="margin-bottom: 3%; text-align: center;">
        <p>CONFIRMACION</p>
        <table class="table table-striped">
            <tr>
                <td>
                    NOMBRE
                </td>
                <td>
                    CANTIDAD
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
                </tr>
            @endforeach
           
        </table>
        @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        <div>
            <a class="btn btn-success" wire:click="confirmar">CONFIRMAR</a>
        </div>
        <div>
            <a class="btn btn-danger" href="{{route('inicio')}}">VOLVER</a>
        </div>
        
    </div>

</div>
