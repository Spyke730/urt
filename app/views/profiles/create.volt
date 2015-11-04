
<form method="post" autocomplete="off">

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("profiles", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ submit_button("Save", "class": "btn btn-success") }}
    </li>
</ul>

{{ content() }}

<div class="center scaffold">
    <h2>Crear un perfil</h2>

    <div class="clearfix">
        <label for="name">Nombre</label>
        {{ form.render("name") }}
    </div>

    <div class="clearfix">
        <label for="active">Activo?</label>
        {{ form.render("active") }}
    </div>

</div>

</form>