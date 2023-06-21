{include 'header.tpl'}
<div class="contenido">
<h1 class="display-3 subrayado">Tabla de viajes</h1>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Tipo de carga</th>
      <th scope="col">Kilometros</th>
      <th scope="col">Combustible</th>
      <th scope="col">Camion</th>
      <th scope="col">Conductor</th>
    </tr>
  </thead>
    <tbody>
        {foreach from=$travel item=$item}
          <tr>
            <td>{$item->type_load}</td>
            <td>{$item->kilometer}</td>
            <td>{$item->amount_fuel}L</td>
            <td>{$item->truck}</td>
            <td>{$item->driver}</td>
          </tr>
        {/foreach}
    </tbody> 
</table>
<a class="btn btn-primary mt-3" href="travel">Volver</a>
</div>
{include 'footer.tpl'}
