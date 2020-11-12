<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/profile.html.twig */
class __TwigTemplate_0fa030ef8316c8f6dce80c57548b3c23376b14a362f9712dd9186ad5cf8b5a54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProfileController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-11 p-5\">

    <h2>Utilisateur : </h2>

    <table class=\"table table-bordered table-sm text-center\">
        <thead>
            <tr>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Role</th>
                <th scope=\"col\">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21), " + ")), "html", null, true);
        echo "</td>
                <td> ****** </td>
                <td>
                    <a href=\"#\">

                    </a>
                    -
                    <a href=\"#\">

                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admin");
            echo "\" class=\"btn btn-primary\">Espace Admin</a>
    <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\" class=\"btn btn-success float-right\">Ajouter utilisateur</a>
    ";
        }
        // line 40
        echo "
    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-danger float-right\">Se déconnecter</a>

</div>

";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 46
            echo "<div class=\"col-11 p-5\">

    <h2>Liste des prestations :</h2>

    <table class=\"table table-bordered table-sm text-center\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 61, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 62
                echo "            <tr>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 66), "html", null, true);
                echo " €</td>
                <td>
                    <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations_show", ["id" => twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Voir</a>
                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Editer</a>
                </td>
            </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 73
                echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </tbody>
    </table>

    <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations_new");
            echo "\" class=\"btn btn-success float-right\">Ajouter prestation</a>

</div>
";
        }
        // line 84
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 84,  219 => 80,  214 => 77,  205 => 73,  196 => 69,  192 => 68,  187 => 66,  183 => 65,  179 => 64,  175 => 63,  172 => 62,  167 => 61,  150 => 46,  148 => 45,  141 => 41,  138 => 40,  133 => 38,  128 => 37,  126 => 36,  108 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfileController!{% endblock %}

{% block body %}
<div class=\"col-11 p-5\">

    <h2>Utilisateur : </h2>

    <table class=\"table table-bordered table-sm text-center\">
        <thead>
            <tr>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Role</th>
                <th scope=\"col\">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ app.user.email }}</td>
                <td>{{ app.user.roles|join(' + ')|lower }}</td>
                <td> ****** </td>
                <td>
                    <a href=\"#\">

                    </a>
                    -
                    <a href=\"#\">

                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('Admin') }}\" class=\"btn btn-primary\">Espace Admin</a>
    <a href=\"{{ path('profile') }}\" class=\"btn btn-success float-right\">Ajouter utilisateur</a>
    {% endif %}

    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger float-right\">Se déconnecter</a>

</div>

{% if is_granted('ROLE_PRO') %}
<div class=\"col-11 p-5\">

    <h2>Liste des prestations :</h2>

    <table class=\"table table-bordered table-sm text-center\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for prestation in prestations %}
            <tr>
                <td>{{ prestation.id }}</td>
                <td>{{ prestation.name }}</td>
                <td>{{ prestation.description }}</td>
                <td>{{ prestation.prix }} €</td>
                <td>
                    <a href=\"{{ path('prestations_show', {'id': prestation.id}) }}\" class=\"btn btn-primary\">Voir</a>
                    <a href=\"{{ path('prestations_edit', {'id': prestation.id}) }}\" class=\"btn btn-warning\">Editer</a>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('prestations_new') }}\" class=\"btn btn-success float-right\">Ajouter prestation</a>

</div>
{% endif %}

{% endblock %}", "security/profile.html.twig", "C:\\wamp64\\www\\athome\\templates\\security\\profile.html.twig");
    }
}
