<?php

/* OpenContribViewBundle:Default:index.html.twig */
class __TwigTemplate_a62d3bf11fb9b69bdcd364708af2770bcf19be9776320bb1b5cc806199ecb38f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("OpenContribViewBundle::main.html.twig", "OpenContribViewBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribViewBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenContribViewBundle:Default:index.html.twig"));

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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f0bd9b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4f0bd9b_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/4f0bd9b_267-min_1.jpg");
            // line 5
            echo "  <div class=\"jumbotron\" style=\"background-image:url(";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 5, $this->source); })()), "html", null, true);
            echo ");padding-bottom:0;margin-bottom:0\">
    ";
        } else {
            // asset "4f0bd9b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4f0bd9b") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/4f0bd9b.jpg");
            echo "  <div class=\"jumbotron\" style=\"background-image:url(";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 5, $this->source); })()), "html", null, true);
            echo ");padding-bottom:0;margin-bottom:0\">
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "<h1 class=\"animated fadeInLeft\">OpenContrib</h1>
<p class=\"animated fadeInRight\">Apportez de la visibilité qui manque à vos projets !</p>

</div>
    <div class=\"col-lg-12\"style=\"background-color: #E1E8EB;\">
      <div class=\"col-lg-offset-1 col-lg-10\">
          <ul class=\"homepage_text\">
              <br>
<li class=\"animated fadeInLeft\">Vous cherchez à participer au monde du libre ?</li><br>
<li class=\"animated fadeInRight\">Vous pensez que votre projet peut être utile à d'autres ?</li><br>
<li class=\"animated fadeInLeft\">Vous voulez apporter de la visibilité à vos idées ?</li><br>
<div class=\"trigger\" class=\"spacer s0\"></div>
          </ul>
      </div>
    </div>
    <b><p class='homepageTitle'>La plateforme OpenContrib est faite pour vous !</p></b>
<div class=\"col-lg-12  animate\" style=\"font-size: 18px\">
    <div class=\"presentation col-lg-offset-2 col-lg-8\">
        <br>
        <p><b>OpenContrib</b> est une plateforme participative autour de projets open source quel qu'ils soient.
        Cette plateforme vous permet d'apporter de la visibilité à vos projets en vous proposant
        de poster vos projets directement en lien d'autres plateforme comme GitHub ou autre, de les décrire et de les
            <b>présenter</b> au grand public.<p>
        <p>La plateforme vous permet donc de prendre contact avec différents types de profils, entreprises,
        graphistes et autres développeurs qui pourront vous aider en contribuant à votre projet. Tant sur le plan
            du développement même que de l'organisation ou de la gestion de projet au niveau légal, les acteurs
            le disérant pourront mettre en oeuvre leurs compétences à votre service.
        Ainsi vos projets auront la visibilité qu'il méritent et même des profils inexperimentés vis à vis
        de github pourront entrer dans la danse!</p>

        <p>Cette plateforme a pour but de contribuer au monde du libre en garantissant le caractère libre des
        projets postés sur la plateforme. Ainsi, en ayant accès au dépot github directement sur la plateforme,
        la contribution par des acteurs externes devient facile et pratique.</p>
    <br>
        <p>Etudiants, entreprises, particuliers, lanceurs de projets, OpenContrib est fait pour nous tous.</p>
        <p>Qu'attendez vous alors pour partager vos idées ? <b>OpenContrib</b> est fait pour cela ! </p>
    <br><br>
    </div>
</div>
    <div class=\"project\">
";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OpenContribProjectsBundle:Projects:indexHome"));
        echo "
<div class=\"trigger3\">

</div>
<div class=\"trigger2\">

</div>
<p class=\"\" style=\"margin-top:80px;\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_index");
        echo "\" class=\"btn btn-primary btn-lg\" role=\"button\" title=\"En savoir +\">Voir la liste de nos projets</a></p>
</div>

<div class=\"ligne\">

</div>

<div class=\"github\">
 <div class=\"texte\">
      <p>La plateforme proposer des contributions bénévoles, elle n'a pas pour objectif de gérer des transactions
      monétaires, il est donc interdit de réclamer/proposer des indémnisations financières.</p><br><br>
      <u><p><b>Conseils d'utilisation</b> pour les posteurs de projets :</p></u>
    <p>La plateforme utilise l'API qithub, il est important de penser à bloquer votre projet en lecture
        seule afin qu'il n'y ait pas de problème de contribution non désirée.</p>
      <u><p><b>Conseils d'utilisation</b> pour les contributeurs :</p></u>
      <p>Sachez que la plateforme vous incite fortement à travailler uniquement via des merges requests pour garantir
      l'intégrité des projets sur lequels vous voulez contribuer.</p>
  </div>
  <div class=\"api animate2\">
    ";
        // line 73
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d9e2c6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4d9e2c6_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/4d9e2c6_git_1.png");
            // line 74
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "\" alt=\"\">
        ";
        } else {
            // asset "4d9e2c6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4d9e2c6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/4d9e2c6.png");
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "\" alt=\"\">
        ";
        }
        unset($context["asset_url"]);
        // line 76
        echo "  </div>
