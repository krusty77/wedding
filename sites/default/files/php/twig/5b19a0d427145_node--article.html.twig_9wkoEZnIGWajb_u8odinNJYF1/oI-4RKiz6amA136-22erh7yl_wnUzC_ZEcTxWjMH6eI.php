<?php

/* themes/contrib/showcase_lite/templates/node--article.html.twig */
class __TwigTemplate_93256b59f630fedffef0d4f52555bac4ce2b820376d2b279703b36e1813f0089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/contrib/showcase_lite/templates/node--article.html.twig", 8);
        $this->blocks = array(
            'meta_area' => array($this, 'block_meta_area'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 11, "trans" => 30);
        $filters = array("format_date" => 28, "without" => 67);
        $functions = array("attach_library" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('format_date', 'without'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_meta_area($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 11
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 12
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
      <a href=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 16
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 17
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
  ";
        }
        // line 20
        echo "  ";
        if ((((isset($context["display_submitted"]) ? $context["display_submitted"] : null) || $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "comment", array())) || (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full") && $this->getAttribute((isset($context["mt_setting"]) ? $context["mt_setting"] : null), "reading_time", array())))) {
            // line 21
            echo "    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          ";
            // line 23
            if (((isset($context["display_submitted"]) ? $context["display_submitted"] : null) || ($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "comment", array()) && ((isset($context["comment_count"]) ? $context["comment_count"] : null) > 0)))) {
                // line 24
                echo "            <li class=\"inline-list__item\">
              ";
                // line 25
                if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
                    // line 26
                    echo "                <span";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node__submitted-info"), "method"), "html", null, true));
                    echo ">
                  <span class=\"node__submitted-date\">
                    ";
                    // line 28
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "createdtime", array()), "custom", "F d, Y")), "html", null, true));
                    echo "
                  </span>
                  ";
                    // line 30
                    echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), ));
                    // line 31
                    echo "                </span>
                ";
                    // line 32
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
                    echo "
              ";
                }
                // line 34
                echo "              ";
                if (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "comment", array()) && ((isset($context["comment_count"]) ? $context["comment_count"] : null) > 0))) {
                    // line 35
                    echo "                <span class=\"comments-count__counter text--colored\">
                  ";
                    // line 36
                    echo \Drupal::translation()->formatPlural(abs(                    // line 38
(isset($context["comment_count"]) ? $context["comment_count"] : null)), "1 comment", "@comment_count comments", array("@comment_count" =>                     // line 39
(isset($context["comment_count"]) ? $context["comment_count"] : null), ));
                    // line 41
                    echo "                </span>
              ";
                }
                // line 43
                echo "            </li>
          ";
            }
            // line 45
            echo "        ";
            if ((((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full") && $this->getAttribute((isset($context["mt_setting"]) ? $context["mt_setting"] : null), "reading_time", array()))) {
                // line 46
                echo "          <li class=\"inline-list__item\">
            ";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/reading-time"), "html", null, true));
                echo "
            <span class=\"reading-time\">
              <span class=\"text--dark\">";
                // line 49
                echo t("Time to read", array());
                echo "</span>
              ";
                // line 50
                if (((isset($context["minutes"]) ? $context["minutes"] : null) < 1)) {
                    // line 51
                    echo "                ";
                    echo t("less than 1 minute", array());
                    // line 52
                    echo "              ";
                } elseif (((isset($context["minutes"]) ? $context["minutes"] : null) < 2)) {
                    // line 53
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["minutes"]) ? $context["minutes"] : null), "html", null, true));
                    echo " ";
                    echo t("minute", array());
                    // line 54
                    echo "              ";
                } else {
                    // line 55
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["minutes"]) ? $context["minutes"] : null), "html", null, true));
                    echo " ";
                    echo t("minutes", array());
                    // line 56
                    echo "              ";
                }
                // line 57
                echo "            </span>
          </li>
        ";
            }
            // line 60
            echo "      </ul>
    </div>
  ";
        }
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-article"), "html", null, true));
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment"), "html", null, true));
        echo "
  </div>
  ";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  202 => 67,  196 => 65,  193 => 64,  186 => 60,  181 => 57,  178 => 56,  173 => 55,  170 => 54,  165 => 53,  162 => 52,  159 => 51,  157 => 50,  153 => 49,  148 => 47,  145 => 46,  142 => 45,  138 => 43,  134 => 41,  132 => 39,  131 => 38,  130 => 36,  127 => 35,  124 => 34,  119 => 32,  116 => 31,  114 => 30,  109 => 28,  103 => 26,  101 => 25,  98 => 24,  96 => 23,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  76 => 16,  68 => 13,  63 => 12,  61 => 11,  56 => 10,  53 => 9,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/showcase_lite/templates/node--article.html.twig", "/Users/eduardo/Sites/devdesktop/Ed and Fran/themes/contrib/showcase_lite/templates/node--article.html.twig");
    }
}
