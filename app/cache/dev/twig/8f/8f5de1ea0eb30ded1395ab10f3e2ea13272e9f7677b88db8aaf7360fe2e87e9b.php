<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3046769170c3ed285af9b3f3ff976749011c5ad91088c3aeefecf2ee3380067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8998b499265709e9fbb1a0b0a6e0b05779d94af34a86883b4440a4676d59cbfb = $this->env->getExtension("native_profiler");
        $__internal_8998b499265709e9fbb1a0b0a6e0b05779d94af34a86883b4440a4676d59cbfb->enter($__internal_8998b499265709e9fbb1a0b0a6e0b05779d94af34a86883b4440a4676d59cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8998b499265709e9fbb1a0b0a6e0b05779d94af34a86883b4440a4676d59cbfb->leave($__internal_8998b499265709e9fbb1a0b0a6e0b05779d94af34a86883b4440a4676d59cbfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eabb377d7d9e76d81160ba3bfacc710b8a7a6a667aecd3e41090fec009e00878 = $this->env->getExtension("native_profiler");
        $__internal_eabb377d7d9e76d81160ba3bfacc710b8a7a6a667aecd3e41090fec009e00878->enter($__internal_eabb377d7d9e76d81160ba3bfacc710b8a7a6a667aecd3e41090fec009e00878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eabb377d7d9e76d81160ba3bfacc710b8a7a6a667aecd3e41090fec009e00878->leave($__internal_eabb377d7d9e76d81160ba3bfacc710b8a7a6a667aecd3e41090fec009e00878_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a3587a223ee31f9ac436befbfff6150589cc3d21d800326058caad31ecb70b5 = $this->env->getExtension("native_profiler");
        $__internal_5a3587a223ee31f9ac436befbfff6150589cc3d21d800326058caad31ecb70b5->enter($__internal_5a3587a223ee31f9ac436befbfff6150589cc3d21d800326058caad31ecb70b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a3587a223ee31f9ac436befbfff6150589cc3d21d800326058caad31ecb70b5->leave($__internal_5a3587a223ee31f9ac436befbfff6150589cc3d21d800326058caad31ecb70b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15efe46c82daef68fe59c8f1c4a5b77342afe06e6f62f974e059cf3f17ac1d23 = $this->env->getExtension("native_profiler");
        $__internal_15efe46c82daef68fe59c8f1c4a5b77342afe06e6f62f974e059cf3f17ac1d23->enter($__internal_15efe46c82daef68fe59c8f1c4a5b77342afe06e6f62f974e059cf3f17ac1d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_15efe46c82daef68fe59c8f1c4a5b77342afe06e6f62f974e059cf3f17ac1d23->leave($__internal_15efe46c82daef68fe59c8f1c4a5b77342afe06e6f62f974e059cf3f17ac1d23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
