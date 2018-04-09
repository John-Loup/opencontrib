<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_792c846d3d744be0b28e2806df94e60cdb295befc2018ea7f723fe20762ee638 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("OpenContribViewBundle::main.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

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
        echo "<div class=\"container-login\">

  <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" />
      <div class=\"login-container\" style=\"display:flex; flex-direction:row\">
        <div class=\"\" style=\"display:flex; flex-direction:column\">
        ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->source); })()), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "          <h1>Entrez vos identifiants</h1><br>
          <form>
            <div class=\"champs\">
            <div class=\"texte-champs animated fadeInLeft\">
              <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom d'utilisateur"), "html", null, true);
        echo "</label>
              <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe"), "html", null, true);
        echo "</label>
              <label for=\"remember_me\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restez connecté"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"input-champs animated fadeInRight\">
              <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" />
              <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
              <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                          </div>
                        </div>
                        <div class=\"submit-champs\">

                        <input type=\"submit\" class=\"login login-submit btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valider"), "html", null, true);
        echo "\" />

                      </div>

                              </div>
          </form>
        </div>
            </form>
          <div class=\"login-help\">
            <div class=\"\" style=\"margin:0\">
            <h3>Pas encore inscrit ?</h3><br>
              <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\"><input type=\"submit\" class=\"login login-submit btn btn-link\" id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inscription"), "html", null, true);
        echo "\" /></a>
              </div>
              <div class=\"\" >
<h3>Mot de passe oublié ?</h3><br>
              <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\"><input type=\"submit\" class=\"login login-submit btn btn-link\" id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Renvoi du mot de passe"), "html", null, true);
        echo "\" /></a>
</div>
          </div>
      </div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  119 => 40,  105 => 29,  95 => 22,  89 => 19,  85 => 18,  81 => 17,  75 => 13,  69 => 11,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OpenContribViewBundle::main.html.twig' %}

{% block container %}
<div class=\"container-login\">

  <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
      <div class=\"login-container\" style=\"display:flex; flex-direction:row\">
        <div class=\"\" style=\"display:flex; flex-direction:column\">
        {% if error %}
            <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
        {% endif %}
          <h1>Entrez vos identifiants</h1><br>
          <form>
            <div class=\"champs\">
            <div class=\"texte-champs animated fadeInLeft\">
              <label for=\"username\">{{ 'Nom d\\'utilisateur'|trans }}</label>
              <label for=\"password\">{{ 'Mot de passe'|trans }}</label>
              <label for=\"remember_me\">{{ 'Restez connecté'|trans }}</label>
            </div>
            <div class=\"input-champs animated fadeInRight\">
              <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
              <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
              <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                          </div>
                        </div>
                        <div class=\"submit-champs\">

                        <input type=\"submit\" class=\"login login-submit btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Valider'|trans }}\" />

                      </div>

                              </div>
          </form>
        </div>
            </form>
          <div class=\"login-help\">
            <div class=\"\" style=\"margin:0\">
            <h3>Pas encore inscrit ?</h3><br>
              <a href=\"{{ path('fos_user_registration_register') }}\"><input type=\"submit\" class=\"login login-submit btn btn-link\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Inscription'|trans }}\" /></a>
              </div>
              <div class=\"\" >
<h3>Mot de passe oublié ?</h3><br>
              <a href=\"{{ path('fos_user_resetting_request') }}\"><input type=\"submit\" class=\"login login-submit btn btn-link\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Renvoi du mot de passe'|trans }}\" /></a>
</div>
          </div>
      </div>


</div>
{% endblock %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/opencontrib/src/OpenContrib/UserBundle/Resources/views/Security/login.html.twig");
    }
}
