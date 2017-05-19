{% extends "user/index.php" %}

{% block title %}Listado de Usuarios{% endblock %}

{% block content %}
  <h2>Lista de Usuarios</h2>

  <ul>
    {% for user in users %}
      <li><a href="{{ path_for('userProfile', { 'id': user.id_usuario }) }}">{{ user.nombre|e }}</a></li>
    {% else %}
        <li><em>No hay usuarios registrados</em></li>
    {% endfor %}
  </ul>



{% endblock %}
