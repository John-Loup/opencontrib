<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7c4d3d8f7e5cb0b5418f064f16b72d243d17a39a04a25f033ec6c5516eab8af1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("OpenContribViewBundle::main.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        echo " ";
        // line 2
        echo "
<div class=\"container-login\">

<div class=\"login-container\">
  <h1>Créer votre compte</h1><br>

  <div class=\"champs\">
            <div class=\"texte-champs animated fadeInLeft\" style=\"height: 300px\">
    <label for=\"username\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <label for=\"email\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <label for=\"password\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <label for=\"RepeatedType\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Répéter le mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
  </div>
    <div class=\"input-champs input-champs-2 animated fadeInRight\">
      ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
        echo "
    </div>


  </div>
  <div class=\"submit-champs \">
    <div>
      <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
  </div>
</div>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  93 => 23,  81 => 16,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  53 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OpenContribViewBundle::main.html.twig' %} {% block container %} {% trans_default_domain 'FOSUserBundle' %}

<div class=\"container-login\">

<div class=\"login-container\">
  <h1>Créer votre compte</h1><br>

  <div class=\"champs\">
            <div class=\"texte-champs animated fadeInLeft\" style=\"height: 300px\">
    <label for=\"username\">{{ 'Nom d\\'utilisateur'|trans }}</label>
    <label for=\"email\">{{ 'Email'|trans }}</label>
    <label for=\"password\">{{ 'Mot de passe'|trans }}</label>
    <label for=\"RepeatedType\">{{ 'Répéter le mot de passe'|trans }}</label>
  </div>
    <div class=\"input-champs input-champs-2 animated fadeInRight\">
      {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }} {{ form_widget(form) }}
    </div>


  </div>
  <div class=\"submit-champs \">
    <div>
      <input type=\"submit\" class=\"btn btn-success\" value=\"{{ 'Valider'|trans }}\" />
    </div>
  </div>
</div>
{{ form_end(form) }}
</div>
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/opencontrib/src/OpenContrib/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
