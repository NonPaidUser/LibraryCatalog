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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

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
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">🏠 Go to Home Page</a>

    <h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</h1>

    <div style=\"margin-bottom: 15px;\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_new");
        yield "\">➕ Add New Book</a>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_book_index");
        yield "\">📚 Manage Books</a>
    </div>

    <form method=\"get\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books");
        yield "\" style=\"margin-bottom: 20px;\">
        <label for=\"category\">Filter by Category:</label>
        <select name=\"category\" id=\"category\" onchange=\"this.form.submit()\">
            <option value=\"\">-- All --</option>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Fiction", "Non-Fiction", "Science Fiction", "Fantasy", "Mystery", "Romance", "Horror", "Biography", "History", "Poetry"]);
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 23
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "\" ";
            if (($context["genre"] == (isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 23, $this->source); })()))) {
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
        // line 25
        yield "        </select>
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
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 41
            yield "            <tr>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishedAt", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishedAt", [], "any", false, false, false, 44), "Y"), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 45), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 46
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 46), "html", null, true)) : ("-"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_borrow", ["title" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">Borrow</a> |
                    <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_return", ["title" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">Return</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 52
        if (!$context['_iterated']) {
            // line 53
            yield "            <tr>
                <td colspan=\"6\">No books found.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </tbody>
    </table>
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
        return array (  202 => 57,  193 => 53,  191 => 52,  183 => 49,  179 => 48,  174 => 46,  170 => 45,  166 => 44,  162 => 43,  158 => 42,  155 => 41,  150 => 40,  133 => 25,  118 => 23,  114 => 19,  107 => 15,  101 => 12,  97 => 11,  91 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
{% endblock %}
", "book/index.html.twig", "C:\\Jovan Components\\JOVAN PROJECTS\\Symfony_Projects\\Library_Catalog_Borrowing_System\\templates\\book\\index.html.twig");
    }
}
