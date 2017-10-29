<?php

/* @CustomVariables/manage.twig */
class __TwigTemplate_5944472237566f2587807162c9516beedd72490b6a79eb360e307f4bad25b99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CustomVariables/manage.twig", 1);
        $this->blocks = array(
            'topcontrols' => array($this, 'block_topcontrols'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
    </div>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div piwik-manage-custom-vars>
";
    }

    public function getTemplateName()
    {
        return "@CustomVariables/manage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% block topcontrols %}
    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
    </div>
{% endblock %}

{% block content %}
    <div piwik-manage-custom-vars>
{% endblock %}", "@CustomVariables/manage.twig", "/home/leo/Document/Git/Hot123/hot123/public/piwik/plugins/CustomVariables/templates/manage.twig");
    }
}
