<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7671c5deca4b957eb89f92f01ed41783aba8befc0cb318ee647dd9fb009acff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d5800697077bfd60a7695453ab03be765460c3e4ecdda9245bbc51397ee5d31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5800697077bfd60a7695453ab03be765460c3e4ecdda9245bbc51397ee5d31d->enter($__internal_d5800697077bfd60a7695453ab03be765460c3e4ecdda9245bbc51397ee5d31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_336249cdf044247cb3bec94d5b0c8ae3f03811edaae4bf43f155039fdad7f4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336249cdf044247cb3bec94d5b0c8ae3f03811edaae4bf43f155039fdad7f4f9->enter($__internal_336249cdf044247cb3bec94d5b0c8ae3f03811edaae4bf43f155039fdad7f4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5800697077bfd60a7695453ab03be765460c3e4ecdda9245bbc51397ee5d31d->leave($__internal_d5800697077bfd60a7695453ab03be765460c3e4ecdda9245bbc51397ee5d31d_prof);

        
        $__internal_336249cdf044247cb3bec94d5b0c8ae3f03811edaae4bf43f155039fdad7f4f9->leave($__internal_336249cdf044247cb3bec94d5b0c8ae3f03811edaae4bf43f155039fdad7f4f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4d3f9a257b00571dd0571c4f10e370d7cc44bd9415ceebca2173186b33696d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d3f9a257b00571dd0571c4f10e370d7cc44bd9415ceebca2173186b33696d2->enter($__internal_d4d3f9a257b00571dd0571c4f10e370d7cc44bd9415ceebca2173186b33696d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3e0914422ff24efcdd0790dd22d413d8570b908d9d97034a962e9076ad6d44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e0914422ff24efcdd0790dd22d413d8570b908d9d97034a962e9076ad6d44b->enter($__internal_a3e0914422ff24efcdd0790dd22d413d8570b908d9d97034a962e9076ad6d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a3e0914422ff24efcdd0790dd22d413d8570b908d9d97034a962e9076ad6d44b->leave($__internal_a3e0914422ff24efcdd0790dd22d413d8570b908d9d97034a962e9076ad6d44b_prof);

        
        $__internal_d4d3f9a257b00571dd0571c4f10e370d7cc44bd9415ceebca2173186b33696d2->leave($__internal_d4d3f9a257b00571dd0571c4f10e370d7cc44bd9415ceebca2173186b33696d2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff948c3d0779ae771fcea0b506055d60731319b1bf52ee986fa21915fb8c7872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff948c3d0779ae771fcea0b506055d60731319b1bf52ee986fa21915fb8c7872->enter($__internal_ff948c3d0779ae771fcea0b506055d60731319b1bf52ee986fa21915fb8c7872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_954666ba48bb8adb870145c797fec954e876275f8ed46bee7bf8354cc51aac60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954666ba48bb8adb870145c797fec954e876275f8ed46bee7bf8354cc51aac60->enter($__internal_954666ba48bb8adb870145c797fec954e876275f8ed46bee7bf8354cc51aac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_954666ba48bb8adb870145c797fec954e876275f8ed46bee7bf8354cc51aac60->leave($__internal_954666ba48bb8adb870145c797fec954e876275f8ed46bee7bf8354cc51aac60_prof);

        
        $__internal_ff948c3d0779ae771fcea0b506055d60731319b1bf52ee986fa21915fb8c7872->leave($__internal_ff948c3d0779ae771fcea0b506055d60731319b1bf52ee986fa21915fb8c7872_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04ad28363b48d9661a5627717a8ee9322eb770ffee52511dcb6498c2f079ad62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ad28363b48d9661a5627717a8ee9322eb770ffee52511dcb6498c2f079ad62->enter($__internal_04ad28363b48d9661a5627717a8ee9322eb770ffee52511dcb6498c2f079ad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0e0a3b9f4c0269fde2e5f2def1becb1a8850ff1aee7f9fa9a875060b03cca4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e0a3b9f4c0269fde2e5f2def1becb1a8850ff1aee7f9fa9a875060b03cca4f->enter($__internal_d0e0a3b9f4c0269fde2e5f2def1becb1a8850ff1aee7f9fa9a875060b03cca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0e0a3b9f4c0269fde2e5f2def1becb1a8850ff1aee7f9fa9a875060b03cca4f->leave($__internal_d0e0a3b9f4c0269fde2e5f2def1becb1a8850ff1aee7f9fa9a875060b03cca4f_prof);

        
        $__internal_04ad28363b48d9661a5627717a8ee9322eb770ffee52511dcb6498c2f079ad62->leave($__internal_04ad28363b48d9661a5627717a8ee9322eb770ffee52511dcb6498c2f079ad62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\wamp\\www\\sebcoms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
