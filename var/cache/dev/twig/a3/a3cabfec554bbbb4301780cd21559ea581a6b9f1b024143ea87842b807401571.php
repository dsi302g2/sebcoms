<?php

/* base.html.twig */
class __TwigTemplate_429fb43c2efe8dc411128ef4c6ddeea6e45f89b25a33b5aab4318fa925b086db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_613e4893e37709b070f87313f90acbda33c7c05ecaf6c55a69d2f291e8357110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613e4893e37709b070f87313f90acbda33c7c05ecaf6c55a69d2f291e8357110->enter($__internal_613e4893e37709b070f87313f90acbda33c7c05ecaf6c55a69d2f291e8357110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1818c24628d78c572454b1268c0509a59b024ec7512eb65d18b3c280a27282df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1818c24628d78c572454b1268c0509a59b024ec7512eb65d18b3c280a27282df->enter($__internal_1818c24628d78c572454b1268c0509a59b024ec7512eb65d18b3c280a27282df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/Style/StyleFile.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/js/jquery.js"), "html", null, true);
        echo "\" ></script>

        <script src=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <meta charset=\"UTF-8\">
        <title>Admin</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/InputTest.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_613e4893e37709b070f87313f90acbda33c7c05ecaf6c55a69d2f291e8357110->leave($__internal_613e4893e37709b070f87313f90acbda33c7c05ecaf6c55a69d2f291e8357110_prof);

        
        $__internal_1818c24628d78c572454b1268c0509a59b024ec7512eb65d18b3c280a27282df->leave($__internal_1818c24628d78c572454b1268c0509a59b024ec7512eb65d18b3c280a27282df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7feea7527ce6bb8d5e47edf39615890ad3195ab043a4d166419bac0164c7d244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7feea7527ce6bb8d5e47edf39615890ad3195ab043a4d166419bac0164c7d244->enter($__internal_7feea7527ce6bb8d5e47edf39615890ad3195ab043a4d166419bac0164c7d244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04cb7c4b25de4d9e3c0b5b29c638626410acd06e285f0a2d068c5eeefd683b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cb7c4b25de4d9e3c0b5b29c638626410acd06e285f0a2d068c5eeefd683b9f->enter($__internal_04cb7c4b25de4d9e3c0b5b29c638626410acd06e285f0a2d068c5eeefd683b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_04cb7c4b25de4d9e3c0b5b29c638626410acd06e285f0a2d068c5eeefd683b9f->leave($__internal_04cb7c4b25de4d9e3c0b5b29c638626410acd06e285f0a2d068c5eeefd683b9f_prof);

        
        $__internal_7feea7527ce6bb8d5e47edf39615890ad3195ab043a4d166419bac0164c7d244->leave($__internal_7feea7527ce6bb8d5e47edf39615890ad3195ab043a4d166419bac0164c7d244_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32afea39288f541cfa8f2b2308881b4ec1aefb0faaa710084d43788f57ed0c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32afea39288f541cfa8f2b2308881b4ec1aefb0faaa710084d43788f57ed0c3a->enter($__internal_32afea39288f541cfa8f2b2308881b4ec1aefb0faaa710084d43788f57ed0c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_086337052bfc9272f53971fa276d32d2435f30e57f81b5d116878df5a0c8d513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086337052bfc9272f53971fa276d32d2435f30e57f81b5d116878df5a0c8d513->enter($__internal_086337052bfc9272f53971fa276d32d2435f30e57f81b5d116878df5a0c8d513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_086337052bfc9272f53971fa276d32d2435f30e57f81b5d116878df5a0c8d513->leave($__internal_086337052bfc9272f53971fa276d32d2435f30e57f81b5d116878df5a0c8d513_prof);

        
        $__internal_32afea39288f541cfa8f2b2308881b4ec1aefb0faaa710084d43788f57ed0c3a->leave($__internal_32afea39288f541cfa8f2b2308881b4ec1aefb0faaa710084d43788f57ed0c3a_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c45c3d131dc2aa6d5b6accd55e8ab892d7ef0ac6f01dcda6b1ca96730d2e91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c45c3d131dc2aa6d5b6accd55e8ab892d7ef0ac6f01dcda6b1ca96730d2e91f->enter($__internal_5c45c3d131dc2aa6d5b6accd55e8ab892d7ef0ac6f01dcda6b1ca96730d2e91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e118f2e205aa2a5b07aa93902537a701630d3bbd9c26faa96bd8c93953fd5bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e118f2e205aa2a5b07aa93902537a701630d3bbd9c26faa96bd8c93953fd5bbd->enter($__internal_e118f2e205aa2a5b07aa93902537a701630d3bbd9c26faa96bd8c93953fd5bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e118f2e205aa2a5b07aa93902537a701630d3bbd9c26faa96bd8c93953fd5bbd->leave($__internal_e118f2e205aa2a5b07aa93902537a701630d3bbd9c26faa96bd8c93953fd5bbd_prof);

        
        $__internal_5c45c3d131dc2aa6d5b6accd55e8ab892d7ef0ac6f01dcda6b1ca96730d2e91f->leave($__internal_5c45c3d131dc2aa6d5b6accd55e8ab892d7ef0ac6f01dcda6b1ca96730d2e91f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_041e45747ef67aa9fe8d90fdbbde617c5a3b9e261336a7c2ef75071b41efbdb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041e45747ef67aa9fe8d90fdbbde617c5a3b9e261336a7c2ef75071b41efbdb9->enter($__internal_041e45747ef67aa9fe8d90fdbbde617c5a3b9e261336a7c2ef75071b41efbdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96e5d25bb3c523065f7c5ec00b5b9b81a35cfea3a59f64ce96ff6c64d652ff21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e5d25bb3c523065f7c5ec00b5b9b81a35cfea3a59f64ce96ff6c64d652ff21->enter($__internal_96e5d25bb3c523065f7c5ec00b5b9b81a35cfea3a59f64ce96ff6c64d652ff21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96e5d25bb3c523065f7c5ec00b5b9b81a35cfea3a59f64ce96ff6c64d652ff21->leave($__internal_96e5d25bb3c523065f7c5ec00b5b9b81a35cfea3a59f64ce96ff6c64d652ff21_prof);

        
        $__internal_041e45747ef67aa9fe8d90fdbbde617c5a3b9e261336a7c2ef75071b41efbdb9->leave($__internal_041e45747ef67aa9fe8d90fdbbde617c5a3b9e261336a7c2ef75071b41efbdb9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 19,  121 => 17,  104 => 11,  86 => 5,  74 => 20,  72 => 19,  67 => 18,  65 => 17,  59 => 14,  55 => 12,  53 => 11,  49 => 10,  44 => 8,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/Style/StyleFile.css') }}\">

        <script src=\"{{ asset('bundles/bootstrap/js/jquery.js') }}\" ></script>

        <script src=\" {{ asset('bundles/bootstrap/js/bootstrap.min.js') }}\" ></script>
        {% block stylesheets %}{% endblock %}
        <meta charset=\"UTF-8\">
        <title>Admin</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/InputTest.js')}}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\wamp\\www\\sebcoms\\app\\Resources\\views\\base.html.twig");
    }
}
