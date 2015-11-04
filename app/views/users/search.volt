{{ content() }}

<div class="row">

  <div class="col-md-10 col-md-offset-1" align="right">
    <hr>
    <ul class="pager">
      <li class="previous">
          {{ link_to("users/index", "&larr; Regresar") }}
      </li>
      <li class="next">
          {{ link_to("users/create", '<span class="glyphicon glyphicon-plus-sign"></span> Crear usuario', "class": "btn btn-default") }}
      </li>
    </ul>
    <hr>
  </div>

  <div class="col-md-10 col-md-offset-1" class="page-header">
    <h2><strong>Usuarios</strong></h2>
        <div class="table-responsive">
            {% for user in page.items %}
                {% if loop.first %}
                <table class="table table-condensed table-hover" align="center">
                    <thead>
                        <tr class="active">
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Seudónimo</th>
                            <th>E-mail</th>
                            <th>Perfil</th>
                            <th colspan="3">Activo?</th>
                        </tr>
                    </thead>
                {% endif %}
                    <tbody>
                        <tr>
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.username }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.profile.name }}</td>
                            <td>{{ user.active == 'Y' ? 'Si' : 'No' }}</td>
                            <td>
                                {{ link_to("users/edit/" ~ user.id, '<span class="glyphicon glyphicon-pencil"></span> Editar', "class":"btn btn-default btn-success btn-sm") }}
                            </td>
                            <td>
                                {{ link_to("users/delete/" ~ user.id, '<span class="glyphicon glyphicon-remove"></span> Eliminar', "class":"btn btn-default btn-danger btn-sm") }}
                            </td>
                        </tr>
                    </tbody>
                {% if loop.last %}
                    <tbody>
                        <tr>
                            <td colspan="8">
                                <div  align="center">
                                    {{ link_to("users/search", '<span class="glyphicon glyphicon-fast-backward"></span> Primera', "class":"btn btn-default") }}
                                    {{ link_to("users/search?page=" ~ page.before, '<span class="glyphicon glyphicon-step-backward"></span> Anterior', "class":"btn btn-default") }}
                                    {{ link_to("users/search?page=" ~ page.next, '<span class="glyphicon glyphicon-step-forward"></span> Siguiente', "class":"btn btn-default") }}
                                    {{ link_to("users/search?page=" ~ page.last, '<span class="glyphicon glyphicon-fast-forward"></span> Última', "class":"btn btn-default") }}
                                    <span class="help-inline"> Página {{ page.current }} de {{ page.total_pages }}</span>
                                </div>
                            </td>
                        </tr>
                    <tbody>
                </table>
                {% endif %}
                {% else %}
                    No hay usuarios registrados
            {% endfor %}
        </div>
  </div>
</div>