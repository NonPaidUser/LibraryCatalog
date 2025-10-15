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

/* user/search.html.twig */
class __TwigTemplate_6e6dee11d84f5771f0f31ec505cdfd96 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/search.html.twig"));

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
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\">Borrowing Page</a>
        <h1>Processes:</h1>
        <a class=\"back-to-catalog\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\">Back to catalog</a>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Back to user list</a>   
        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">Create new</a>
    </div>

<div class=\"main-bar-tables\">
    <h1>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</h1>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 28
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 29
                yield "            <div class=\"flash ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
    <form method=\"post\" action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "\">
        <label for=\"username\">Search user by full complete name to view their borrowed books</label><br>
        <input id=\"username\" name=\"username\" placeholder=\"Exact user name\" required>
        <button type=\"submit\">Find</button>
    </form>

    <table class=\"table-tables\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                ";
        // line 45
        yield "                <th>BorrowedCount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["user1"]) || array_key_exists("user1", $context) ? $context["user1"] : (function () { throw new RuntimeError('Variable "user1" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 51
            yield "            <tr>
                <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                ";
            // line 55
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "borrowedCount", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\">show</a> |
                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return "user/search.html.twig";
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
        return array (  236 => 66,  227 => 62,  225 => 61,  217 => 58,  213 => 57,  207 => 55,  203 => 53,  199 => 52,  196 => 51,  191 => 50,  184 => 45,  170 => 33,  167 => 32,  161 => 31,  150 => 29,  145 => 28,  141 => 27,  136 => 25,  129 => 21,  125 => 20,  121 => 19,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  92 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
        <a href=\"{{ path('app_books') }}\">Borrowing Page</a>
        <h1>Processes:</h1>
        <a class=\"back-to-catalog\" href=\"{{ path('app_books') }}\">Back to catalog</a>
        <a href=\"{{ path('app_user_index') }}\">Back to user list</a>   
        <a href=\"{{ path('app_user_new') }}\">Create new</a>
    </div>

<div class=\"main-bar-tables\">
    <h1>{{ page_title }}</h1>

    {% for label, messages in app.flashes %}
        {% for msg in messages %}
            <div class=\"flash {{ label }}\">{{ msg }}</div>
        {% endfor %}
    {% endfor %}

    <form method=\"post\" action=\"{{ path('app_user_search') }}\">
        <label for=\"username\">Search user by full complete name to view their borrowed books</label><br>
        <input id=\"username\" name=\"username\" placeholder=\"Exact user name\" required>
        <button type=\"submit\">Find</button>
    </form>

    <table class=\"table-tables\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                {# <th>Email</th> #}
                <th>BorrowedCount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in user1 %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                {# <td>{{ user.email }}</td> #}
                <td>{{ user.borrowedCount }}</td>
                <td>
                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a> |
                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}
", "user/search.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\user\\search.html.twig");
    }
}