</div>



<div class=\"contact\">
  <div class=\"col\"></div>
  <div class=\"col\"></div>
  <div class=\"col\"></div>
  <div class=\"col\"></div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OpenContribViewBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 76,  149 => 74,  145 => 73,  123 => 54,  113 => 47,  71 => 7,  57 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OpenContribViewBundle::main.html.twig' %}

{% block container %}
{% image '@OpenContribViewBundle/Resources/public/images/267-min.jpg' %}
  <div class=\"jumbotron\" style=\"background-image:url({{ asset_url }});padding-bottom:0;margin-bottom:0\">
    {% endimage %}
<h1 class=\"animated fadeInLeft\">OpenContrib</h1>
<p class=\"animated fadeInRight\">Apportez de la visibilité qui manque à vos projets !</p>

</div>
    <div class=\"col-lg-12\"style=\"background-color: #E1E8EB;\">
      <div class=\"col-lg-offset-1 col-lg-10\">
          <ul class=\"homepage_text\">
              <br>
<li class=\"animated fadeInLeft\">Vous cherchez à participer au monde du libre ?</li><br>
<li class=\"animated fadeInRight\">Vous pensez que votre projet peut être utile à d'autres ?</li><br>
<li class=\"animated fadeInLeft\">Vous voulez apporter de la visibilité à vos idées ?</li><br>
<div class=\"trigger\" class=\"spacer s0\"></div>
          </ul>
      </div>
    </div>
    <b><p class='homepageTitle'>La plateforme OpenContrib est faite pour vous !</p></b>
<div class=\"col-lg-12  animate\" style=\"font-size: 18px\">
    <div class=\"presentation col-lg-offset-2 col-lg-8\">
        <br>
        <p><b>OpenContrib</b> est une plateforme participative autour de projets open source quel qu'ils soient.
        Cette plateforme vous permet d'apporter de la visibilité à vos projets en vous proposant
        de poster vos projets directement en lien d'autres plateforme comme GitHub ou autre, de les décrire et de les
            <b>présenter</b> au grand public.<p>
        <p>La plateforme vous permet donc de prendre contact avec différents types de profils, entreprises,
        graphistes et autres développeurs qui pourront vous aider en contribuant à votre projet. Tant sur le plan
            du développement même que de l'organisation ou de la gestion de projet au niveau légal, les acteurs
            le disérant pourront mettre en oeuvre leurs compétences à votre service.
        Ainsi vos projets auront la visibilité qu'il méritent et même des profils inexperimentés vis à vis
        de github pourront entrer dans la danse!</p>

        <p>Cette plateforme a pour but de contribuer au monde du libre en garantissant le caractère libre des
        projets postés sur la plateforme. Ainsi, en ayant accès au dépot github directement sur la plateforme,
        la contribution par des acteurs externes devient facile et pratique.</p>
    <br>
        <p>Etudiants, entreprises, particuliers, lanceurs de projets, OpenContrib est fait pour nous tous.</p>
        <p>Qu'attendez vous alors pour partager vos idées ? <b>OpenContrib</b> est fait pour cela ! </p>
    <br><br>
    </div>
</div>
    <div class=\"project\">
{{ render(controller('OpenContribProjectsBundle:Projects:indexHome')) }}
<div class=\"trigger3\">

</div>
<div class=\"trigger2\">

</div>
<p class=\"\" style=\"margin-top:80px;\"><a href=\"{{ path('projects_index') }}\" class=\"btn btn-primary btn-lg\" role=\"button\" title=\"En savoir +\">Voir la liste de nos projets</a></p>
</div>

<div class=\"ligne\">

</div>

<div class=\"github\">
 <div class=\"texte\">
      <p>La plateforme proposer des contributions bénévoles, elle n'a pas pour objectif de gérer des transactions
      monétaires, il est donc interdit de réclamer/proposer des indémnisations financières.</p><br><br>
      <u><p><b>Conseils d'utilisation</b> pour les posteurs de projets :</p></u>
    <p>La plateforme utilise l'API qithub, il est important de penser à bloquer votre projet en lecture
        seule afin qu'il n'y ait pas de problème de contribution non désirée.</p>
      <u><p><b>Conseils d'utilisation</b> pour les contributeurs :</p></u>
      <p>Sachez que la plateforme vous incite fortement à travailler uniquement via des merges requests pour garantir
      l'intégrité des projets sur lequels vous voulez contribuer.</p>
  </div>
  <div class=\"api animate2\">
    {% image '@OpenContribViewBundle/Resources/public/images/git.png' %}
      <img src=\"{{ asset_url }}\" alt=\"\">
        {% endimage %}
  </div>
</div>



<div class=\"contact\">
  <div class=\"col\"></div>
  <div class=\"col\"></div>
  <div class=\"col\"></div>
  <div class=\"col\"></div>
</div>
{% endblock %}
", "OpenContribViewBundle:Default:index.html.twig", "/var/www/html/opencontrib/src/OpenContrib/ViewBundle/Resources/views/Default/index.html.twig");
    }
}
