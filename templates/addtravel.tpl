{include 'header.tpl'}
<div class="contenido">
<form method="POST" action="addtravel">
{include 'select.tpl'}
<div class="form-group">
    <label>Kilometros</label>
    <input type="number" required class="form-control" id="kilometer" name="kilometer">
</div>
<div class="form-group">
    <label>Combustible</label>
    <input type="number" required class="form-control" id="amount_fuel" name="amount_fuel">
</div>
<div class="form-group">
    <label>Camion</label>
    <input type="text" required class="form-control" id="truck" name="truck">
</div>
<div class="form-group">
    <label>Conductor</label>
    <input type="text" required class="form-control" id="driver" name="driver">
</div>
<button type="submit" class="btn btn-primary mt-3">Agregar</button>
</form>
</div>
{include 'footer.tpl'}