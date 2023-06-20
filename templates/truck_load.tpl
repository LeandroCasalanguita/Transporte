{include 'header.tpl'}
<div class="contenido">
<h1 class="display-3 subrayado">Tabla de cargas</h1>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Tipo de carga</th>
      <th scope="col">Valor por tonelada o bulto</th>
      <th scope="col">Cantidad de viajes</th>
      {if $logeado}
      <th scope="col"></th>
      <th scope="col"></th>
      {/if}
    </tr>
  </thead>
    <tbody>
    {foreach from=$loads item=$load}
        <tr>
          <td>{$load->type_load}</td>
          <td>{$load->value}</td>
          <td>{$load->cantidad}</td>
          {if $logeado}
          <td><a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="delete_truck_load/{$load->id_load}">Borrar</a></td>
          <td><a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="update_truck_load/{$load->id_load}">Actualizar</a></td>
          {/if}
        </tr>
    </tbody>
    {/foreach}
</table>
{if $logeado}
<h4>Recuerde que si elimina algun tipo de carga, todos los viajes que tengan ese tipo de carga seran eliminados.</h4>
<a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="newload">Agregar una nueva carga</a>
{/if}
</div>
{include 'footer.tpl'}