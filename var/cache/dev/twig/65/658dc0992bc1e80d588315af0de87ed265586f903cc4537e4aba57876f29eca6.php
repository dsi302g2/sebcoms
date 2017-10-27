<?php

/* sebcomBundle:Default:menu.html.twig */
class __TwigTemplate_0b13d2644733dad24d9c96ebd13f791616ce87f31e455e8cbb767decdc15c1dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "sebcomBundle:Default:menu.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_776d9170077ffd3814a2ce88cc58d294c0ecbcc8c8478d1a4a5ee896beb2a7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776d9170077ffd3814a2ce88cc58d294c0ecbcc8c8478d1a4a5ee896beb2a7ce->enter($__internal_776d9170077ffd3814a2ce88cc58d294c0ecbcc8c8478d1a4a5ee896beb2a7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sebcomBundle:Default:menu.html.twig"));

        $__internal_a94bf1a0e9e6b96e1ecc7762b8ffc54ce267b1fd293ded230f12c25259b7c6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94bf1a0e9e6b96e1ecc7762b8ffc54ce267b1fd293ded230f12c25259b7c6eb->enter($__internal_a94bf1a0e9e6b96e1ecc7762b8ffc54ce267b1fd293ded230f12c25259b7c6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sebcomBundle:Default:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776d9170077ffd3814a2ce88cc58d294c0ecbcc8c8478d1a4a5ee896beb2a7ce->leave($__internal_776d9170077ffd3814a2ce88cc58d294c0ecbcc8c8478d1a4a5ee896beb2a7ce_prof);

        
        $__internal_a94bf1a0e9e6b96e1ecc7762b8ffc54ce267b1fd293ded230f12c25259b7c6eb->leave($__internal_a94bf1a0e9e6b96e1ecc7762b8ffc54ce267b1fd293ded230f12c25259b7c6eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_045c740020e281f310cac84467a15e42089a3251543c47e0a485649f35df0c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045c740020e281f310cac84467a15e42089a3251543c47e0a485649f35df0c41->enter($__internal_045c740020e281f310cac84467a15e42089a3251543c47e0a485649f35df0c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96175982bad3d352bc4e88b797783b62b0b182221c2d152986c6c2adb01fc3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96175982bad3d352bc4e88b797783b62b0b182221c2d152986c6c2adb01fc3c9->enter($__internal_96175982bad3d352bc4e88b797783b62b0b182221c2d152986c6c2adb01fc3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<nav class=\"navbar navbar-inverse\" style=\"background-image:url('";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/backgroundLogin.jpg"), "html", null, true);
        echo "');
    background-size: cover;\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">SebCom</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">&nbsp;&nbsp;&nbsp; Home &nbsp;&nbsp;&nbsp;</a></li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Catégories <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"ajoutcat\">Ajouter Catégories</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Catégories</a></li>

                  </ul>
            </li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Articles <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ajouter Articles</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Articles</a></li>

                </ul>
            </li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Commandes <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ajouter Commandes</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Commandes</a></li>

                </ul>
            </li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Livreurs <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ajouter Livreurs</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Livreurs</a></li>

                </ul>
            </li>

        </ul>
        <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 52
        if (array_key_exists("name", $context)) {
            // line 53
            echo "            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 55
        echo "            <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> LogOut</a></li>
        </ul>
    </div>

</nav>


";
        
        $__internal_96175982bad3d352bc4e88b797783b62b0b182221c2d152986c6c2adb01fc3c9->leave($__internal_96175982bad3d352bc4e88b797783b62b0b182221c2d152986c6c2adb01fc3c9_prof);

        
        $__internal_045c740020e281f310cac84467a15e42089a3251543c47e0a485649f35df0c41->leave($__internal_045c740020e281f310cac84467a15e42089a3251543c47e0a485649f35df0c41_prof);

    }

    public function getTemplateName()
    {
        return "sebcomBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 55,  105 => 53,  103 => 52,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'menu.html.twig' %}
{% block body %}

<nav class=\"navbar navbar-inverse\" style=\"background-image:url('{{ asset('bundles/images/backgroundLogin.jpg')}}');
    background-size: cover;\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">SebCom</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">&nbsp;&nbsp;&nbsp; Home &nbsp;&nbsp;&nbsp;</a></li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Catégories <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"ajoutcat\">Ajouter Catégories</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Catégories</a></li>

                  </ul>
            </li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Articles <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ajouter Articles</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Articles</a></li>

                </ul>
            </li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Commandes <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ajouter Commandes</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Commandes</a></li>

                </ul>
            </li>
            <li class=\"dropdown\">
                <a id=\"h\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > Gestion des Livreurs <b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ajouter Livreurs</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Modifier Livreurs</a></li>

                </ul>
            </li>

        </ul>
        <ul class=\"nav navbar-nav navbar-right\">

            {% if name is defined %}
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>{{ name }}</a></li>
            {% endif %}
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> LogOut</a></li>
        </ul>
    </div>

</nav>


{% endblock %}

", "sebcomBundle:Default:menu.html.twig", "E:\\wamp\\www\\sebcoms\\src\\sebcomBundle/Resources/views/Default/menu.html.twig");
    }
}
