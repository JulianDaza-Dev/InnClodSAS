<div>
    <form wire:submit="crear">
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="shadow p-4 bg-white rounded" style="width: 100%; max-width: 500px;">

                <div class="mb-3">
                    <label class="form-label">Nombre Producto</label>
                    <input type="text" class="form-control" wire:model="name">
                    @error('name')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" class="form-control" wire:model="stock">
                    @error('stock')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div style="text-align: center">
                    <button class="btn btn-success" type="submit">CREAR</button>
                </div>
                <div style="text-align: center; margin-top: 1%;">
                    <a class="btn btn-danger" href="{{route('inicio')}}">VOLVER</a>
                </div>
            </div>
        </div>
    </form>
    
    
</div>