{include 'header.tpl'}
<div class="contenido">
<form method="POST" action="addload">
<div class="form-group">
</div>
<div class="form-group">
    <label>Tipo de carga</label>
    <input type="text" required class="form-control" id="type_load" name="type_load">
</div>
<div class="form-group">
    <label>Valor de la carga</label>
    <input type="number" required class="form-control" id="value" name="value">
</div>
<button type="submit" class="btn btn-primary mt-3">Agregar</button>
</form>
</div>
{include 'footer.tpl'}