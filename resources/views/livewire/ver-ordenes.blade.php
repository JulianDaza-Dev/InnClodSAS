<div>
    <div class="d-grid gap-2" style="margin-bottom: 3%; text-align: center;">
        <p>ORDENES</p>
        <table class="table table-striped">
            <tr>
                <td>
                    ID ORDEN
                </td>
                <td>
                    Fecha
                </td>
            </tr>
            @foreach ($ordenes as $orden)
                <tr>
                    <td>
                        {{$orden->id}}
                    </td>
                    <td>
                        {{$orden->created_at}}
                    </td>
                </tr>
            @endforeach
           
        </table>
        <div style="text-align: center">
            <div style="text-align: center; margin-top: 1%;">
                <a class="btn btn-danger" href="{{route('inicio')}}">VOLVER</a>
            </div>
        </div>
</div>
