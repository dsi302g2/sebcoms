<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e5031d41acbcb032689de3331c1652f9086f09fe9ad23427aad69fea6c052a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0be607705462feffb2bd8f8c23efd22d6ab9ef10294a669f47dff3887169ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0be607705462feffb2bd8f8c23efd22d6ab9ef10294a669f47dff3887169ca0->enter($__internal_b0be607705462feffb2bd8f8c23efd22d6ab9ef10294a669f47dff3887169ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dd38e8c7601d287d1f845e52798dd967d5d866f88eecff5d239035e1b2303828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd38e8c7601d287d1f845e52798dd967d5d866f88eecff5d239035e1b2303828->enter($__internal_dd38e8c7601d287d1f845e52798dd967d5d866f88eecff5d239035e1b2303828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b0be607705462feffb2bd8f8c23efd22d6ab9ef10294a669f47dff3887169ca0->leave($__internal_b0be607705462feffb2bd8f8c23efd22d6ab9ef10294a669f47dff3887169ca0_prof);

        
        $__internal_dd38e8c7601d287d1f845e52798dd967d5d866f88eecff5d239035e1b2303828->leave($__internal_dd38e8c7601d287d1f845e52798dd967d5d866f88eecff5d239035e1b2303828_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3df03e00e3f8c11027134f3a44b6b9f8004090eb885fc4527c159ffd1369329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3df03e00e3f8c11027134f3a44b6b9f8004090eb885fc4527c159ffd1369329->enter($__internal_d3df03e00e3f8c11027134f3a44b6b9f8004090eb885fc4527c159ffd1369329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b9af8e567aef9dcddd0a6de3ab9231d3d177d84086e6a6996e17b5397870c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9af8e567aef9dcddd0a6de3ab9231d3d177d84086e6a6996e17b5397870c2a->enter($__internal_7b9af8e567aef9dcddd0a6de3ab9231d3d177d84086e6a6996e17b5397870c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7b9af8e567aef9dcddd0a6de3ab9231d3d177d84086e6a6996e17b5397870c2a->leave($__internal_7b9af8e567aef9dcddd0a6de3ab9231d3d177d84086e6a6996e17b5397870c2a_prof);

        
        $__internal_d3df03e00e3f8c11027134f3a44b6b9f8004090eb885fc4527c159ffd1369329->leave($__internal_d3df03e00e3f8c11027134f3a44b6b9f8004090eb885fc4527c159ffd1369329_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_64820eab8076a356504e7b4ed23035155960a192e9daeb53b0a5e60e2a31da1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64820eab8076a356504e7b4ed23035155960a192e9daeb53b0a5e60e2a31da1e->enter($__internal_64820eab8076a356504e7b4ed23035155960a192e9daeb53b0a5e60e2a31da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dc5afa133a7c2484c3f5c931d9f978a384edbff3fae498ab37f57d8b3670ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc5afa133a7c2484c3f5c931d9f978a384edbff3fae498ab37f57d8b3670ac8->enter($__internal_2dc5afa133a7c2484c3f5c931d9f978a384edbff3fae498ab37f57d8b3670ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2dc5afa133a7c2484c3f5c931d9f978a384edbff3fae498ab37f57d8b3670ac8->leave($__internal_2dc5afa133a7c2484c3f5c931d9f978a384edbff3fae498ab37f57d8b3670ac8_prof);

        
        $__internal_64820eab8076a356504e7b4ed23035155960a192e9daeb53b0a5e60e2a31da1e->leave($__internal_64820eab8076a356504e7b4ed23035155960a192e9daeb53b0a5e60e2a31da1e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ebd866fa9e71ea991b8cd75838b93b3264605b5f51710a14447934a56e7799a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebd866fa9e71ea991b8cd75838b93b3264605b5f51710a14447934a56e7799a->enter($__internal_8ebd866fa9e71ea991b8cd75838b93b3264605b5f51710a14447934a56e7799a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eb5d25abd76b54b35a13b0fc515e329c0bff6ce001186cd262317ba951e9c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb5d25abd76b54b35a13b0fc515e329c0bff6ce001186cd262317ba951e9c88->enter($__internal_3eb5d25abd76b54b35a13b0fc515e329c0bff6ce001186cd262317ba951e9c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3eb5d25abd76b54b35a13b0fc515e329c0bff6ce001186cd262317ba951e9c88->leave($__internal_3eb5d25abd76b54b35a13b0fc515e329c0bff6ce001186cd262317ba951e9c88_prof);

        
        $__internal_8ebd866fa9e71ea991b8cd75838b93b3264605b5f51710a14447934a56e7799a->leave($__internal_8ebd866fa9e71ea991b8cd75838b93b3264605b5f51710a14447934a56e7799a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "E:\\wamp\\www\\sebcoms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
