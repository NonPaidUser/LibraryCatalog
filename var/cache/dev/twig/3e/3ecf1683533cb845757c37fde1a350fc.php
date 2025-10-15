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
        yield "            .form-container {
                background-color: rgba(255, 255, 255, 0.95);
                color: #121111ff;
                max-width: 500px;
                margin: 30px auto;
                padding: 25px 30px;
                border-radius: 12px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                text-align: left;
            }

            /* Labels */
            .form-container label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #1a1a1a;
            }

            /* Inputs, selects, textareas */
            .form-container input[type=\"text\"],
            .form-container input[type=\"number\"],
            .form-container input[type=\"date\"],
            .form-container select,
            .form-container textarea {
                width: 100%;
                padding: 10px 12px;
                border: 1.5px solid #ccc;
                border-radius: 8px;
                font-size: 15px;
                margin-bottom: 15px;
                transition: all 0.2s ease;
                box-sizing: border-box;
            }

            /* Focus effect */
            .form-container input:focus,
            .form-container select:focus,
            .form-container textarea:focus {
                outline: none;
                border-color: #ff00f7ff;
                box-shadow: 0 0 5px rgba(255, 0, 247, 0.4);
            }

            /* Button */
            .form-container .btn {
                display: inline-block;
                background-color: #ff00f7ff;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 8px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            .form-container .btn:hover {
                background-color: #a806a8ff;
            }

            /* Optional: Section title */
            .form-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

            ";
        // line 140
        yield "
            .success-attribute {
                color: #ff00f7ff;
            }
            ";
        // line 152
        yield "            .table-tables{
                border: 1px solid;
                width: 95%;
            }
            .main-bar-tables{
                ";
        // line 159
        yield "                ";
        // line 160
        yield "                width: 86%;
                margin-left: 14%;
                ";
        // line 163
        yield "            }
            ";
        // line 167
        yield "            .main-home {
                ";
        // line 169
        yield "                ";
        // line 170
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
        // line 182
        yield "                position: fixed;              /* stays still when scrolling */
                text-align: center;
                display: flex;
                flex-direction: column;
                width: 12%;
                margin-top: 200px;
                gap: 10px;
                margin-left: 1%;
                ";
        // line 193
        yield "            }
            body {
                position: relative;
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                width: 100vw;
                height: auto;
                overflow-y: auto;
                overflow-x: hidden;
                ";
        // line 206
        yield "                background-color: #0d375cff;
                color: #fefafaff;
            }

            h1 {
                margin-bottom: 10px;
                color: #fefafaff;
            }

            table {
                border-collapse: collapse;
                margin: 20px auto;
                width: 80%;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 6px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            }

            th {
                background-color: #c904afff;
                border: 1px solid #0e0d0dff;
                color: white;
                padding: 12px;
                font-size: 16px;
            }

            td {
                padding: 12px;
                border: 1px solid #0e0d0dff;
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
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_Black_Original.png"), "html", null, true);
        yield "');
                background-color: #f0f0f0;
                ";
        // line 277
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
        // line 291
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
            ";
        // line 315
        yield "        </script>
    </head>
    <body>
        ";
        // line 318
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 319
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

    // line 318
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
        return array (  344 => 318,  327 => 5,  317 => 319,  315 => 318,  310 => 315,  294 => 291,  279 => 277,  274 => 274,  204 => 206,  191 => 193,  181 => 182,  168 => 170,  166 => 169,  163 => 167,  160 => 163,  156 => 160,  154 => 159,  147 => 152,  141 => 140,  71 => 71,  68 => 69,  60 => 62,  58 => 8,  53 => 5,  47 => 1,);
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
            .form-container {
                background-color: rgba(255, 255, 255, 0.95);
                color: #121111ff;
                max-width: 500px;
                margin: 30px auto;
                padding: 25px 30px;
                border-radius: 12px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                text-align: left;
            }

            /* Labels */
            .form-container label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #1a1a1a;
            }

            /* Inputs, selects, textareas */
            .form-container input[type=\"text\"],
            .form-container input[type=\"number\"],
            .form-container input[type=\"date\"],
            .form-container select,
            .form-container textarea {
                width: 100%;
                padding: 10px 12px;
                border: 1.5px solid #ccc;
                border-radius: 8px;
                font-size: 15px;
                margin-bottom: 15px;
                transition: all 0.2s ease;
                box-sizing: border-box;
            }

            /* Focus effect */
            .form-container input:focus,
            .form-container select:focus,
            .form-container textarea:focus {
                outline: none;
                border-color: #ff00f7ff;
                box-shadow: 0 0 5px rgba(255, 0, 247, 0.4);
            }

            /* Button */
            .form-container .btn {
                display: inline-block;
                background-color: #ff00f7ff;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 8px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            .form-container .btn:hover {
                background-color: #a806a8ff;
            }

            /* Optional: Section title */
            .form-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

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
                height: auto;
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
                border-collapse: collapse;
                margin: 20px auto;
                width: 80%;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 6px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            }

            th {
                background-color: #c904afff;
                border: 1px solid #0e0d0dff;
                color: white;
                padding: 12px;
                font-size: 16px;
            }

            td {
                padding: 12px;
                border: 1px solid #0e0d0dff;
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
            {# function toggleDropdown(id) {
                const content = document.getElementById(id);
                const allDropdowns = document.querySelectorAll('.dropdown-content');

                allDropdowns.forEach(d => {
                    if (d !== content) d.style.display = 'none'; // close others
                });

                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            } #}
        </script>
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\base.html.twig");
    }
}
