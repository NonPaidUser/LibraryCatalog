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
            body {
                font-family: Harrington, cursive;
                text-align: center;
                margin: 0;
                padding: 40px;
                min-height: 100vh;
                background: url('";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Star_moving.gif"), "html", null, true);
        yield "') no-repeat center fixed;
                background-size: cover;
                color: #fefafaff;
            }

            h1 {
                margin-bottom: 20px;
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
                display: block;
                margin: 0 auto 20px auto;
                width: 150px;
                height: auto;
                border-radius: 50%;
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
                transition: ease 0.2s;
            }

            .logo:hover {
                content: url('";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_Black_Original.png"), "html", null, true);
        yield "');
                background-color: #f0f0f0;
                transform: scale(1.30);
            }

            .content-box {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 30px;
                border-radius: 12px;
                display: inline-block;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            }

            button {
                display: inline-block;
                ";
        // line 97
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
        // line 112
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 113
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

    // line 112
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
        return array (  199 => 112,  182 => 5,  172 => 113,  170 => 112,  153 => 97,  135 => 81,  64 => 13,  53 => 5,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Library System{% endblock %}</title>
        <style>
            body {
                font-family: Harrington, cursive;
                text-align: center;
                margin: 0;
                padding: 40px;
                min-height: 100vh;
                background: url('{{ asset(\"images/Star_moving.gif\") }}') no-repeat center fixed;
                background-size: cover;
                color: #fefafaff;
            }

            h1 {
                margin-bottom: 20px;
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
                display: block;
                margin: 0 auto 20px auto;
                width: 150px;
                height: auto;
                border-radius: 50%;
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
                transition: ease 0.2s;
            }

            .logo:hover {
                content: url('{{ asset(\"images/Jovan_Eye_of_Ender_Black_Original.png\") }}');
                background-color: #f0f0f0;
                transform: scale(1.30);
            }

            .content-box {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 30px;
                border-radius: 12px;
                display: inline-block;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
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
