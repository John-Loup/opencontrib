<?php

/* OpenContribViewBundle::main.html.twig */
class __TwigTemplate_f7aad3006d89c9ef8425bfdc29fe2eaa65d6c000c8b49ca29b018618af79465f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OpenContribViewBundle::main.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribViewBundle::main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribViewBundle::main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1c53b95_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c53b95_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c53b95_part_1_bootstrap-theme_1.css");
            // line 7
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "1c53b95_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c53b95_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c53b95_part_1_bootstrap_2.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "1c53b95_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c53b95_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c53b95_part_1_css_3.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "1c53b95_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c53b95_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c53b95_part_1_font-awesome_4.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
";
            // asset "1c53b95_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c53b95_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c53b95_part_1_font-awesome.min_5.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "1c53b95"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c53b95") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c53b95.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo " ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 12
        echo "
";
        // line 13
        $this->loadTemplate("OpenContribViewBundle:Default:nav.html.twig", "OpenContribViewBundle::main.html.twig", 13)->display($context);
        // line 14
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "49e0cbd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_49e0cbd_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/49e0cbd_part_1_bootstrap_1.js");
            // line 23
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "49e0cbd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_49e0cbd_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/49e0cbd_part_1_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "49e0cbd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_49e0cbd") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/49e0cbd.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
<script>
\t// init controller
\$(document).ready(function(){
    \$(\".dropdown-toggle\").dropdown();
});
</script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js\"></script>

<script>
\t// init controller
\tvar controller = new ScrollMagic.Controller();
</script>

<script>
\t// build scene
\tvar scene = new ScrollMagic.Scene({triggerElement: \".trigger\"})
\t\t\t\t\t// trigger animation by adding a css class
\t\t\t\t\t.setClassToggle(\".animate\", \"zap\")
\t\t\t\t\t// .addIndicators({name: \"1 - add a class\"}) // add indicators (requires plugin)
\t\t\t\t\t.addTo(controller);
  var scene2 = new ScrollMagic.Scene({triggerElement: \".trigger2\"})
\t\t\t\t\t// trigger animation by adding a css class
\t\t\t\t\t.setClassToggle(\".animate2\", \"zap2\")
\t\t\t\t\t// .addIndicators({name: \"1 - add a class\"}) // add indicators (requires plugin)
\t\t\t\t\t.addTo(controller);
  var scene3 = new ScrollMagic.Scene({triggerElement: \".trigger3\"})
\t\t\t\t\t// trigger animation by adding a css class
\t\t\t\t\t.setClassToggle(\".animate3\", \"zap3\")
\t\t\t\t\t// .addIndicators({name: \"1 - add a class\"}) // add indicators (requires plugin)
\t\t\t\t\t.addTo(controller);
</script>

<script type=\"text/javascript\">

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-105714410-1', 'auto');
ga('send', 'pageview');


</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        $this->loadTemplate("OpenContribViewBundle:Default:footer.html.twig", "OpenContribViewBundle::main.html.twig", 76)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OpenContribViewBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 76,  276 => 75,  219 => 25,  199 => 23,  195 => 22,  192 => 21,  183 => 20,  171 => 17,  162 => 16,  151 => 14,  149 => 13,  146 => 12,  137 => 11,  127 => 20,  125 => 16,  122 => 11,  113 => 10,  67 => 7,  63 => 6,  58 => 3,  49 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

{% stylesheets '@OpenContribViewBundle/Resources/public/css/*' %}
  <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
{% endstylesheets %}
{% endblock %}
{% block body %}
 {% block navbar%}

{% include('OpenContribViewBundle:Default:nav.html.twig') %}

{% endblock %}
{% block container %}


{% endblock %}
{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
{% javascripts '@OpenContribViewBundle/Resources/public/js/*' %}
    <script src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

<script>
\t// init controller
\$(document).ready(function(){
    \$(\".dropdown-toggle\").dropdown();
});
</script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js\"></script>

<script>
\t// init controller
\tvar controller = new ScrollMagic.Controller();
</script>

<script>
\t// build scene
\tvar scene = new ScrollMagic.Scene({triggerElement: \".trigger\"})
\t\t\t\t\t// trigger animation by adding a css class
\t\t\t\t\t.setClassToggle(\".animate\", \"zap\")
\t\t\t\t\t// .addIndicators({name: \"1 - add a class\"}) // add indicators (requires plugin)
\t\t\t\t\t.addTo(controller);
  var scene2 = new ScrollMagic.Scene({triggerElement: \".trigger2\"})
\t\t\t\t\t// trigger animation by adding a css class
\t\t\t\t\t.setClassToggle(\".animate2\", \"zap2\")
\t\t\t\t\t// .addIndicators({name: \"1 - add a class\"}) // add indicators (requires plugin)
\t\t\t\t\t.addTo(controller);
  var scene3 = new ScrollMagic.Scene({triggerElement: \".trigger3\"})
\t\t\t\t\t// trigger animation by adding a css class
\t\t\t\t\t.setClassToggle(\".animate3\", \"zap3\")
\t\t\t\t\t// .addIndicators({name: \"1 - add a class\"}) // add indicators (requires plugin)
\t\t\t\t\t.addTo(controller);
</script>

<script type=\"text/javascript\">

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-105714410-1', 'auto');
ga('send', 'pageview');


</script>

{% endblock %}
{% endblock %}

{% block footer %}
{% include('OpenContribViewBundle:Default:footer.html.twig') %}
{% endblock %}
", "OpenContribViewBundle::main.html.twig", "/var/www/html/opencontrib/src/OpenContrib/ViewBundle/Resources/views/main.html.twig");
    }
}
