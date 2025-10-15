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

/* user/borrowed.html.twig */
class __TwigTemplate_6763a4e7ec064943456190e58e20596c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/borrowed.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "    <div class=\"main-home\">
        <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_for_Books.png"), "html", null, true);
        yield "\" alt=\"Library Logo\" class=\"logo\">
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Go to Home Page</a>
    </div>

    <div class=\"main-choices\">
        <h1>Main Processes:</h1>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_new");
        yield "\">Add New Book</a>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_index");
        yield "\">Manage Books</a>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "\">Find User (For Experiment)</a>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Create a User (For Experiment)</a>
        <h1>Processes:</h1>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "\">Search another user</a>
        <a class=\"back-to-catalog\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\">Back to catalog</a>
    </div>

<div class=\"main-bar-tables\">
    <h1>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield " — Borrowed Books</h1>

    <p style=\"color:white\">Borrowed count: ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "borrowedCount", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>

    <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Borrowed At</th>
                <th>Returned At</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["borrowedRecords"]) || array_key_exists("borrowedRecords", $context) ? $context["borrowedRecords"] : (function () { throw new RuntimeError('Variable "borrowedRecords" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 37
            yield "            <tr>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "book", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "borrowedAt", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "borrowedAt", [], "any", false, false, false, 39), "Y-m-d H:i"), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 40
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "returnedAt", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "returnedAt", [], "any", false, false, false, 40), "Y-m-d H:i"), "html", null, true)) : ("Not returned"));
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "            <tr><td colspan=\"3\">No borrowed books found for this user.</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </tbody>
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
        return "user/borrowed.html.twig";
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
        return array (  179 => 45,  172 => 43,  170 => 42,  163 => 40,  159 => 39,  155 => 38,  152 => 37,  147 => 36,  133 => 25,  128 => 23,  121 => 19,  117 => 18,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  92 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

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
        <a href=\"{{ path('app_user_search') }}\">Search another user</a>
        <a class=\"back-to-catalog\" href=\"{{ path('app_books') }}\">Back to catalog</a>
    </div>

<div class=\"main-bar-tables\">
    <h1>{{ user.name }} — Borrowed Books</h1>

    <p style=\"color:white\">Borrowed count: {{ user.borrowedCount }}</p>

    <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Borrowed At</th>
                <th>Returned At</th>
            </tr>
        </thead>
        <tbody>
        {% for rec in borrowedRecords %}
            <tr>
                <td>{{ rec.book.title }}</td>
                <td>{{ rec.borrowedAt ? rec.borrowedAt|date('Y-m-d H:i') : '-' }}</td>
                <td>{{ rec.returnedAt ? rec.returnedAt|date('Y-m-d H:i') : 'Not returned' }}</td>
            </tr>
        {% else %}
            <tr><td colspan=\"3\">No borrowed books found for this user.</td></tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "user/borrowed.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\user\\borrowed.html.twig");
    }
}
