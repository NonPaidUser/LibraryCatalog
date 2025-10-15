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

/* book/index.html.twig */
class __TwigTemplate_27bc7e2171231262032ab9c34bce9230 extends Template
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
        // line 61
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 61);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 63, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 66
        yield "    <div class=\"main-home\">
        <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jovan_Eye_of_Ender_for_Books.png"), "html", null, true);
        yield "\" alt=\"Library Logo\" class=\"logo\">
        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Go to Home Page</a>
    </div>

    <div class=\"main-choices\">
        <h1>Main Processes:</h1>
        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_new");
        yield "\">Add New Book</a>
        <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_index");
        yield "\">Manage Books</a>
        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "\">Find User (For Experiment)</a>
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Create a User (For Experiment)</a>
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\">Borrowing Page</a>
        <h1>Processes:</h1>

        <form method=\"get\" action=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\" style=\"margin-bottom: 20px;\">
            <label for=\"category\">Filter by Category:</label>
            <select name=\"category\" id=\"category\" onchange=\"this.form.submit()\">
                <option value=\"\">-- All --</option>
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Fiction", "Non-Fiction", "Science Fiction", "Fantasy", "Mystery", "Romance", "Horror", "Biography", "History", "Poetry"]);
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 88
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "\" ";
            if (($context["genre"] == (isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 88, $this->source); })()))) {
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
        // line 90
        yield "            </select>
        </form>
    </div>

<div class=\"main-bar-tables\">
    <h1>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 95, $this->source); })()), "html", null, true);
        yield "</h1>

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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 110, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 111
            yield "            <tr>
                <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 113), "html", null, true);
            yield "</td>
                <td>";
            // line 114
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishedAt", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishedAt", [], "any", false, false, false, 114), "Y"), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 115
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 115), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 116
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 116)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 116), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 117
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["book"], "availableCount", [], "any", false, false, false, 117))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "availableCount", [], "any", false, false, false, 117), "html", null, true)) : ("N/A"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrow", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\">Borrow</a> |
                    <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_return", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\">Return</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "            <tr>
                <td colspan=\"7\">No books found.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
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
        return "book/index.html.twig";
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
        return array (  229 => 128,  220 => 124,  218 => 123,  210 => 120,  206 => 119,  201 => 117,  197 => 116,  193 => 115,  189 => 114,  185 => 113,  181 => 112,  178 => 111,  173 => 110,  155 => 95,  148 => 90,  133 => 88,  129 => 84,  122 => 80,  116 => 77,  112 => 76,  108 => 75,  104 => 74,  100 => 73,  92 => 68,  88 => 67,  85 => 66,  75 => 65,  58 => 63,  41 => 61,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
    <a href=\"{{ path('app_home') }}\">🏠 Go to Home Page</a>

    <h1>{{ page_title }}</h1>

    <div style=\"margin-bottom: 15px;\">
        <a href=\"{{ path('app_add_book_new') }}\">➕ Add New Book</a>
        <a href=\"{{ path('app_add_book_index') }}\">📚 Manage Books</a>
    </div>

    <form method=\"get\" action=\"{{ path('app_books') }}\" style=\"margin-bottom: 20px;\">
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

    <table border=\"1\" cellspacing=\"0\" cellpadding=\"8\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Description</th>
                <th>Category</th>
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
                <td>
                    <a href=\"{{ path('app_borrow', { title: book.title }) }}\">Borrow</a> |
                    <a href=\"{{ path('app_return', { title: book.title }) }}\">Return</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No books found.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %} #}

{% extends 'base.html.twig' %}

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

        <form method=\"get\" action=\"{{ path('app_books') }}\" style=\"margin-bottom: 20px;\">
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
    <h1>{{ page_title }}</h1>

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
                    <a href=\"{{ path('app_borrow', { id: book.id }) }}\">Borrow</a> |
                    <a href=\"{{ path('app_return', { id: book.id }) }}\">Return</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">No books found.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}

", "book/index.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\book\\index.html.twig");
    }
}
