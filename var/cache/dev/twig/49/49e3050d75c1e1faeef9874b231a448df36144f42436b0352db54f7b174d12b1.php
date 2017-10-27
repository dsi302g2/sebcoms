<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b4a186033becf563b602d840c5dbb698aea9622544e121fc67e793cdfb7c171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_056d015b6539e4a1bca73d71f0f0eaaa2496f8ffec3e96281ab04d8a753b3a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056d015b6539e4a1bca73d71f0f0eaaa2496f8ffec3e96281ab04d8a753b3a06->enter($__internal_056d015b6539e4a1bca73d71f0f0eaaa2496f8ffec3e96281ab04d8a753b3a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_42f572883f7c11706cb7bcbc0168154c56fcbdb06381a58ed88e2f161d767602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f572883f7c11706cb7bcbc0168154c56fcbdb06381a58ed88e2f161d767602->enter($__internal_42f572883f7c11706cb7bcbc0168154c56fcbdb06381a58ed88e2f161d767602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056d015b6539e4a1bca73d71f0f0eaaa2496f8ffec3e96281ab04d8a753b3a06->leave($__internal_056d015b6539e4a1bca73d71f0f0eaaa2496f8ffec3e96281ab04d8a753b3a06_prof);

        
        $__internal_42f572883f7c11706cb7bcbc0168154c56fcbdb06381a58ed88e2f161d767602->leave($__internal_42f572883f7c11706cb7bcbc0168154c56fcbdb06381a58ed88e2f161d767602_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b811258de015125e90a3e6e1520adf83117b34de9316f37c16f712a1974a6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b811258de015125e90a3e6e1520adf83117b34de9316f37c16f712a1974a6b5->enter($__internal_8b811258de015125e90a3e6e1520adf83117b34de9316f37c16f712a1974a6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ec8fca6396a45ea516b8d1e67fa826901265af2b88611d875437a1fcbafb678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec8fca6396a45ea516b8d1e67fa826901265af2b88611d875437a1fcbafb678->enter($__internal_2ec8fca6396a45ea516b8d1e67fa826901265af2b88611d875437a1fcbafb678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ec8fca6396a45ea516b8d1e67fa826901265af2b88611d875437a1fcbafb678->leave($__internal_2ec8fca6396a45ea516b8d1e67fa826901265af2b88611d875437a1fcbafb678_prof);

        
        $__internal_8b811258de015125e90a3e6e1520adf83117b34de9316f37c16f712a1974a6b5->leave($__internal_8b811258de015125e90a3e6e1520adf83117b34de9316f37c16f712a1974a6b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08125e73bb3c8aa86852e43dcc6299a16594219f940a9673d240ccfd5faf087d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08125e73bb3c8aa86852e43dcc6299a16594219f940a9673d240ccfd5faf087d->enter($__internal_08125e73bb3c8aa86852e43dcc6299a16594219f940a9673d240ccfd5faf087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_baae80eec1ca3870b1923ac350ec002e35782e69691819adb5ee0574651bf728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baae80eec1ca3870b1923ac350ec002e35782e69691819adb5ee0574651bf728->enter($__internal_baae80eec1ca3870b1923ac350ec002e35782e69691819adb5ee0574651bf728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_baae80eec1ca3870b1923ac350ec002e35782e69691819adb5ee0574651bf728->leave($__internal_baae80eec1ca3870b1923ac350ec002e35782e69691819adb5ee0574651bf728_prof);

        
        $__internal_08125e73bb3c8aa86852e43dcc6299a16594219f940a9673d240ccfd5faf087d->leave($__internal_08125e73bb3c8aa86852e43dcc6299a16594219f940a9673d240ccfd5faf087d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5feb647afccdad64491e62c78aacba34d09af15fdfd94a310820a1044d16d73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5feb647afccdad64491e62c78aacba34d09af15fdfd94a310820a1044d16d73b->enter($__internal_5feb647afccdad64491e62c78aacba34d09af15fdfd94a310820a1044d16d73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e671ce29f7ba435b696461973742a5751ce14f1dbd6e2614e68da4049c0721b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e671ce29f7ba435b696461973742a5751ce14f1dbd6e2614e68da4049c0721b->enter($__internal_0e671ce29f7ba435b696461973742a5751ce14f1dbd6e2614e68da4049c0721b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e671ce29f7ba435b696461973742a5751ce14f1dbd6e2614e68da4049c0721b->leave($__internal_0e671ce29f7ba435b696461973742a5751ce14f1dbd6e2614e68da4049c0721b_prof);

        
        $__internal_5feb647afccdad64491e62c78aacba34d09af15fdfd94a310820a1044d16d73b->leave($__internal_5feb647afccdad64491e62c78aacba34d09af15fdfd94a310820a1044d16d73b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp\\www\\sebcoms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
