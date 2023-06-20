{include 'header.tpl'}
<div class="contenido">
{foreach from=$travels item=$travel}
    <form method="POST" action="mod/{$travel->id_travel}">
    <div class="form-group">    
    {include 'select.tpl'}
    <label>Kilometros</label>
    <input type="number" name="kilometer" id="kilometer" required class="form-control" placeholder={$travel->kilometer}>
    <label>Combustible </label>
    <input type="number" name="amount_fuel" id="amount_fuel" required class="form-control" placeholder={$travel->amount_fuel}>
    <label>Camion</label>
    <input type="text" name="truck" id="truck" required class="form-control" placeholder={$travel->truck}>
    <label>Conductor</label>
    <input type="text" name="driver" id="driver" required class="form-control" placeholder={$travel->driver}>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>
{/foreach}
</div>
{include 'footer.tpl'}