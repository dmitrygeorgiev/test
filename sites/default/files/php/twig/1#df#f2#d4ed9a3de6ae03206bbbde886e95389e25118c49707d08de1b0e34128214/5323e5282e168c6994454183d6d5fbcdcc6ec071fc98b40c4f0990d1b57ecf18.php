<?php

/* {# inline_template_start #}{{ release_version }} (<a href="{{ release_link }}" title="{{ project_title }}">{{ release_notes }}</a>) */
class __TwigTemplate_dff2d4ed9a3de6ae03206bbbde886e95389e25118c49707d08de1b0e34128214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_drupal_escape_filter($this->env, (isset($context["release_version"]) ? $context["release_version"] : null), "html", null, true);
        echo " (<a href=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["release_link"]) ? $context["release_link"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["project_title"]) ? $context["project_title"] : null), "html", null, true);
        echo "\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["release_notes"]) ? $context["release_notes"] : null), "html", null, true);
        echo "</a>)";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ release_version }} (<a href=\"{{ release_link }}\" title=\"{{ project_title }}\">{{ release_notes }}</a>)";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
