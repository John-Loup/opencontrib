<?php

/* OpenContribUserBundle:Default:connect.html.twig */
class __TwigTemplate_1e5023a6649b8301c3303fdcdf5388c07b147bb5e18f84cc2471830a42c4dd41 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribUserBundle:Default:connect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribUserBundle:Default:connect.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "
<li><a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
</br>
<li><a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>

";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "imageName", array()) != null)) {
                // line 12
                echo "
<div class=\"profile-pictures-user-nav\" style=\"background-image:url('";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "basePath", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "imageFile"), "html", null, true);
                echo "');background-size:cover;width:50px;margin-right:20px;\">
</div>
";
            } else {
                // line 16
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "0572b3f_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_0572b3f_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/0572b3f_User_icon_BLACK-01_1.png");
                    // line 17
                    echo "<div class=\"profile-pictures-user-nav\" style=\"background-image:url('";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->source); })()), "html", null, true);
                    echo "')\">
</div>
    <!-- <img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
                    echo "\" style=\"width:80%\"/> -->
";
                } else {
                    // asset "0572b3f"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_0572b3f") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/0572b3f.png");
                    // line 17
                    echo "<div class=\"profile-pictures-user-nav\" style=\"background-image:url('";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->source); })()), "html", null, true);
                    echo "')\">
</div>
    <!-- <img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
                    echo "\" style=\"width:80%\"/> -->
";
                }
                unset($context["asset_url"]);
            }
            // line 22
            echo "
";
        } else {
            // line 24
            echo "
<li><a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
</br>
<li><a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connection</a></li>



";
        }
        // line 32
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OpenContribUserBundle:Default:connect.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  125 => 27,  120 => 25,  117 => 24,  113 => 22,  106 => 19,  100 => 17,  93 => 19,  87 => 17,  83 => 16,  75 => 13,  72 => 12,  70 => 11,  65 => 9,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  34 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block body %}

{% if is_granted('IS_AUTHENTICATED_FULLY') %}

<li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
</br>
<li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>

{% if user.imageName != null %}

<div class=\"profile-pictures-user-nav\" style=\"background-image:url('{{ app.request.getSchemeAndHttpHost() }}{{ app.request.basePath }}{{vich_uploader_asset(user, 'imageFile') }}');background-size:cover;width:50px;margin-right:20px;\">
</div>
{% else %}
{% image '@OpenContribViewBundle/Resources/public/images/User_icon_BLACK-01.png' %}
<div class=\"profile-pictures-user-nav\" style=\"background-image:url('{{ asset_url }}')\">
</div>
    <!-- <img src=\"{{ asset_url }}\" style=\"width:80%\"/> -->
{% endimage %}
{% endif %}

{% else %}

<li><a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
</br>
<li><a href=\"{{ path('fos_user_security_login') }}\">Connection</a></li>



{% endif %}

{% endblock %}
", "OpenContribUserBundle:Default:connect.html.twig", "/var/www/html/opencontrib/src/OpenContrib/UserBundle/Resources/views/Default/connect.html.twig");
    }
}
