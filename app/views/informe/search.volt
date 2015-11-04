{{ content() }}

<div class="row">

  <div class="col-md-10 col-md-offset-1" align="right">
    <hr>
    <ul class="pager">
        <li class="previous pull-left">
            {{ link_to("informe/index", "&larr; Regresar") }}
        </li>
    </ul>
    <hr>
  </div>

  <div class="col-md-8 col-md-offset-2" class="page-header">

  <hr>
  {% if prycnd == 1 %}
    <h2><strong>{{ prycnd ~ "&nbsp;&nbsp;" }} registro encontrado</strong></h2>
  {% else %}
    <h2><strong>{{ prycnd ~ "&nbsp;&nbsp;" }} registros encontrados</strong></h2>
  {% endif %}
  <hr>

  {% for user in page.items %}

    {% if loop.first %}

        <br> <table class="table table-condensed table-hover" align="center">

        <thead>
          {% if user.registro == 'Y' %}
            <tr>
              <td align="center"><strong>Correo</strong></td>
              <td align="center"><strong>Registró el ...</strong></td>
            </tr>
          {% else %}
            <tr>
              <td align="center"><strong>Correo</strong></td>
              <td align="center"><strong>Último aviso</strong></td>
              <td align="center"><strong>Total avisos</strong></td>
              <td align="center"><strong>Recordar?</strong></td>
            </tr>
          {% endif %}
        </thead>

    {% endif %}

        <tbody>
          {% if user.registro == 'Y' %}
            <tr>
              <td align="center">{{ user.email }}</td>
              <td align="center">{{ user.registro_el }}</td>
            </tr>
          {% else %}
            <tr>
              <td align="center">{{ user.email }}</td>
              <td align="center">{{ user.recordo_el }}</td>
              <td align="center">{{ user.vecesRecordo }}</td>
              <td align="center">{{ link_to("informe/recordar/" ~ user.email ~ "/" ~ page.current, '<span class="glyphicon glyphicon-pencil"></span> Recordar ...', "class":"btn btn-default btn-success btn-sm") }}</td>
            </tr>
          {% endif %}
        </tbody>

    {% if loop.last %}

        <tbody>
          <tr>
            <td colspan="10">
              <div  align="center">
                {{ link_to("informe/search", '<span class="glyphicon glyphicon-fast-backward"></span> Primera', "class":"btn btn-default") }}
                {{ link_to("informe/search?page=" ~ page.before, '<span class="glyphicon glyphicon-step-backward"></span> Anterior', "class":"btn btn-default") }}
                {{ link_to("informe/search?page=" ~ page.next, '<span class="glyphicon glyphicon-step-forward"></span> Siguiente', "class":"btn btn-default") }}
                {{ link_to("informe/search?page=" ~ page.last, '<span class="glyphicon glyphicon-fast-forward"></span> Última', "class":"btn btn-default") }}
                <span class="help-inline"> Página {{ page.current }} de {{ page.total_pages }} páginas </span>
              </div>
            </td>
          </tr>
        <tbody>

      </table>

    {% endif %}

    {% else %}
        No hay registros en la plataforma
  {% endfor %}

  </div>
</div>
