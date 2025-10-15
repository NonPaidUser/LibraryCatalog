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

/* add_book/index.html.twig */
class __TwigTemplate_7aa848361309b884ba7b490b8e61f3a5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_book/index.html.twig"));

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

        yield "Book index";
        
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
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_new");
        yield "\">Create new</a>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\">Go to Borrowing Page</a>

        <form method=\"get\" action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_index");
        yield "\" style=\"margin-bottom: 20px;\">
            <label for=\"category\">Filter by Category:</label>
            <select name=\"category\" id=\"category\" onchange=\"this.form.submit()\">
                <option value=\"\">-- All --</option>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Fiction", "Non-Fiction", "Science Fiction", "Fantasy", "Mystery", "Romance", "Horror", "Biography", "History", "Poetry"]);
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 30
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "\" ";
            if (($context["genre"] == (isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 30, $this->source); })()))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "            </select>
        </form>
    </div>

<div class=\"main-bar-tables\">
    <h1>Book index</h1>

    <table class=\"table-tables\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Description</th>
                <th>Category</th>
                <th>Available</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 53
            yield "            <tr>
                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                <td>";
            // line 56
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishedAt", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishedAt", [], "any", false, false, false, 56), "Y"), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 57
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 57), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 58
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 58), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 59
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["book"], "availableCount", [], "any", false, false, false, 59))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "availableCount", [], "any", false, false, false, 59), "html", null, true)) : ("N/A"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\">show</a> |
                    <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 65
        if (!$context['_iterated']) {
            // line 66
            yield "            <tr>
                <td colspan=\"6\">No books found.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return "add_book/index.html.twig";
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
        return array (  234 => 70,  225 => 66,  223 => 65,  215 => 62,  211 => 61,  206 => 59,  202 => 58,  198 => 57,  194 => 56,  190 => 55,  186 => 54,  183 => 53,  178 => 52,  156 => 32,  141 => 30,  137 => 26,  130 => 22,  125 => 20,  121 => 19,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  92 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book index{% endblock %}

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
        <a href=\"{{ path('app_add_book_new') }}\">Create new</a>
        <a href=\"{{ path('app_books') }}\">Go to Borrowing Page</a>

        <form method=\"get\" action=\"{{ path('app_add_book_index') }}\" style=\"margin-bottom: 20px;\">
            <label for=\"category\">Filter by Category:</label>
            <select name=\"category\" id=\"category\" onchange=\"this.form.submit()\">
                <option value=\"\">-- All --</option>
                {% for genre in [
                    'Fiction', 'Non-Fiction', 'Science Fiction', 'Fantasy', 'Mystery',
                    'Romance', 'Horror', 'Biography', 'History', 'Poetry'
                ] %}
                    <option value=\"{{ genre }}\" {% if genre == selected_category %}selected{% endif %}>{{ genre }}</option>
                {% endfor %}
            </select>
        </form>
    </div>

<div class=\"main-bar-tables\">
    <h1>Book index</h1>

    <table class=\"table-tables\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Description</th>
                <th>Category</th>
                <th>Available</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        {% for book in books %}
            <tr>
                <td>{{ book.title }}</td>
                <td>{{ book.author }}</td>
                <td>{{ book.publishedAt ? book.publishedAt|date('Y') : '-' }}</td>
                <td>{{ book.description ?: '-' }}</td>
                <td>{{ book.category ?: '-' }}</td>
                <td>{{ book.availableCount is not null ? book.availableCount : 'N/A' }}</td>
                <td>
                    <a href=\"{{ path('app_add_book_show', {'id': book.id}) }}\">show</a> |
                    <a href=\"{{ path('app_add_book_edit', {'id': book.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No books found.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}
", "add_book/index.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\add_book\\index.html.twig");
    }
}
