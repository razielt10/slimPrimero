<?php

/* site/index.php */
class __TwigTemplate_2fc353971e960c72a20785ec97e4a52f61d534b22208ea65c0ee119da827b81c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Slim 3</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <style>
            body {
                margin: 50px 0 0 0;
                padding: 0;
                width: 100%;
                font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
                text-align: center;
                color: #aaa;
                font-size: 18px;
            }

            h1 {
                color: #719e40;
                letter-spacing: -3px;
                font-family: 'Lato', sans-serif;
                font-size: 100px;
                font-weight: 200;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <h1>Mi sitio en Slim</h1>
        <div>a microframework for PHP</div>

        <?php if (isset(\$name)) : ?>
            <h2>Hello <?= htmlspecialchars(\$name); ?>!</h2>
        <?php else: ?>
            <p>Try <a href=\"http://www.slimframework.com\">SlimFramework</a>
        <?php endif; ?>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "site/index.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site/index.php", "/home/digitalhouse/Escritorio/informacion/otrosProyectos/slimPrimero/app/templates/site/index.php");
    }
}
