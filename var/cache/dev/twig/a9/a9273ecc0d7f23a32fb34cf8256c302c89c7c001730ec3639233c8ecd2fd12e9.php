<?php

/* OpenContribProjectsBundle::index.html.twig */
class __TwigTemplate_bfd28d29c6bbddd4d65a1051cc736db97b984005195b8e079bc92116da74e005 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("OpenContribViewBundle::main.html.twig", "OpenContribProjectsBundle::index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribProjectsBundle::index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribProjectsBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
    <div class=\"container\">

        <h1>Nos projets phares</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new Twig_Error_Runtime('Variable "projects" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 10
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_show", array("id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", array()))), "html", null, true);
            echo "\">
                <div class=\"col-sm-12 projet\">
                    <div class=\"col-sm-4\">
                        <div class=\"img\" style=\"background-image:url('";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "basePath", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["project"], "imageFile"), "html", null, true);
            echo "')\"></div>
                    </div>
                    <div class=\"information col-sm-8\">
                        <ul>
                            <li>Nom : ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nom", array()), "html", null, true);
            echo "</li>
                            <li>Catégorie : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "categorie", array()), "html", null, true);
            echo "</li>
                            <li>Description : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", array()), "html", null, true);
            echo "</li>

                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"edit\">Éditer</a>
                        </ul>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        <div class=\"col-sm-12\">
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_new");
        echo "\">Create a new project</a>
        </div>
    </div>
    <!-- start style -->
    <style>
        .container {
            margin-top: 50px;

        }
        .img {
            width: 400px;
            height: 300px;
            background: no-repeat;
            background-size: contain;
            float: left;
        }
        .projet {
            margin-bottom: 20px;
        }
        a:link {
            text-decoration: none;
            color: black;
        }
        a, a:hover {
            color:black;
        }
        .edit {
            color:red;
        }
    </style>
    <!-- end style -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OpenContribProjectsBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  105 => 27,  93 => 21,  88 => 19,  84 => 18,  80 => 17,  71 => 13,  64 => 10,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OpenContribViewBundle::main.html.twig' %}

{% block container %}

    <div class=\"container\">

        <h1>Nos projets phares</h1>

        {% for project in projects %}
            <a href=\"{{ path('projects_show', { 'id': project.id }) }}\">
                <div class=\"col-sm-12 projet\">
                    <div class=\"col-sm-4\">
                        <div class=\"img\" style=\"background-image:url('{{ app.request.getSchemeAndHttpHost() }}{{ app.request.basePath }}{{vich_uploader_asset(project, 'imageFile') }}')\"></div>
                    </div>
                    <div class=\"information col-sm-8\">
                        <ul>
                            <li>Nom : {{ project.nom }}</li>
                            <li>Catégorie : {{ project.categorie }}</li>
                            <li>Description : {{ project.description }}</li>

                            <a href=\"{{ path('projects_edit', { 'id': project.id }) }}\" class=\"edit\">Éditer</a>
                        </ul>
                    </div>
                </div>
            </a>
        {% endfor %}
        <div class=\"col-sm-12\">
            <a href=\"{{ path('projects_new') }}\">Create a new project</a>
        </div>
    </div>
    <!-- start style -->
    <style>
        .container {
            margin-top: 50px;

        }
        .img {
            width: 400px;
            height: 300px;
            background: no-repeat;
            background-size: contain;
            float: left;
        }
        .projet {
            margin-bottom: 20px;
        }
        a:link {
            text-decoration: none;
            color: black;
        }
        a, a:hover {
            color:black;
        }
        .edit {
            color:red;
        }
    </style>
    <!-- end style -->
{% endblock %}
", "OpenContribProjectsBundle::index.html.twig", "/var/www/html/opencontrib/src/OpenContrib/ProjectsBundle/Resources/views/index.html.twig");
    }
}
