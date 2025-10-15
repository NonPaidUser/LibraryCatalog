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
        // line 62
        yield "
            .active-link {
                background: #5a5adc;
                color: white !important;
            }

            ";
        // line 69
        yield "
            ";
        // line 71
        yield "            ";
        // line 72
        yield "
            .success-attribute {
                color: #ff00f7ff;
            }
            ";
        // line 84
        yield "            .table-tables{
                border: 1px solid;
                width: 95%;
            }
            .main-bar-tables{
                ";
        // line 91
        yield "                ";
        // line 92
        yield "                width: 86%;
                margin-left: 14%;
                ";
        // line 95
        yield "            }
            ";
        // line 99
        yield "            .main-home {
                ";
        // line 101
        yield "                ";
        // line 102
        yield "                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-left: 1%;
                border-right: 4px solid #ddd;
                height: 100%;
                padding-right: 21px;
            }
            .main-choices {
                ";
        // line 114
        yield "                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-top: 200px;
                gap: 10px;
                margin-left: 1%;
                ";
        // line 125
        yield "            }
            body {
                position: relative;
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                width: 100vw;
                ";
        // line 134
        yield "                overflow-y: auto;
                overflow-x: hidden;
                ";
        // line 138
        yield "                background-color: #0d375cff;
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
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_Black_Original.png"), "html", null, true);
        yield "');
                background-color: #f0f0f0;
                ";
        // line 208
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
        // line 222
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
        <script>
            function toggleDropdown(id) {
                const content = document.getElementById(id);
                const allDropdowns = document.querySelectorAll('.dropdown-content');

                allDropdowns.forEach(d => {
                    if (d !== content) d.style.display = 'none'; // close others
                });

                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            }
        </script>
    </head>
    <body>
        ";
        // line 249
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 250
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

    // line 249
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
        return array (  284 => 249,  267 => 5,  257 => 250,  255 => 249,  226 => 222,  211 => 208,  206 => 205,  137 => 138,  133 => 134,  123 => 125,  113 => 114,  100 => 102,  98 => 101,  95 => 99,  92 => 95,  88 => 92,  86 => 91,  79 => 84,  73 => 72,  71 => 71,  68 => 69,  60 => 62,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Library System{% endblock %}</title>
        <style>
            {# Dropdown Style Sidebar #}
            {# .sidebar {
                display: none;
                background: #f8f8fdff;
                padding: 20%;
                color: white;
                border-radius: 12px;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .dropdown {
                margin-bottom: 15px;
                margin-top: 15px;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .dropdown-header {
                font-size: 18px;
                font-weight: bold;
                cursor: pointer;
                padding: 10px;
                background: #2e2e40;
                border-radius: 8px;
                transition: background 0.3s;
            }

            .dropdown-header:hover {
                background: #3b3b55;
            }

            .dropdown-content {
                display: none;
                flex-direction: column;
                gap: 10px;
                margin-top: 5px;
                padding-left: 15px;
            }

            .dropdown-content a {
                display: block;
                color: #ccc;
                text-decoration: none;
                padding: 8px;
                border-radius: 6px;
                transition: 0.3s;
            }

            .dropdown-content a:hover {
                background: #47476a;
                color: white;
            } #}

            .active-link {
                background: #5a5adc;
                color: white !important;
            }

            {# Dropdown Style Sidebar #}

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
                border: 1px solid;
                width: 95%;
            }
            .main-bar-tables{
                {# border-left: 1px solid white;
                border-top: none; #}
                {# box-sizing: border-box; #}
                width: 86%;
                margin-left: 14%;
                {# background-color: rgba(53, 8, 116, 0.1); #}
            }
            {# .back-to-catalog{
                margin-top: 10px;
            } #}
            .main-home {
                {# border: 1px solid #ddd; #}
                {# box-sizing: border-box; #}
                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-left: 1%;
                border-right: 4px solid #ddd;
                height: 100%;
                padding-right: 21px;
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
                {# border-right: 1px solid #ddd;
                height: 100%;
                padding-right: 21px; #}
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
                background-color: #0d375cff;
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
        <script>
            function toggleDropdown(id) {
                const content = document.getElementById(id);
                const allDropdowns = document.querySelectorAll('.dropdown-content');

                allDropdowns.forEach(d => {
                    if (d !== content) d.style.display = 'none'; // close others
                });

                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            }
        </script>
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\base.html.twig");
    }
}
