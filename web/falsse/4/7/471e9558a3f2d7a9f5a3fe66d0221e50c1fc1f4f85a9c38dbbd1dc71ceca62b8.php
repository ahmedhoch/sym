<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_7de47580577bcb11977c6d78d15e5ab2d23b827dd1ad94b2a8baff0ffedf0ef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33f075d24b1689f9fe8ec1089eb53c1b84c81397fbc16111e3da3d0cb8245a68 = $this->env->getExtension("native_profiler");
        $__internal_33f075d24b1689f9fe8ec1089eb53c1b84c81397fbc16111e3da3d0cb8245a68->enter($__internal_33f075d24b1689f9fe8ec1089eb53c1b84c81397fbc16111e3da3d0cb8245a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f075d24b1689f9fe8ec1089eb53c1b84c81397fbc16111e3da3d0cb8245a68->leave($__internal_33f075d24b1689f9fe8ec1089eb53c1b84c81397fbc16111e3da3d0cb8245a68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa92cd3ed8365d6c9c515f12cf014b92e433c0ab369f479be21ca912b64290ea = $this->env->getExtension("native_profiler");
        $__internal_fa92cd3ed8365d6c9c515f12cf014b92e433c0ab369f479be21ca912b64290ea->enter($__internal_fa92cd3ed8365d6c9c515f12cf014b92e433c0ab369f479be21ca912b64290ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fa92cd3ed8365d6c9c515f12cf014b92e433c0ab369f479be21ca912b64290ea->leave($__internal_fa92cd3ed8365d6c9c515f12cf014b92e433c0ab369f479be21ca912b64290ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd97864512a626cee380851b5a283bd57f9510ed91c789ee7d0c94fb2bbc3865 = $this->env->getExtension("native_profiler");
        $__internal_fd97864512a626cee380851b5a283bd57f9510ed91c789ee7d0c94fb2bbc3865->enter($__internal_fd97864512a626cee380851b5a283bd57f9510ed91c789ee7d0c94fb2bbc3865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fd97864512a626cee380851b5a283bd57f9510ed91c789ee7d0c94fb2bbc3865->leave($__internal_fd97864512a626cee380851b5a283bd57f9510ed91c789ee7d0c94fb2bbc3865_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9acd3aa8442ab61c3bc1fe86b34e9893316de8992045d1298365087035daeb6 = $this->env->getExtension("native_profiler");
        $__internal_b9acd3aa8442ab61c3bc1fe86b34e9893316de8992045d1298365087035daeb6->enter($__internal_b9acd3aa8442ab61c3bc1fe86b34e9893316de8992045d1298365087035daeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_b9acd3aa8442ab61c3bc1fe86b34e9893316de8992045d1298365087035daeb6->leave($__internal_b9acd3aa8442ab61c3bc1fe86b34e9893316de8992045d1298365087035daeb6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0956f0f3c44b42a2a147ab1fb07d74a76b974cf7ae27a3ebf5d6dff330761a4f = $this->env->getExtension("native_profiler");
        $__internal_0956f0f3c44b42a2a147ab1fb07d74a76b974cf7ae27a3ebf5d6dff330761a4f->enter($__internal_0956f0f3c44b42a2a147ab1fb07d74a76b974cf7ae27a3ebf5d6dff330761a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0956f0f3c44b42a2a147ab1fb07d74a76b974cf7ae27a3ebf5d6dff330761a4f->leave($__internal_0956f0f3c44b42a2a147ab1fb07d74a76b974cf7ae27a3ebf5d6dff330761a4f_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
