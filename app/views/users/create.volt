
<form method="post" autocomplete="off">

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("users", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ submit_button("Save", "class": "btn btn-success") }}
    </li>
</ul>

{{ content() }}

<div class="center scaffold">
    <h2>Crear usuario</h2>

    <div class="clearfix">
        <label for="name">Nombre</label>
        {{ form.render("name") }}
    </div>

    <div class="clearfix">
        <label for="username">Seudónimo</label>
        {{ form.render("username") }}
    </div>

    <div class="clearfix">
        <label for="email">Correo electrónico</label>
        {{ form.render("email") }}
    </div>

    <div class="clearfix">
        <label for="profilesId">Perfil</label>
        {{ form.render("profilesId") }}
    </div>

</div>

</form>