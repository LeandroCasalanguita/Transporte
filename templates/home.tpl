{include 'header.tpl'}
<div class="contenido">
<h1 class="display-4 subrayado">Transportes Necochea</h1>
<p>Ver los viajes por el tipo de carga</p>
    <div class=" correte">
    {foreach from=$truck_load item=$load}
        <a class="links botones_filtrar"href="home/{$load->id_load}">{$load->type_load}</a>
    {/foreach}
    </div>
    <main class="contenedor_main">
        <div class="columna_1">
            {if !empty({$travels})}
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">kilometros</th>
                            <th scope="col">Combustible</th>
                            <th scope="col">Camion</th>
                            <th scope="col">Conductor</th>
                        </tr>
                    </thead>
                    <tbody>
                    {foreach from=$travels item=$travel}
                        <tr>
                            <td>{$travel->kilometer}</td>
                            <td>{$travel->amount_fuel}</td>
                            <td>{$travel->truck}</td>
                            <td>{$travel->driver}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            {/if}
        </div>
        {if $logeado}
        <div class="columna_3">
        <a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="logout">Cerrar Sesion</a>
        </div>
        {/if}
    </main>
</div>
{include 'footer.tpl'}