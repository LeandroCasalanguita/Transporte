{include 'header.tpl'}
<div class="contenido">
{foreach from=$load item=$item}
    <form method="POST" action="upd/{$item->id_load}">
    <div class="form-group">    
    <label>Typo de carga</label>
    <input type="text" name="type_load" id="type_load" required class="form-control" placeholder={$item->type_load}>
    <label>Valor de la carga </label>
    <input type="number" name="value" id="value" required class="form-control" placeholder={$item->value}>
    <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>
{/foreach}
</div>
{include 'footer.tpl'}