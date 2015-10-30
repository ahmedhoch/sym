<?php

/* base.html.twig */
class __TwigTemplate_a4efbb48e9f22659227b88377a102703f7733ad50cbf22eb2c4b7a33d8ad144f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddb730a1e8de45765f9794fa6ee45289592b2df4f10351b23f16f520d883bd62 = $this->env->getExtension("native_profiler");
        $__internal_ddb730a1e8de45765f9794fa6ee45289592b2df4f10351b23f16f520d883bd62->enter($__internal_ddb730a1e8de45765f9794fa6ee45289592b2df4f10351b23f16f520d883bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ddb730a1e8de45765f9794fa6ee45289592b2df4f10351b23f16f520d883bd62->leave($__internal_ddb730a1e8de45765f9794fa6ee45289592b2df4f10351b23f16f520d883bd62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d3ab15c534be4596b75312c7f7943bdc2a68141d9441a59574ea26bc528f32b = $this->env->getExtension("native_profiler");
        $__internal_1d3ab15c534be4596b75312c7f7943bdc2a68141d9441a59574ea26bc528f32b->enter($__internal_1d3ab15c534be4596b75312c7f7943bdc2a68141d9441a59574ea26bc528f32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d3ab15c534be4596b75312c7f7943bdc2a68141d9441a59574ea26bc528f32b->leave($__internal_1d3ab15c534be4596b75312c7f7943bdc2a68141d9441a59574ea26bc528f32b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2a9ae8c2071223d79b1ff3b0539519350a80adcd209e95d877975e9cb0b69ea = $this->env->getExtension("native_profiler");
        $__internal_e2a9ae8c2071223d79b1ff3b0539519350a80adcd209e95d877975e9cb0b69ea->enter($__internal_e2a9ae8c2071223d79b1ff3b0539519350a80adcd209e95d877975e9cb0b69ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2a9ae8c2071223d79b1ff3b0539519350a80adcd209e95d877975e9cb0b69ea->leave($__internal_e2a9ae8c2071223d79b1ff3b0539519350a80adcd209e95d877975e9cb0b69ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a961594012f5e4defec81d1cf640e1983645587e5ec4c1198cac04004abdd0ad = $this->env->getExtension("native_profiler");
        $__internal_a961594012f5e4defec81d1cf640e1983645587e5ec4c1198cac04004abdd0ad->enter($__internal_a961594012f5e4defec81d1cf640e1983645587e5ec4c1198cac04004abdd0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a961594012f5e4defec81d1cf640e1983645587e5ec4c1198cac04004abdd0ad->leave($__internal_a961594012f5e4defec81d1cf640e1983645587e5ec4c1198cac04004abdd0ad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c251686ab5ea258ab99982d7f32ddd8de5907fdb809dc8f4ab1bdc61c54a9ae4 = $this->env->getExtension("native_profiler");
        $__internal_c251686ab5ea258ab99982d7f32ddd8de5907fdb809dc8f4ab1bdc61c54a9ae4->enter($__internal_c251686ab5ea258ab99982d7f32ddd8de5907fdb809dc8f4ab1bdc61c54a9ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c251686ab5ea258ab99982d7f32ddd8de5907fdb809dc8f4ab1bdc61c54a9ae4->leave($__internal_c251686ab5ea258ab99982d7f32ddd8de5907fdb809dc8f4ab1bdc61c54a9ae4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
