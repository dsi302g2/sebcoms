<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c40193700c43849b17745eb5abfeca5c8df45b7a4f99058185c5b98f641c1361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f905747f9bbe62f3178f13bc8ce4e4e9ca0d38d4f1e555aab80228c9d852219c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f905747f9bbe62f3178f13bc8ce4e4e9ca0d38d4f1e555aab80228c9d852219c->enter($__internal_f905747f9bbe62f3178f13bc8ce4e4e9ca0d38d4f1e555aab80228c9d852219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c5b2dfa2fc34fc18a7aa2d5e8aa3211b6f37fc783d9f08354e333c6d7ee8ca4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b2dfa2fc34fc18a7aa2d5e8aa3211b6f37fc783d9f08354e333c6d7ee8ca4b->enter($__internal_c5b2dfa2fc34fc18a7aa2d5e8aa3211b6f37fc783d9f08354e333c6d7ee8ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f905747f9bbe62f3178f13bc8ce4e4e9ca0d38d4f1e555aab80228c9d852219c->leave($__internal_f905747f9bbe62f3178f13bc8ce4e4e9ca0d38d4f1e555aab80228c9d852219c_prof);

        
        $__internal_c5b2dfa2fc34fc18a7aa2d5e8aa3211b6f37fc783d9f08354e333c6d7ee8ca4b->leave($__internal_c5b2dfa2fc34fc18a7aa2d5e8aa3211b6f37fc783d9f08354e333c6d7ee8ca4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36080b79875d69f33ae29942cc285d6b33b811a02c15dee0e0f73a4b8e559c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36080b79875d69f33ae29942cc285d6b33b811a02c15dee0e0f73a4b8e559c58->enter($__internal_36080b79875d69f33ae29942cc285d6b33b811a02c15dee0e0f73a4b8e559c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4d28ef372e2a06469382f2408a76525319e0972aa2e3072c2eaadd495b0a865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d28ef372e2a06469382f2408a76525319e0972aa2e3072c2eaadd495b0a865->enter($__internal_c4d28ef372e2a06469382f2408a76525319e0972aa2e3072c2eaadd495b0a865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c4d28ef372e2a06469382f2408a76525319e0972aa2e3072c2eaadd495b0a865->leave($__internal_c4d28ef372e2a06469382f2408a76525319e0972aa2e3072c2eaadd495b0a865_prof);

        
        $__internal_36080b79875d69f33ae29942cc285d6b33b811a02c15dee0e0f73a4b8e559c58->leave($__internal_36080b79875d69f33ae29942cc285d6b33b811a02c15dee0e0f73a4b8e559c58_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9291b75690bdb36d190f4421425d5ed3826a894fa94e5906ca5fadc5f7aa26dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9291b75690bdb36d190f4421425d5ed3826a894fa94e5906ca5fadc5f7aa26dc->enter($__internal_9291b75690bdb36d190f4421425d5ed3826a894fa94e5906ca5fadc5f7aa26dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a3fddf12c160d4d7ab51fa2b2047672a1f4d615a73c4da715cef80f8aa4a650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3fddf12c160d4d7ab51fa2b2047672a1f4d615a73c4da715cef80f8aa4a650->enter($__internal_3a3fddf12c160d4d7ab51fa2b2047672a1f4d615a73c4da715cef80f8aa4a650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a3fddf12c160d4d7ab51fa2b2047672a1f4d615a73c4da715cef80f8aa4a650->leave($__internal_3a3fddf12c160d4d7ab51fa2b2047672a1f4d615a73c4da715cef80f8aa4a650_prof);

        
        $__internal_9291b75690bdb36d190f4421425d5ed3826a894fa94e5906ca5fadc5f7aa26dc->leave($__internal_9291b75690bdb36d190f4421425d5ed3826a894fa94e5906ca5fadc5f7aa26dc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0f7f345ea508683c0b35d1d98e983f5b090ecd43ae72d108707e9b30586e23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f7f345ea508683c0b35d1d98e983f5b090ecd43ae72d108707e9b30586e23f->enter($__internal_d0f7f345ea508683c0b35d1d98e983f5b090ecd43ae72d108707e9b30586e23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c993cd876cb2a54b4db9eef71d3feb8c8212131c9b5b067c41d7df9c817397ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c993cd876cb2a54b4db9eef71d3feb8c8212131c9b5b067c41d7df9c817397ef->enter($__internal_c993cd876cb2a54b4db9eef71d3feb8c8212131c9b5b067c41d7df9c817397ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c993cd876cb2a54b4db9eef71d3feb8c8212131c9b5b067c41d7df9c817397ef->leave($__internal_c993cd876cb2a54b4db9eef71d3feb8c8212131c9b5b067c41d7df9c817397ef_prof);

        
        $__internal_d0f7f345ea508683c0b35d1d98e983f5b090ecd43ae72d108707e9b30586e23f->leave($__internal_d0f7f345ea508683c0b35d1d98e983f5b090ecd43ae72d108707e9b30586e23f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\wamp\\www\\sebcoms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
