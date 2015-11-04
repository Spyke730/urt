{{ content() }}

<div class="row">
    
    {{ form('method':'post', 'autocomplete':'off') }}

        <div class="col-md-10 col-md-offset-1" align="right">
            <hr>
            <ul class="pager">
                <li class="previous">
                    {{ link_to("users", "&larr; Regresar") }}
                </li>
                <li class="pull-right">
                    {{ submit_button("Guardar", "class": "btn btn-default btn-success") }}
                </li>
            </ul>
            <hr>
        </div>

        <div class="col-md-10 col-md-offset-1" class="page-header">
            <h2><strong>Editar usuario</strong></h2>
            
            <div class="panel panel-primary">
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"> <a href="#A" role="tab" data-toggle="tab">Principal</a></li>
                        <li>                <a href="#B" role="tab" data-toggle="tab">Ingresos al sistema</a></li>
                        <li>                <a href="#C" role="tab" data-toggle="tab">Cambios de contraseña</a></li>
                        <li>                <a href="#D" role="tab" data-toggle="tab">Restablecimientos de contraseña</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="A">

                                {{ form.render("id") }}

                                <div>

                                    <div class="clearfix">
                                        <label for="name">Nombre</label>
                                        {{ form.render("name") }}
                                    </div>

                                    <div class="clearfix">
                                        <label for="name">Seudónimo</label>
                                        {{ form.render("username") }}
                                    </div>

                                    <div class="clearfix">
                                        <label for="profilesId">Perfil</label>
                                        {{ form.render("profilesId") }}
                                    </div>

                                    <div class="clearfix">
                                        <label for="suspended">Suspendido?</label>
                                        {{ form.render("suspended") }}
                                    </div>

                                </div>

                                <div>

                                    <div class="clearfix">
                                        <label for="email">Correo electrónico</label>
                                        {{ form.render("email") }}
                                    </div>

                                    <div class="clearfix">
                                        <label for="banned">Baneado?</label>
                                        {{ form.render("banned") }}
                                    </div>

                                    <div class="clearfix">
                                        <label for="active">Activo?</label>
                                        {{ form.render("active") }}
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="B">
                                <p>
                                    <table class="table table-bordered table-striped" align="center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>IP Address</th>
                                                <th>User Agent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for login in user.successLogins %}
                                            <tr>
                                                <td>{{ login.id }}</td>
                                                <td>{{ login.ipAddress }}</td>
                                                <td>{{ login.userAgent }}</td>
                                            </tr>
                                        {% else %}
                                            <tr><td colspan="3" align="center">El usuario no ha ingresado al sistema</td></tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </p>
                            </div>

                            <div class="tab-pane fade" id="C">
                                <p>
                                    <table class="table table-bordered table-striped" align="center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>IP Address</th>
                                                <th>User Agent</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for change in user.passwordChanges %}
                                            <tr>
                                                <td>{{ change.id }}</td>
                                                <td>{{ change.ipAddress }}</td>
                                                <td>{{ change.userAgent }}</td>
                                                <td>{{ date("Y-m-d H:i:s", change.createdAt) }}</td>
                                            </tr>
                                        {% else %}
                                            <tr><td colspan="3" align="center">El usuario no ha cambiado de contraseña</td></tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </p>
                            </div>

                            <div class="tab-pane fade" id="D">
                                <p>
                                    <table class="table table-bordered table-striped" align="center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Date</th>
                                                <th>Reset?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for reset in user.resetPasswords %}
                                            <tr>
                                                <th>{{ reset.id }}</th>
                                                <th>{{ date("Y-m-d H:i:s", reset.createdAt) }}
                                                <th>{{ reset.reset == 'Y' ? 'Yes' : 'No' }}
                                            </tr>
                                        {% else %}
                                            <tr><td colspan="3" align="center">El usuario no ha requerido restablecer la contraseña</td></tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
