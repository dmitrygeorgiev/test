<?php

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_318d28f7f5bd87ff2a9f95545fb98389c2395b00f6df48371426f7a65fc0a7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@classy/misc/status-messages.html.twig");

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_messages($context, array $blocks = array())
    {
        // line 26
        echo "  ";
        if ((!twig_test_empty((isset($context["message_list"]) ? $context["message_list"] : null)))) {
            // line 27
            echo "    <div id=\"messages\">
      <div class=\"section clearfix\">
        ";
            // line 29
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 29,  34 => 27,  31 => 26,  28 => 25,);
    }
}
