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

/* add_book/_form.html.twig */
class __TwigTemplate_88d3f97c63cd2fecdeaa1a283b786a36 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_book/_form.html.twig"));

        // line 5
        yield "
<style>
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
</style>

<div class=\"form-container\">
    <h2>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 77, $this->source); })()), "Save Book")) : ("Save Book")), "html", null, true);
        yield "</h2>

    ";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_start');
        yield "
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'widget');
        yield "
        <button class=\"btn\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 81, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    ";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "add_book/_form.html.twig";
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
        return array (  136 => 82,  132 => 81,  128 => 80,  124 => 79,  119 => 77,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} #}

<style>
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
</style>

<div class=\"form-container\">
    <h2>{{ button_label|default('Save Book') }}</h2>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <button class=\"btn\">{{ button_label|default('Save') }}</button>
    {{ form_end(form) }}
</div>
", "add_book/_form.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\add_book\\_form.html.twig");
    }
}
