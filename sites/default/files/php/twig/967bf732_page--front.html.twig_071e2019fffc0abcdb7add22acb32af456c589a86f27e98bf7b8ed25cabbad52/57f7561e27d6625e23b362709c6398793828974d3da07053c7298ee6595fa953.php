<?php

/* themes/restaurants/templates/layout/page--front.html.twig */
class __TwigTemplate_fb0be302b6f5d8e7a1f518a7ad980730dafada61758b9080b937aa6f39144e02 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 46
        echo "
<div>
  <header>
    <div class=\"header\">
      <div class=\"header-main\">
        <div class=\"header-logo\">
          <a href=\"/\" class=\"icon-lafourchette\">
            <span class=\"hidden\">LaFourchette</span>
          </a>
        </div>
        <div class=\"header-separator\"></div>
      </div>
    </div>                        
    ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_header", array()), "html", null, true));
        echo "
  </header>

  <main>
    <div class=\"container\">
      <div class=\"clearfix\">
        <section class=\"hpContentContainer\">
           ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_front", array()), "html", null, true));
        echo "
        </section>
        <section class=\"hpRecommendationsContainer\">
           ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "recommendations_front", array()), "html", null, true));
        echo "
        </section>
      </div>
    </div>
  </main>
  <footer>
    <div class=\"mainContainer\">
      <div class=\"container\">
         ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
      </div>
    </div>
  </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/restaurants/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 77,  74 => 69,  68 => 66,  58 => 59,  43 => 46,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.highlighted: Items for the highlighted region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <div>*/
/*   <header>*/
/*     <div class="header">*/
/*       <div class="header-main">*/
/*         <div class="header-logo">*/
/*           <a href="/" class="icon-lafourchette">*/
/*             <span class="hidden">LaFourchette</span>*/
/*           </a>*/
/*         </div>*/
/*         <div class="header-separator"></div>*/
/*       </div>*/
/*     </div>                        */
/*     {{ page.sub_header }}*/
/*   </header>*/
/* */
/*   <main>*/
/*     <div class="container">*/
/*       <div class="clearfix">*/
/*         <section class="hpContentContainer">*/
/*            {{ page.content_front }}*/
/*         </section>*/
/*         <section class="hpRecommendationsContainer">*/
/*            {{ page.recommendations_front }}*/
/*         </section>*/
/*       </div>*/
/*     </div>*/
/*   </main>*/
/*   <footer>*/
/*     <div class="mainContainer">*/
/*       <div class="container">*/
/*          {{ page.footer }}*/
/*       </div>*/
/*     </div>*/
/*   </footer>*/
/* </div>*/
