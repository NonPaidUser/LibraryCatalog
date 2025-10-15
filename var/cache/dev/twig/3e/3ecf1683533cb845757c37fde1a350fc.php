<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_58bd0abf5f510f72c026785b55d9a322 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <style>
            ";
        // line 8
        yield "            ";
        // line 9
        yield "
            .success-attribute {
                color: #ff00f7ff;
            }
            ";
        // line 21
        yield "            .table-tables{
                border: 1px solid #030303ff;
                width: 95%;
            }
            .main-bar-tables{
                border-left: 1px solid white;
                border-top: none;
                ";
        // line 29
        yield "                width: 86%;
                margin-left: 14%;
                ";
        // line 32
        yield "            }
            .back-to-catalog{
                margin-top: 10px;
            }
            .main-home {
                ";
        // line 38
        yield "                ";
        // line 39
        yield "                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-left: 1%;
            }
            .main-choices {
                ";
        // line 48
        yield "                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-top: 200px;
                gap: 10px;
                margin-left: 1%;
            }
            body {
                position: relative;
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                width: 100vw;
                ";
        // line 65
        yield "                overflow-y: auto;
                overflow-x: hidden;
                ";
        // line 69
        yield "                background-color: #124a7bff;
                color: #fefafaff;
            }

            h1 {
                margin-bottom: 10px;
                color: #fefafaff;
            }

            table {
                margin: 20px auto;
                border-collapse: collapse;
                width: 80%;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            }

            th {
                background-color: #c904afff;
                color: white;
                padding: 12px;
                font-size: 16px;
            }

            td {
                padding: 12px;
                border-bottom: 1px solid #ddd;
                color: #121111ff;
            }

            tr:hover {
                background-color: #f1f1f1;
            }

            a {
                display: inline-block;
                padding: 8px 16px;
                border-radius: 6px;
                text-decoration: none;
                background-color: #ff00f7ff;
                color: white;
                font-weight: bold;
                transition: background 0.3s;
            }

            a:hover {
                background-color: #a806a8ff;
            }

            p {
                font-size: 18px;
                color: #090909ff;
            }

            .logo {
                margin: 0 auto 20px auto;
                width: 150px;
                height: auto;
                border-radius: 50%;
                background-color: white;
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
                transition: ease 0.2s;
            }

            .logo:hover {
                content: url('";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_Black_Original.png"), "html", null, true);
        yield "');
                background-color: #f0f0f0;
                ";
        // line 139
        yield "            }

            .content-box {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 30px;
                border-radius: 12px;
                display: inline-block;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                margin-top: 10%;
            }

            button {
                display: inline-block;
                ";
        // line 153
        yield "                border-radius: 6px;
                text-decoration: none;
                background-color: #ff00f7ff;
                color: white;
                font-weight: bold;
                transition: background 0.3s;
            }

            .return_borrow1 {
                color: white;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        ";
        // line 168
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 169
        yield "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Library System";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  255 => 168,  238 => 5,  228 => 169,  226 => 168,  209 => 153,  194 => 139,  189 => 136,  120 => 69,  116 => 65,  98 => 48,  88 => 39,  86 => 38,  79 => 32,  75 => 29,  66 => 21,  60 => 9,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Library System{% endblock %}</title>
        <style>
            {# FORM STYLE EDITORS #}
            {# FORM STYLE EDITORS #}

            .success-attribute {
                color: #ff00f7ff;
            }
            {# .scroll-box {
                width: 200px;
                height: 300px;
                border: 2px solid #333;
                overflow-y: auto; /* ✅ Allow internal scroll */
                padding: 10px;
                background-color: #f9f9f9;
            } #}
            .table-tables{
                border: 1px solid #030303ff;
                width: 95%;
            }
            .main-bar-tables{
                border-left: 1px solid white;
                border-top: none;
                {# box-sizing: border-box; #}
                width: 86%;
                margin-left: 14%;
                {# background-color: rgba(53, 8, 116, 0.1); #}
            }
            .back-to-catalog{
                margin-top: 10px;
            }
            .main-home {
                {# border: 1px solid #ddd; #}
                {# box-sizing: border-box; #}
                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-left: 1%;
            }
            .main-choices {
                {# box-sizing: border-box; #}
                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-top: 200px;
                gap: 10px;
                margin-left: 1%;
            }
            body {
                position: relative;
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                width: 100vw;
                {# height: 100vh; #}
                overflow-y: auto;
                overflow-x: hidden;
                {# background: url('{{ asset(\"images/Star_moving.gif\") }}') no-repeat center fixed;
                background-size: cover; #}
                background-color: #124a7bff;
                color: #fefafaff;
            }

            h1 {
                margin-bottom: 10px;
                color: #fefafaff;
            }

            table {
                margin: 20px auto;
                border-collapse: collapse;
                width: 80%;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            }

            th {
                background-color: #c904afff;
                color: white;
                padding: 12px;
                font-size: 16px;
            }

            td {
                padding: 12px;
                border-bottom: 1px solid #ddd;
                color: #121111ff;
            }

            tr:hover {
                background-color: #f1f1f1;
            }

            a {
                display: inline-block;
                padding: 8px 16px;
                border-radius: 6px;
                text-decoration: none;
                background-color: #ff00f7ff;
                color: white;
                font-weight: bold;
                transition: background 0.3s;
            }

            a:hover {
                background-color: #a806a8ff;
            }

            p {
                font-size: 18px;
                color: #090909ff;
            }

            .logo {
                margin: 0 auto 20px auto;
                width: 150px;
                height: auto;
                border-radius: 50%;
                background-color: white;
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
                transition: ease 0.2s;
            }

            .logo:hover {
                content: url('{{ asset(\"images/Jovan_Eye_of_Ender_Black_Original.png\") }}');
                background-color: #f0f0f0;
                {# transform: scale(1.30); #}
            }

            .content-box {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 30px;
                border-radius: 12px;
                display: inline-block;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                margin-top: 10%;
            }

            button {
                display: inline-block;
                {# padding: 8px 16px; #}
                border-radius: 6px;
                text-decoration: none;
                background-color: #ff00f7ff;
                color: white;
                font-weight: bold;
                transition: background 0.3s;
            }

            .return_borrow1 {
                color: white;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\base.html.twig");
    }
}
