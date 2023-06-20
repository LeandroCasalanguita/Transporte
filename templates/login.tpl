{include 'header.tpl'}
{if $logeado}
    <div class="contenido">
    <h2>Usted ya esta logeado</h2>
    <a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="logout">Cerrar Sesion</a>
    </div>
{else}
<div class="contenido">
    <form method="POST" action="validate">
    <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="text" required class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" required class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
</div>
<h2>{$fail}</h2>
{/if}
{include 'footer.tpl'}