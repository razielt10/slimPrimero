<!doctype html>
<html lang="es">
<head>
{% block head %}
  <meta charset="utf-8" />
  <title>{% block title %}{% endblock %}</title>
<!--  <link rel="apple-touch-icon" sizes="76x76" href="../../../app/templates/user/material-theme/assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../../../app/templates/user/material-theme/assets/img/favicon.png" />
-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->
<!--  <link href="../../../app/templates/user/material-theme/assets/css/bootstrap.min.css" rel="stylesheet" />
-->
  <!--  Material Dashboard CSS    -->
<!--  <link href="../../../app/templates/user/material-theme/assets/css/material-dashboard.css" rel="stylesheet"/>
-->
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../styles.css" />
  <link rel="stylesheet" href="../../app/templates/user/styles.css" />



{% endblock %}
</head>
  <body>
    <div class="wrapper">

  	    <div class="sidebar" data-color="purple" data-image="
        ../../../app/templates/user/material-theme/assets/img/sidebar-1.jpg">
          <div class="logo">
    				<a href="http://www.creative-tim.com" class="simple-text">
    					Creative Tim
    				</a>
    			</div>

          <div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="dashboard.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
  	            </ul>
  	    	</div>
  	    </div>
        <div>Url->{{ asset_url }}</div>
		    <div class="content">{% block content %}{% endblock %}</div>
       <div class="footer">
           {% block footer %}
               &copy; Copyright 2017 by <a href="http://jcgljuancarlos.com/">JCGL JuanCarlos</a>.
           {% endblock %}
       </div>
     </div>
  </body>
</html>
