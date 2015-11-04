{{ content() }}

<form method="post" autocomplete="off" action="{{ url("users/changePassword") }}">

    <div class="center scaffold">

        <h2>Cambiar contraseña</h2>

        <div class="clearfix">
            <label for="password">Contraseña</label>
            {{ form.render("password") }}
        </div>

        <div class="clearfix">
            <label for="confirmPassword">Confirmar contraseña</label>
            {{ form.render("confirmPassword") }}
        </div>

        <div class="clearfix">
            {{ submit_button("Change Password", "class": "btn btn-primary") }}
        </div>

    </div>

</form>