{include 'header.tpl' }
{if $logeado}
    <div class="contenido">
    <h2>Usted ya esta registrado con una cuenta</h2>
    <a class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" href="logout">Cerrar Sesion</a>
    </div>
{else}
<div class="contenido">
    <form method="POST" action="registro">
    <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="text" required class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" required class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" required class="form-control" id="email" name="email">
</div>
    <button type="submit" class="btn btn-primary mt-3">Registrarme</button>
    </form>
    <h2> {$uservalido}</h2>
</div>
{/if}
{include 'footer.tpl' }