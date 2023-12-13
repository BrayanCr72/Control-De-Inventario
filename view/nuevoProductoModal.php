<!-- Modal -->
<div class="modal fade" id="nuevoRegistroProducto" tabindex="-1" aria-labelledby="nuevoRegistroProductoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoRegistroProductoLabel">Agregar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../business/registroProductoAction.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label for="codigo" class="form-label">Código:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" required>
                    </div>
                    <div class="mb-3">

                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <div class="mb-3">
                        <label for="unidad" class="form-label">Unidad:</label>
                        <select class="form-select" id="unidad" name="unidad" required>
                            <option value="">Selecionar...</option>
                            <option value="Und">Und</option>
                            <option value="Rollo">Rollo</option>
                            <option value="Par">Par</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <label for="precio" class="form-label">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="mb-3">

                        <label for="consumoPorContenedor" class="form-label">Consumo por contenedor:</label>
                        <input type="text" class="form-control" id="consumoPorContenedor" name="consumoPorContenedor"
                            required>
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="create" id="create"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>
           
        </div>
    </div>
</div>