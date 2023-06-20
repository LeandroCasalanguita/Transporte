{include 'header.tpl'}
<div class="contenido">
<h1 class="display-3 subrayado">Tabla de viajes</h1>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Tipo de carga</th>
      <th scope="col">Kilometros</th>
      <th scope="col"></th>
      {if $logeado}
      <th scope="col"></th>
      <th scope="col"></th>
      {/if}
    </tr>
  </thead>
    <tbody>
    {foreach from=$travels item=$travel}
      <tr>
        <td>{$travel->type_load}</td>
        <td>{$travel->kilometer}</td>
        <td><a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="detailstravel/{$travel->id_travel}">Detalles</a></td>
        {if $logeado}
          <td><a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="deletetravel/{$travel->id_travel}">Borrar</a></td>
          <td><a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="update/{$travel->id_travel}">Actualizar</a></td>
        {/if}
      </tr>
    {/foreach}
    </tbody>
</table>
{if $logeado}
<a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="newtravel">Agregar</a>
{/if}
</div>
{include 'footer.tpl'}

