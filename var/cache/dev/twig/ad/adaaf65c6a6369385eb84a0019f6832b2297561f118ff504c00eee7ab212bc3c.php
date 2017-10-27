<?php

/* menu.html.twig */
class __TwigTemplate_4339e801ad634bdf71c9ecf6c5b28d2aae7a56fd1b60eae700e49d1957816abb extends Twig_Template
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
        $__internal_d742c505ef367b1823f2d1a117794ea3326fa57eb4c6d97ccf65b3d7c5605178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742c505ef367b1823f2d1a117794ea3326fa57eb4c6d97ccf65b3d7c5605178->enter($__internal_d742c505ef367b1823f2d1a117794ea3326fa57eb4c6d97ccf65b3d7c5605178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_a107f469c8478b83681d8888c07a394d702ec54fad403751e6d3490bd3f81be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a107f469c8478b83681d8888c07a394d702ec54fad403751e6d3490bd3f81be9->enter($__internal_a107f469c8478b83681d8888c07a394d702ec54fad403751e6d3490bd3f81be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/js/jquery.js"), "html", null, true);
        echo "\" ></script>

    <script src=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>


    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <meta charset=\"UTF-8\">
    <title>Menu</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body style=\"background: linear-gradient(to left,#602020,#ffb380,#66004d);\">
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/InputTest.js"), "html", null, true);
        echo "\"></script>
";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "</body>
</html>
";
        
        $__internal_d742c505ef367b1823f2d1a117794ea3326fa57eb4c6d97ccf65b3d7c5605178->leave($__internal_d742c505ef367b1823f2d1a117794ea3326fa57eb4c6d97ccf65b3d7c5605178_prof);

        
        $__internal_a107f469c8478b83681d8888c07a394d702ec54fad403751e6d3490bd3f81be9->leave($__internal_a107f469c8478b83681d8888c07a394d702ec54fad403751e6d3490bd3f81be9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99de5ef6a36fe2a0a9760d4e5658db3cd9e772c22a2ff92575636092d82ea0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99de5ef6a36fe2a0a9760d4e5658db3cd9e772c22a2ff92575636092d82ea0cc->enter($__internal_99de5ef6a36fe2a0a9760d4e5658db3cd9e772c22a2ff92575636092d82ea0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a4db80cc01796ad5110f9c5b4d392118fc73e9a324d31126459e424ae1d602c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4db80cc01796ad5110f9c5b4d392118fc73e9a324d31126459e424ae1d602c->enter($__internal_1a4db80cc01796ad5110f9c5b4d392118fc73e9a324d31126459e424ae1d602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1a4db80cc01796ad5110f9c5b4d392118fc73e9a324d31126459e424ae1d602c->leave($__internal_1a4db80cc01796ad5110f9c5b4d392118fc73e9a324d31126459e424ae1d602c_prof);

        
        $__internal_99de5ef6a36fe2a0a9760d4e5658db3cd9e772c22a2ff92575636092d82ea0cc->leave($__internal_99de5ef6a36fe2a0a9760d4e5658db3cd9e772c22a2ff92575636092d82ea0cc_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09a9d9cf5b48e5bc61a19d580f0308379e583ecdf97b637e670c95e1e0ea91ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a9d9cf5b48e5bc61a19d580f0308379e583ecdf97b637e670c95e1e0ea91ee->enter($__internal_09a9d9cf5b48e5bc61a19d580f0308379e583ecdf97b637e670c95e1e0ea91ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44ddf49ce894a3793e6844e22b48544246792236d3e8dca8238ea16f17ee59a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ddf49ce894a3793e6844e22b48544246792236d3e8dca8238ea16f17ee59a7->enter($__internal_44ddf49ce894a3793e6844e22b48544246792236d3e8dca8238ea16f17ee59a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_44ddf49ce894a3793e6844e22b48544246792236d3e8dca8238ea16f17ee59a7->leave($__internal_44ddf49ce894a3793e6844e22b48544246792236d3e8dca8238ea16f17ee59a7_prof);

        
        $__internal_09a9d9cf5b48e5bc61a19d580f0308379e583ecdf97b637e670c95e1e0ea91ee->leave($__internal_09a9d9cf5b48e5bc61a19d580f0308379e583ecdf97b637e670c95e1e0ea91ee_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_43f0f9b13097767f2c9c6dab0c5c9c79dc316aa6d997ad54af74e1520deb3528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f0f9b13097767f2c9c6dab0c5c9c79dc316aa6d997ad54af74e1520deb3528->enter($__internal_43f0f9b13097767f2c9c6dab0c5c9c79dc316aa6d997ad54af74e1520deb3528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c6fb88565d2c0a90370f4ee0db811ded13152964aeec5b879950794312d88d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6fb88565d2c0a90370f4ee0db811ded13152964aeec5b879950794312d88d9->enter($__internal_3c6fb88565d2c0a90370f4ee0db811ded13152964aeec5b879950794312d88d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c6fb88565d2c0a90370f4ee0db811ded13152964aeec5b879950794312d88d9->leave($__internal_3c6fb88565d2c0a90370f4ee0db811ded13152964aeec5b879950794312d88d9_prof);

        
        $__internal_43f0f9b13097767f2c9c6dab0c5c9c79dc316aa6d997ad54af74e1520deb3528->leave($__internal_43f0f9b13097767f2c9c6dab0c5c9c79dc316aa6d997ad54af74e1520deb3528_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c806c076d01d38c67839bccdcd16feb80e390dac54adbe3dec24aeb6f7fc7347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c806c076d01d38c67839bccdcd16feb80e390dac54adbe3dec24aeb6f7fc7347->enter($__internal_c806c076d01d38c67839bccdcd16feb80e390dac54adbe3dec24aeb6f7fc7347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_efced4fa97af49308487bfdaca12770daff0ec830ef2303428717220f46fe25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efced4fa97af49308487bfdaca12770daff0ec830ef2303428717220f46fe25f->enter($__internal_efced4fa97af49308487bfdaca12770daff0ec830ef2303428717220f46fe25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_efced4fa97af49308487bfdaca12770daff0ec830ef2303428717220f46fe25f->leave($__internal_efced4fa97af49308487bfdaca12770daff0ec830ef2303428717220f46fe25f_prof);

        
        $__internal_c806c076d01d38c67839bccdcd16feb80e390dac54adbe3dec24aeb6f7fc7347->leave($__internal_c806c076d01d38c67839bccdcd16feb80e390dac54adbe3dec24aeb6f7fc7347_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 23,  125 => 21,  108 => 15,  90 => 5,  78 => 24,  76 => 23,  71 => 22,  69 => 21,  63 => 18,  59 => 16,  57 => 15,  51 => 12,  46 => 10,  41 => 8,  35 => 5,  29 => 1,);
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


    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bootstrap/css/bootstrap.min.css') }}\">

    <script src=\"{{ asset('bundles/bootstrap/js/jquery.js') }}\" ></script>

    <script src=\" {{ asset('bundles/bootstrap/js/bootstrap.min.js') }}\" ></script>


    {% block stylesheets %}{% endblock %}
    <meta charset=\"UTF-8\">
    <title>Menu</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body style=\"background: linear-gradient(to left,#602020,#ffb380,#66004d);\">
{% block body %}{% endblock %}
<script type=\"text/javascript\" src=\"{{ asset('bundles/js/InputTest.js')}}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "menu.html.twig", "E:\\wamp\\www\\sebcoms\\app\\Resources\\views\\menu.html.twig");
    }
}
