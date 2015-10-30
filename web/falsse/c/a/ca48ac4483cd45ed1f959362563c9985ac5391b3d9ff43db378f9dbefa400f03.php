<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3d0a35ae68a2e28ff3776b795e89bc28665996b1c4113fdb6ca31701aa973421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b09466da032e7224f1d81dfbb2efed03749699b115eee6274c115cc9a2f0815 = $this->env->getExtension("native_profiler");
        $__internal_5b09466da032e7224f1d81dfbb2efed03749699b115eee6274c115cc9a2f0815->enter($__internal_5b09466da032e7224f1d81dfbb2efed03749699b115eee6274c115cc9a2f0815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b09466da032e7224f1d81dfbb2efed03749699b115eee6274c115cc9a2f0815->leave($__internal_5b09466da032e7224f1d81dfbb2efed03749699b115eee6274c115cc9a2f0815_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7464fa46ccdb063389d7ab6b3faf85f8c2afe86bf6be0ce1246f8d98b4d8d842 = $this->env->getExtension("native_profiler");
        $__internal_7464fa46ccdb063389d7ab6b3faf85f8c2afe86bf6be0ce1246f8d98b4d8d842->enter($__internal_7464fa46ccdb063389d7ab6b3faf85f8c2afe86bf6be0ce1246f8d98b4d8d842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7464fa46ccdb063389d7ab6b3faf85f8c2afe86bf6be0ce1246f8d98b4d8d842->leave($__internal_7464fa46ccdb063389d7ab6b3faf85f8c2afe86bf6be0ce1246f8d98b4d8d842_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f346072b6426aa9b242e402bd062ce6f9f26f739dd3643eb5542f7aef2363fd0 = $this->env->getExtension("native_profiler");
        $__internal_f346072b6426aa9b242e402bd062ce6f9f26f739dd3643eb5542f7aef2363fd0->enter($__internal_f346072b6426aa9b242e402bd062ce6f9f26f739dd3643eb5542f7aef2363fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f346072b6426aa9b242e402bd062ce6f9f26f739dd3643eb5542f7aef2363fd0->leave($__internal_f346072b6426aa9b242e402bd062ce6f9f26f739dd3643eb5542f7aef2363fd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02f57a9e15c57f2be13452f34fd6a1d93cfb98c9acc68908100aa69a8b21d22 = $this->env->getExtension("native_profiler");
        $__internal_d02f57a9e15c57f2be13452f34fd6a1d93cfb98c9acc68908100aa69a8b21d22->enter($__internal_d02f57a9e15c57f2be13452f34fd6a1d93cfb98c9acc68908100aa69a8b21d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d02f57a9e15c57f2be13452f34fd6a1d93cfb98c9acc68908100aa69a8b21d22->leave($__internal_d02f57a9e15c57f2be13452f34fd6a1d93cfb98c9acc68908100aa69a8b21d22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
