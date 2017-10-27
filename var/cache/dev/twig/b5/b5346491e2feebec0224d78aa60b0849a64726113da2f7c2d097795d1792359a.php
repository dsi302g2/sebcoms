<?php

/* sebcomBundle:Default:ajoutcat.html.twig */
class __TwigTemplate_64ea89fdca0f28b4d4e425a8dd8309be629ac130ba593f91abadfafe17c5fb3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305b91f0d9985bbf7667b946f77d4a892f209e3e40cd30e80aa060578288874e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305b91f0d9985bbf7667b946f77d4a892f209e3e40cd30e80aa060578288874e->enter($__internal_305b91f0d9985bbf7667b946f77d4a892f209e3e40cd30e80aa060578288874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sebcomBundle:Default:ajoutcat.html.twig"));

        $__internal_2a7c14bfe75b8d7effc64479680fc2dd7bf016ad132a7ee60a2f63ba9161bf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7c14bfe75b8d7effc64479680fc2dd7bf016ad132a7ee60a2f63ba9161bf8d->enter($__internal_2a7c14bfe75b8d7effc64479680fc2dd7bf016ad132a7ee60a2f63ba9161bf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sebcomBundle:Default:ajoutcat.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_305b91f0d9985bbf7667b946f77d4a892f209e3e40cd30e80aa060578288874e->leave($__internal_305b91f0d9985bbf7667b946f77d4a892f209e3e40cd30e80aa060578288874e_prof);

        
        $__internal_2a7c14bfe75b8d7effc64479680fc2dd7bf016ad132a7ee60a2f63ba9161bf8d->leave($__internal_2a7c14bfe75b8d7effc64479680fc2dd7bf016ad132a7ee60a2f63ba9161bf8d_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a187648128abac03ab2f5673a2e2591974ab3fd51d623ea88a4d0185a3a9ce8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a187648128abac03ab2f5673a2e2591974ab3fd51d623ea88a4d0185a3a9ce8c->enter($__internal_a187648128abac03ab2f5673a2e2591974ab3fd51d623ea88a4d0185a3a9ce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1ee5a45f8d27969ef5c10ca7ce7f6b87a0b51a71915d04a8e4756087e865875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ee5a45f8d27969ef5c10ca7ce7f6b87a0b51a71915d04a8e4756087e865875->enter($__internal_e1ee5a45f8d27969ef5c10ca7ce7f6b87a0b51a71915d04a8e4756087e865875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/Style/StyleFileAjoutCat.css"), "html", null, true);
        echo "\">
    <script src=\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_e1ee5a45f8d27969ef5c10ca7ce7f6b87a0b51a71915d04a8e4756087e865875->leave($__internal_e1ee5a45f8d27969ef5c10ca7ce7f6b87a0b51a71915d04a8e4756087e865875_prof);

        
        $__internal_a187648128abac03ab2f5673a2e2591974ab3fd51d623ea88a4d0185a3a9ce8c->leave($__internal_a187648128abac03ab2f5673a2e2591974ab3fd51d623ea88a4d0185a3a9ce8c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_13b1ff2d6dffca47c6fc8c198754d07680344e89aeaa0c61b6f7f117e641c54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b1ff2d6dffca47c6fc8c198754d07680344e89aeaa0c61b6f7f117e641c54a->enter($__internal_13b1ff2d6dffca47c6fc8c198754d07680344e89aeaa0c61b6f7f117e641c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b27b0211685bf6aae79872dd2a28c0891436282baa2605933fb6c1783397a0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27b0211685bf6aae79872dd2a28c0891436282baa2605933fb6c1783397a0d8->enter($__internal_b27b0211685bf6aae79872dd2a28c0891436282baa2605933fb6c1783397a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!--
<?php
\$n = \$bdd->query('SELECT * FROM categorie where parentid =0 ;');
\$a = \$bdd->query('SELECT * FROM categorie ;');
?>
-->



<form name=\"f\" action=\"ajoutcatsql.php\" class=\"form-horizontal\" method=\"POST\">
    <div class=\"container\" style=\"margin-top: 3%\">

        <div class=\"panel panel-default\" style=\"background: none\">
            <div class=\"panel-heading\">Ajout Catégorie</div>
            <div class=\"panel-body\">

                <p>Nom </p>
                <input type=\"text\" onkeyup=\"inputValidV2()\" class=\"form-control\" id=\"nomCat\" name=\"nom\" />

                <p>Parent </p>

                <div  class=\"form-group\" style=\"width: 100%; margin-left: 0%\">

                    <select class=\"form-control\" id=\"sel1\" name=\"parent\">
                        <option value=\"0\">
                            None
                        </option>
                        ";
        // line 36
        if (array_key_exists("cat", $context)) {
            // line 37
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 38
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\">
                            ";
                // line 39
                if (array_key_exists("cat", $context)) {
                    // line 40
                    echo "                                <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
                    echo "</th>
                            ";
                }
                // line 42
                echo "                        </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        ";
        }
        // line 45
        echo "                        <!-- other options mel base de donnée : code symfony -->
                    </select>



                </div><br/>
                <input type=\"submit\" id=\"btnAjt\"  value=\"Ajouter\" class=\"btn btn-success btn-block\" /><br/>
            </div>


        </div>
        <br/>
        <hr WIDTH=\"100%\" />

        <input type=\"text\" style=\"float: right;margin-bottom: 2%\" id=\"rech\" name=\"search\" placeholder=\"Search.. \">



        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Nom Catégorie</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 72
        if (array_key_exists("cat", $context)) {
            // line 73
            echo "
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 75
                echo "                <tr>
                ";
                // line 76
                if (array_key_exists("cat", $context)) {
                    // line 77
                    echo "                <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
                    echo "</th>
                ";
                }
                // line 79
                echo "                <th><a href=\"modifiercat.php?x='<?php echo \$donnees['id']?>'\">Modifier      </a><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_delete", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a></th>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            ";
        }
        // line 83
        echo "            ";
        if (array_key_exists("error", $context)) {
            // line 84
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</th>
            ";
        }
        // line 86
        echo "


            </tbody>
        </table>
    </div>
</form>
";
        
        $__internal_b27b0211685bf6aae79872dd2a28c0891436282baa2605933fb6c1783397a0d8->leave($__internal_b27b0211685bf6aae79872dd2a28c0891436282baa2605933fb6c1783397a0d8_prof);

        
        $__internal_13b1ff2d6dffca47c6fc8c198754d07680344e89aeaa0c61b6f7f117e641c54a->leave($__internal_13b1ff2d6dffca47c6fc8c198754d07680344e89aeaa0c61b6f7f117e641c54a_prof);

    }

    public function getTemplateName()
    {
        return "sebcomBundle:Default:ajoutcat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 86,  207 => 84,  204 => 83,  201 => 82,  191 => 79,  185 => 77,  183 => 76,  180 => 75,  176 => 74,  173 => 73,  171 => 72,  142 => 45,  139 => 44,  132 => 42,  126 => 40,  124 => 39,  119 => 38,  114 => 37,  112 => 36,  83 => 9,  74 => 8,  62 => 6,  58 => 5,  54 => 4,  48 => 2,  39 => 1,  29 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bootstrap/css/bootstrap.min.css') }}\">

    <script src=\"{{ asset('bundles/bootstrap/js/jquery.js') }}\" ></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/Style/StyleFileAjoutCat.css') }}\">
    <script src=\" {{ asset('bundles/bootstrap/js/bootstrap.min.js') }}\" ></script>
{% endblock %}
{% block body %}
<!--
<?php
\$n = \$bdd->query('SELECT * FROM categorie where parentid =0 ;');
\$a = \$bdd->query('SELECT * FROM categorie ;');
?>
-->



<form name=\"f\" action=\"ajoutcatsql.php\" class=\"form-horizontal\" method=\"POST\">
    <div class=\"container\" style=\"margin-top: 3%\">

        <div class=\"panel panel-default\" style=\"background: none\">
            <div class=\"panel-heading\">Ajout Catégorie</div>
            <div class=\"panel-body\">

                <p>Nom </p>
                <input type=\"text\" onkeyup=\"inputValidV2()\" class=\"form-control\" id=\"nomCat\" name=\"nom\" />

                <p>Parent </p>

                <div  class=\"form-group\" style=\"width: 100%; margin-left: 0%\">

                    <select class=\"form-control\" id=\"sel1\" name=\"parent\">
                        <option value=\"0\">
                            None
                        </option>
                        {% if cat is defined %}
                        {% for c in cat %}
                        <option value=\"{{ c.id }}\">
                            {% if cat is defined %}
                                <th>{{ c.nom }}</th>
                            {% endif %}
                        </option>
                        {% endfor %}
                        {% endif %}
                        <!-- other options mel base de donnée : code symfony -->
                    </select>



                </div><br/>
                <input type=\"submit\" id=\"btnAjt\"  value=\"Ajouter\" class=\"btn btn-success btn-block\" /><br/>
            </div>


        </div>
        <br/>
        <hr WIDTH=\"100%\" />

        <input type=\"text\" style=\"float: right;margin-bottom: 2%\" id=\"rech\" name=\"search\" placeholder=\"Search.. \">



        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Nom Catégorie</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            {% if cat is defined %}

            {% for c in cat %}
                <tr>
                {% if cat is defined %}
                <th>{{ c.nom }}</th>
                {% endif %}
                <th><a href=\"modifiercat.php?x='<?php echo \$donnees['id']?>'\">Modifier      </a><a href=\"{{ path('categorie_delete',{'id':c.id}) }}\">Supprimer</a></th>
                </tr>
                {% endfor %}
            {% endif %}
            {% if error is defined %}
                <th>{{ error }}</th>
            {% endif %}



            </tbody>
        </table>
    </div>
</form>
{% endblock %}
", "sebcomBundle:Default:ajoutcat.html.twig", "E:\\wamp\\www\\sebcoms\\src\\sebcomBundle/Resources/views/Default/ajoutcat.html.twig");
    }
}
