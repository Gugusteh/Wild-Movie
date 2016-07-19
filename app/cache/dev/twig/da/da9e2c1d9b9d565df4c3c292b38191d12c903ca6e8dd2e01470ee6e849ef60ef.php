<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_66aa49edd15629f8983f5e93d160773602e9b85be5606b6bc4cd44bea8bdd4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8b81435cc5783b1046255986354ef8bf89fc8f56fd5b1ffa285e11e8d64d93f = $this->env->getExtension("native_profiler");
        $__internal_b8b81435cc5783b1046255986354ef8bf89fc8f56fd5b1ffa285e11e8d64d93f->enter($__internal_b8b81435cc5783b1046255986354ef8bf89fc8f56fd5b1ffa285e11e8d64d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b81435cc5783b1046255986354ef8bf89fc8f56fd5b1ffa285e11e8d64d93f->leave($__internal_b8b81435cc5783b1046255986354ef8bf89fc8f56fd5b1ffa285e11e8d64d93f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a4e44cd76e6f561d1417e3938797c9db11252fcec712dbf0695fe280b451ab = $this->env->getExtension("native_profiler");
        $__internal_98a4e44cd76e6f561d1417e3938797c9db11252fcec712dbf0695fe280b451ab->enter($__internal_98a4e44cd76e6f561d1417e3938797c9db11252fcec712dbf0695fe280b451ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-9\">
\t\t<div class=\"article-container\">
\t\t\t<h2 class=\"titre-article\">Titre de l'article</h2>
\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" class=\"img-article\"/>
\t\t\t<article>
\t\t\t\tLe Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
\t\t\t</article>
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<a href=\"\" class=\"lien-autre-article\">
\t\t\t<div class=\"autre-article\">
\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"image autre article\" class=\"img-autre-article\">
\t\t\t\t<h4 class=\"titre-autre-article\">Autre article</h4>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"\" class=\"lien-autre-article\">
\t\t\t<div class=\"autre-article\">
\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"image autre article\" class=\"img-autre-article\">
\t\t\t\t<h4 class=\"titre-autre-article\">Autre article</h4>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"\" class=\"lien-autre-article\">
\t\t\t<div class=\"autre-article\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"image autre article\" class=\"img-autre-article\">
\t\t\t\t<h4 class=\"titre-autre-article\">Autre article</h4>
\t\t\t</div>
\t\t</a>
\t</div>
";
        
        $__internal_98a4e44cd76e6f561d1417e3938797c9db11252fcec712dbf0695fe280b451ab->leave($__internal_98a4e44cd76e6f561d1417e3938797c9db11252fcec712dbf0695fe280b451ab_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  66 => 22,  57 => 16,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-9">*/
/* 		<div class="article-container">*/
/* 			<h2 class="titre-article">Titre de l'article</h2>*/
/* 			<img src="{{ asset('img/photo1.jpg') }}" class="img-article"/>*/
/* 			<article>*/
/* 				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.*/
/* 			</article>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<a href="" class="lien-autre-article">*/
/* 			<div class="autre-article">*/
/* 				<img src="{{ asset('img/photo1.jpg') }}" alt="image autre article" class="img-autre-article">*/
/* 				<h4 class="titre-autre-article">Autre article</h4>*/
/* 			</div>*/
/* 		</a>*/
/* 		<a href="" class="lien-autre-article">*/
/* 			<div class="autre-article">*/
/* 				<img src="{{ asset('img/photo1.jpg') }}" alt="image autre article" class="img-autre-article">*/
/* 				<h4 class="titre-autre-article">Autre article</h4>*/
/* 			</div>*/
/* 		</a>*/
/* 		<a href="" class="lien-autre-article">*/
/* 			<div class="autre-article">*/
/* 				<img src="{{ asset('img/photo1.jpg') }}" alt="image autre article" class="img-autre-article">*/
/* 				<h4 class="titre-autre-article">Autre article</h4>*/
/* 			</div>*/
/* 		</a>*/
/* 	</div>*/
/* {% endblock %}*/
