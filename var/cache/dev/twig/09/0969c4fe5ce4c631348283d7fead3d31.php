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

/* user/edit.html.twig */
class __TwigTemplate_b89bb6307cfa44927ac3638677002f93 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Edit User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <div class=\"main-home\">
        <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_for_Books.png"), "html", null, true);
        yield "\" alt=\"Library Logo\" class=\"logo\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Go to Home Page</a>
    </div>

    <div class=\"main-choices\">
        <h1>Main Processes:</h1>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_new");
        yield "\">Add New Book</a>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_index");
        yield "\">Manage Books</a>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "\">Find User (For Experiment)</a>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Create a User (For Experiment)</a>
        <h1>Processes:</h1>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "\">Back to search user</a>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Back to user list</a>   
    </div>

<div class=\"main-bar-tables\">
    <h1>Edit User</h1>

    <div>
        ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_form.html.twig", ["button_label" => "Update"]);
        yield "
        ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
    </div> 
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
        return "user/edit.html.twig";
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
        return array (  136 => 28,  132 => 27,  122 => 20,  118 => 19,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}

    <div class=\"main-home\">
        <img src=\"{{ asset('images/Jovan_Eye_of_Ender_for_Books.png') }}\" alt=\"Library Logo\" class=\"logo\">
        <a href=\"{{ path('app_home') }}\">Go to Home Page</a>
    </div>

    <div class=\"main-choices\">
        <h1>Main Processes:</h1>
        <a href=\"{{ path('app_add_book_new') }}\">Add New Book</a>
        <a href=\"{{ path('app_add_book_index') }}\">Manage Books</a>
        <a href=\"{{ path('app_user_search') }}\">Find User (For Experiment)</a>
        <a href=\"{{ path('app_user_index') }}\">Create a User (For Experiment)</a>
        <h1>Processes:</h1>
        <a href=\"{{ path('app_user_search') }}\">Back to search user</a>
        <a href=\"{{ path('app_user_index') }}\">Back to user list</a>   
    </div>

<div class=\"main-bar-tables\">
    <h1>Edit User</h1>

    <div>
        {{ include('user/_form.html.twig', {'button_label': 'Update'}) }}
        {{ include('user/_delete_form.html.twig') }}
    </div> 
</div>
{% endblock %}
", "user/edit.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\user\\edit.html.twig");
    }
}
