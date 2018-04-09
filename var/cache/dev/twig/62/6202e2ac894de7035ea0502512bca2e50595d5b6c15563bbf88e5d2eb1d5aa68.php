<?php

/* OpenContribProjectsBundle::new.html.twig */
class __TwigTemplate_4ffa4acb6be4e069910140b79105ed60500fa39383d51331e88d0098936e63b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("OpenContribViewBundle::main.html.twig", "OpenContribProjectsBundle::new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribProjectsBundle::new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribProjectsBundle::new.html.twig"));

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
        echo "    <style>
        form {
            display: block;
        }
        .field {
            margin-top: 10px;
        }
        .title {
            margin-top: 40px;
        }
        /* Style the text boxes */
        input, textarea {
            margin-top: 25px;
            background:#efefef;
            border:1px solid #dedede;
            padding:10px;
            margin-top:3px;
            font-size:0.9em;
            color:#3a3a3a;
            -moz-border-radius:5px;
            -webkit-border-radius:5px;
            border-radius:5px;
        }
        .form-style-1 {
            margin:10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px \"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif;
            border: 5px solid #111;
        }
        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }
        .form-style-1 label{
            margin: 5px;
            padding:0px;
            display:block;
            font-weight: bold;
        }
        .form-style-1 input[type=text],

        textarea,
        select{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border:1px solid #BEBEBE;
            padding: 7px;
            margin:0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
        }
        .form-style-1 input[type=text]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus {
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }

    </style>
<br><br>
    <div class=\"container\">
        <div class=\"form-group\">
            <h1 class=\"title\">Project creation</h1>
                ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), 'form_start');
        echo "
                 <div class=\"field col-sm-6\">
                     <ul class=\"form-style-1\">
                     ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), 'widget');
        echo "
                     <br>
                    <input class=\"btn btn-success\" value=\"Créer\" type=\"submit\">
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
                     </ul>
                <ul>
                    <li>
                        <br>
                        <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_index");
        echo "\">Back to the list</a>
                    </li>
                </ul>
                 </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OpenContribProjectsBundle::new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 87,  139 => 82,  133 => 79,  127 => 76,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OpenContribViewBundle::main.html.twig' %}

{% block container %}
    <style>
        form {
            display: block;
        }
        .field {
            margin-top: 10px;
        }
        .title {
            margin-top: 40px;
        }
        /* Style the text boxes */
        input, textarea {
            margin-top: 25px;
            background:#efefef;
            border:1px solid #dedede;
            padding:10px;
            margin-top:3px;
            font-size:0.9em;
            color:#3a3a3a;
            -moz-border-radius:5px;
            -webkit-border-radius:5px;
            border-radius:5px;
        }
        .form-style-1 {
            margin:10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px \"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif;
            border: 5px solid #111;
        }
        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }
        .form-style-1 label{
            margin: 5px;
            padding:0px;
            display:block;
            font-weight: bold;
        }
        .form-style-1 input[type=text],

        textarea,
        select{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border:1px solid #BEBEBE;
            padding: 7px;
            margin:0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
        }
        .form-style-1 input[type=text]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus {
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }

    </style>
<br><br>
    <div class=\"container\">
        <div class=\"form-group\">
            <h1 class=\"title\">Project creation</h1>
                {{ form_start(form) }}
                 <div class=\"field col-sm-6\">
                     <ul class=\"form-style-1\">
                     {{ form_widget(form) }}
                     <br>
                    <input class=\"btn btn-success\" value=\"Créer\" type=\"submit\">
                {{ form_end(form) }}
                     </ul>
                <ul>
                    <li>
                        <br>
                        <a href=\"{{ path('projects_index') }}\">Back to the list</a>
                    </li>
                </ul>
                 </div>
        </div>
    </div>
    {% endblock %}
", "OpenContribProjectsBundle::new.html.twig", "/var/www/html/opencontrib/src/OpenContrib/ProjectsBundle/Resources/views/new.html.twig");
    }
}
