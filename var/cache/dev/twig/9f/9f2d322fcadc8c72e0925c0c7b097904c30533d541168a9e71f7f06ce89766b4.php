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

/* prestations/show.html.twig */
class __TwigTemplate_61024500577356416e4e0e74d92e634e6acd007d01df27be067112af359ab5d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestations/show.html.twig", 1);
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

        echo "Prestations";
        
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
        echo "<div class=\"w3-container\">
    <div class=\"col-8 p-5\">

            <h2>Prestations</h2>

            <table class=\"table table-bordered table-sm text-center\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), "html", null, true);
        echo " €</td>
                    </tr>
                    <tr>
                        <th>Prestataire</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 31, $this->source); })()), "prestataire", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <a href=\"javascript:history.back()\" class=\"btn btn-info\">Retour</a>

            ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 38
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-warning float-right\">Edit</a>

            ";
            // line 40
            echo twig_include($this->env, $context, "prestations/_delete_form.html.twig");
            echo "
            ";
        }
        // line 42
        echo "
        </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prestations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  144 => 40,  138 => 38,  136 => 37,  127 => 31,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prestations{% endblock %}

{% block body %}
<div class=\"w3-container\">
    <div class=\"col-8 p-5\">

            <h2>Prestations</h2>

            <table class=\"table table-bordered table-sm text-center\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ prestation.id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ prestation.name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ prestation.description }}</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>{{ prestation.prix }} €</td>
                    </tr>
                    <tr>
                        <th>Prestataire</th>
                        <td>{{ prestation.prestataire.username }}</td>
                    </tr>
                </tbody>
            </table>
            <a href=\"javascript:history.back()\" class=\"btn btn-info\">Retour</a>

            {% if is_granted('ROLE_PRO') %}
            <a href=\"{{ path('prestations_edit', {'id': prestation.id}) }}\" class=\"btn btn-warning float-right\">Edit</a>

            {{ include('prestations/_delete_form.html.twig') }}
            {% endif %}

        </div>

</div>
{% endblock %}", "prestations/show.html.twig", "C:\\wamp64\\www\\athome\\templates\\prestations\\show.html.twig");
    }
}
