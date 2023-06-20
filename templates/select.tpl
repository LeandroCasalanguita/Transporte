<div class="form-group">
    <label>Tipo de carga</label>
    <select class="form-select" aria-label="Default select example" name="id_load" id="id_load" required>
    <option value="" selected>Selecciona tipo de carga</option>
    {foreach from=$type_load item=$load}
        <option value="{$load->id_load}">{$load->type_load}</option>
    {/foreach}
    </select>
</div>