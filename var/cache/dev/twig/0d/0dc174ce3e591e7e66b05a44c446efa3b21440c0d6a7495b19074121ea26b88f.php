<?php

/* OpenContribProjectsBundle::indexHome.html.twig */
class __TwigTemplate_9629999d3c47e57172785c75658e9f9b6e953d9aca3a65c506f14b1670446ae7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("OpenContribViewBundle::main.html.twig", "OpenContribProjectsBundle::indexHome.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenContribViewBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribProjectsBundle::indexHome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribProjectsBundle::indexHome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <style>
      .container {
        margin-top: 50px;
      }
    </style>
<div class=\"container\">
  <h1>Nos Projets Phares !!</h1>
  <div class=\"content\">
   ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new Twig_Error_Runtime('Variable "projects" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 12
            echo "  <div class=\"pro row\">
    <div class=\"col-xs-6\">
      <div class=\"description\">
      <p>";
            // line 15
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", array())) > 500)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", array()), 0, 500) . "...")) : (twig_get_attribute($this->env, $this->source, $context["project"], "description", array()))), "html", null, true);
            echo "</p>
      <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "categorie", array()), "html", null, true);
            echo "</p>
      <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "date", array()), "html", null, true);
            echo "</p>
    </div>
    </div>
    <div class=\"col-xs-6\">
      <div class=\"title\">

      <div class=\"img\" style=\"background-image:url('";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "request", array()), "basePath", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["project"], "imageFile"), "html", null, true);
            echo "'); width: 100%;
      height: 100%;\">
        <h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nom", array()), "html", null, true);
            echo "</h2>
        <ul>
          <li>
            <a class=\"btn btn-default btn-md\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_show", array("id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", array()))), "html", null, true);
            echo "\">Voir Le Projet</a>
          </li>
        </ul>
      </div>
      </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "


</div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OpenContribProjectsBundle::indexHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  102 => 28,  96 => 25,  89 => 23,  80 => 17,  76 => 16,  72 => 15,  67 => 12,  63 => 11,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OpenContribViewBundle::main.html.twig' %}
{% block container %}
    <style>
      .container {
        margin-top: 50px;
      }
    </style>
<div class=\"container\">
  <h1>Nos Projets Phares !!</h1>
  <div class=\"content\">
   {% for project in projects %}
  <div class=\"pro row\">
    <div class=\"col-xs-6\">
      <div class=\"description\">
      <p>{{ project.description|length > 500 ? project.description|slice(0, 500) ~ '...' : project.description }}</p>
      <p>{{ project.categorie }}</p>
      <p>{{ project.date }}</p>
    </div>
    </div>
    <div class=\"col-xs-6\">
      <div class=\"title\">

      <div class=\"img\" style=\"background-image:url('{{ app.request.getSchemeAndHttpHost() }}{{ app.request.basePath }}{{vich_uploader_asset(project, 'imageFile') }}'); width: 100%;
      height: 100%;\">
        <h2>{{ project.nom }}</h2>
        <ul>
          <li>
            <a class=\"btn btn-default btn-md\" href=\"{{ path('projects_show', { 'id': project.id }) }}\">Voir Le Projet</a>
          </li>
        </ul>
      </div>
      </div>
    </div>
</div>
{% endfor %}



</div>


</div>
{% endblock %}
", "OpenContribProjectsBundle::indexHome.html.twig", "/var/www/html/opencontrib/src/OpenContrib/ProjectsBundle/Resources/views/indexHome.html.twig");
    }
}
