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

/* add_book/show.html.twig */
class __TwigTemplate_32a11dc40efe23a1bb9e93fe18be73bc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_book/show.html.twig"));

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

        yield "Book";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_index");
        yield "\">Back to list</a>
</div>

<div class=\"main-bar-tables\">
    <h1>Book</h1>

    <table class=\"table-tables\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 37, $this->source); })()), "author", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PublishedAt</th>
                <td>";
        // line 41
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 41, $this->source); })()), "publishedAt", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 41, $this->source); })()), "publishedAt", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Available</th>
                <td>";
        // line 49
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 49, $this->source); })()), "availableCount", [], "any", false, false, false, 49))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 49, $this->source); })()), "availableCount", [], "any", false, false, false, 49), "html", null, true)) : ("N/A"));
        yield "</td>
            </tr>
        </tbody>
    </table>
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
        return "add_book/show.html.twig";
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
        return array (  166 => 49,  159 => 45,  152 => 41,  145 => 37,  138 => 33,  131 => 29,  118 => 19,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book{% endblock %}

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
    <a href=\"{{ path('app_add_book_index') }}\">Back to list</a>
</div>

<div class=\"main-bar-tables\">
    <h1>Book</h1>

    <table class=\"table-tables\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ book.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ book.title }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ book.author }}</td>
            </tr>
            <tr>
                <th>PublishedAt</th>
                <td>{{ book.publishedAt ? book.publishedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ book.description }}</td>
            </tr>
            <tr>
                <th>Available</th>
                <td>{{ book.availableCount is not null ? book.availableCount : 'N/A' }}</td>
            </tr>
        </tbody>
    </table>
</div>
    {# {{ include('add_book/_delete_form.html.twig') }} #}
{% endblock %}
", "add_book/show.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\add_book\\show.html.twig");
    }
}
