<?php

/* sebcomBundle:Default:login.html.twig */
class __TwigTemplate_620b73358b67324d6b36ed24ed908fc4d7c7b7ec12555acf15c792b53cd92045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sebcomBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f893bc83dea074489299b074e655e09eb14ac6222a9301388954f5ed9f9c274d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f893bc83dea074489299b074e655e09eb14ac6222a9301388954f5ed9f9c274d->enter($__internal_f893bc83dea074489299b074e655e09eb14ac6222a9301388954f5ed9f9c274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sebcomBundle:Default:login.html.twig"));

        $__internal_74bdbb2f38729e2b2dcd4e8313a2c5fc8c1ff75a2e53dc03ac8afd2a494d6483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bdbb2f38729e2b2dcd4e8313a2c5fc8c1ff75a2e53dc03ac8afd2a494d6483->enter($__internal_74bdbb2f38729e2b2dcd4e8313a2c5fc8c1ff75a2e53dc03ac8afd2a494d6483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sebcomBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f893bc83dea074489299b074e655e09eb14ac6222a9301388954f5ed9f9c274d->leave($__internal_f893bc83dea074489299b074e655e09eb14ac6222a9301388954f5ed9f9c274d_prof);

        
        $__internal_74bdbb2f38729e2b2dcd4e8313a2c5fc8c1ff75a2e53dc03ac8afd2a494d6483->leave($__internal_74bdbb2f38729e2b2dcd4e8313a2c5fc8c1ff75a2e53dc03ac8afd2a494d6483_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4167f5e06dcb0af4ee843a17ab1b8543ba3501a09460e738d611cba837b2b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4167f5e06dcb0af4ee843a17ab1b8543ba3501a09460e738d611cba837b2b0c->enter($__internal_b4167f5e06dcb0af4ee843a17ab1b8543ba3501a09460e738d611cba837b2b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a125a758c50eafed4e5b7ee8b27389b1d31ac6e120fa7171bc1a983bf6f9a0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a125a758c50eafed4e5b7ee8b27389b1d31ac6e120fa7171bc1a983bf6f9a0db->enter($__internal_a125a758c50eafed4e5b7ee8b27389b1d31ac6e120fa7171bc1a983bf6f9a0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style type=\"text/css\">

        body {background-image:url(\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/backgroundLogin.jpg"), "html", null, true);
        echo "\");
        background-size: cover;}
    </style>
";
        
        $__internal_a125a758c50eafed4e5b7ee8b27389b1d31ac6e120fa7171bc1a983bf6f9a0db->leave($__internal_a125a758c50eafed4e5b7ee8b27389b1d31ac6e120fa7171bc1a983bf6f9a0db_prof);

        
        $__internal_b4167f5e06dcb0af4ee843a17ab1b8543ba3501a09460e738d611cba837b2b0c->leave($__internal_b4167f5e06dcb0af4ee843a17ab1b8543ba3501a09460e738d611cba837b2b0c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_906fcc08597759a12f8d27ce0b76412f7b0c4e57291ab913d223ade2c4c19832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906fcc08597759a12f8d27ce0b76412f7b0c4e57291ab913d223ade2c4c19832->enter($__internal_906fcc08597759a12f8d27ce0b76412f7b0c4e57291ab913d223ade2c4c19832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5fded6e5497dc810d2bf0dfb175c2c4244dbb7408e61a4a3d41dfb3f7f24aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fded6e5497dc810d2bf0dfb175c2c4244dbb7408e61a4a3d41dfb3f7f24aab->enter($__internal_b5fded6e5497dc810d2bf0dfb175c2c4244dbb7408e61a4a3d41dfb3f7f24aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_b5fded6e5497dc810d2bf0dfb175c2c4244dbb7408e61a4a3d41dfb3f7f24aab->leave($__internal_b5fded6e5497dc810d2bf0dfb175c2c4244dbb7408e61a4a3d41dfb3f7f24aab_prof);

        
        $__internal_906fcc08597759a12f8d27ce0b76412f7b0c4e57291ab913d223ade2c4c19832->leave($__internal_906fcc08597759a12f8d27ce0b76412f7b0c4e57291ab913d223ade2c4c19832_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16dc2a6452ad9656896813acf7f3c0fdd3c49cde64c229003aba1424845005fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16dc2a6452ad9656896813acf7f3c0fdd3c49cde64c229003aba1424845005fa->enter($__internal_16dc2a6452ad9656896813acf7f3c0fdd3c49cde64c229003aba1424845005fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d4ad76dc6096173c43058e7b3fbb712537d395a6506cdcc001a487852e1ced8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4ad76dc6096173c43058e7b3fbb712537d395a6506cdcc001a487852e1ced8->enter($__internal_8d4ad76dc6096173c43058e7b3fbb712537d395a6506cdcc001a487852e1ced8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "


    <form name=\"f\" action=\"/login\" class=\"form-horizontal\" method=\"POST\">
        <div class=\"inner-container\">
            <div class=\"box\">
                <div id=\"noblur\">
                    <h1> Login </h1>
                    <input type=\"text\" name=\"Pseudo\" onkeyup=\"inputValid()\" id=\"usrId\" class=\"form-control\" placeholder=\"Pseudo\" />
                    <input type=\"password\" name=\"Password\" id=\"pwdId\" class=\"form-control\" placeholder=\"Password\"  />
                    ";
        // line 21
        if (array_key_exists("error", $context)) {
            // line 22
            echo "                        <span class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
                    ";
        }
        // line 24
        echo "                    <input type=\"submit\" id=\"btnCnx\" style=\"border:0;\" class=\"btn btn-success\" /><br/>

                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_8d4ad76dc6096173c43058e7b3fbb712537d395a6506cdcc001a487852e1ced8->leave($__internal_8d4ad76dc6096173c43058e7b3fbb712537d395a6506cdcc001a487852e1ced8_prof);

        
        $__internal_16dc2a6452ad9656896813acf7f3c0fdd3c49cde64c229003aba1424845005fa->leave($__internal_16dc2a6452ad9656896813acf7f3c0fdd3c49cde64c229003aba1424845005fa_prof);

    }

    public function getTemplateName()
    {
        return "sebcomBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  110 => 22,  108 => 21,  96 => 11,  87 => 10,  69 => 9,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <style type=\"text/css\">

        body {background-image:url(\"{{ asset('bundles/images/backgroundLogin.jpg')}}\");
        background-size: cover;}
    </style>
{% endblock %}
{% block title %}Login{% endblock %}
{% block body %}



    <form name=\"f\" action=\"/login\" class=\"form-horizontal\" method=\"POST\">
        <div class=\"inner-container\">
            <div class=\"box\">
                <div id=\"noblur\">
                    <h1> Login </h1>
                    <input type=\"text\" name=\"Pseudo\" onkeyup=\"inputValid()\" id=\"usrId\" class=\"form-control\" placeholder=\"Pseudo\" />
                    <input type=\"password\" name=\"Password\" id=\"pwdId\" class=\"form-control\" placeholder=\"Password\"  />
                    {% if error is defined %}
                        <span class=\"error\">{{ error }}</span>
                    {% endif %}
                    <input type=\"submit\" id=\"btnCnx\" style=\"border:0;\" class=\"btn btn-success\" /><br/>

                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "sebcomBundle:Default:login.html.twig", "E:\\wamp\\www\\sebcoms\\src\\sebcomBundle/Resources/views/Default/login.html.twig");
    }
}
