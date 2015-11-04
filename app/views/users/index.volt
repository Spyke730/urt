{{ content() }}

<div class="row">
    <div class="col-md-10 col-md-offset-1" align="right">
        <hr>
        {{ link_to("users/create/", '<span class="glyphicon glyphicon-plus-sign"></span> Crear usuarios', "class": "btn btn-default btn-primary") }}
        <hr>
    </div>

    <div class="col-md-6 col-md-offset-3" class="page-header">
        <h2><strong>Buscar usuarios</strong></h2>

        {{ form('users/search', 'method':'post', 'autocomplete':'off') }}
            <div class="panel panel-primary">
                <div class="panel-body">
                    <table class="table table-hover" >
                        <tr>
                            <td align="right"><label>Id :</label></td>
                            <td >{{ form.render("id") }}</td>
                        </tr>
                        <tr>
                            <td align="right"><label>Nombre :</label></td>
                            <td >{{ form.render("name") }}</td>
                        </tr>
                        <tr>
                            <td align="right"><label>Seudónimo :</label></td>
                            <td >{{ form.render("username") }}</td>
                        </tr>
                        <tr>
                            <td align="right"><label>Correo electrónico :</label></td>
                            <td >{{ form.render("email") }}</td>
                        </tr>
                        <tr>
                            <td align="right"><label>Perfil :</label></td>
                            <td >{{ form.render("profilesId") }}</td>
                        </tr>
                    </table>
                    <div align="right">
                        {{ submit_button("Buscar", "class": "btn btn-primary") }}
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>