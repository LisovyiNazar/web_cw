<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/footer.htm */
class __TwigTemplate_c1eb0511ecc576de67ffa118aff7f6664208f8c22c7c89690e8b8255c1ca70fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 8);
        $filters = array("raw" => 6, "escape" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <p class=\"wow fadeInUp\" data-wow-delay=\"0.6s\">";
        // line 6
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "footer_copyright", [], "any", false, false, true, 6), 6, $this->source);
        echo "</p>
                <ul class=\"social-icon\">
                    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "footer_facebook", [], "any", false, false, true, 8)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "footer_facebook_link", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" class=\"fa fa-facebook    wow fadeInUp\" data-wow-delay=\"1s\"  ></a></li>";
        }
        // line 9
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "footer_twitter", [], "any", false, false, true, 9)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "footer_twitter_link", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" class=\"fa fa-twitter     wow fadeInUp\" data-wow-delay=\"1.3s\"></a></li>";
        }
        // line 10
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "footer_dribble", [], "any", false, false, true, 10)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "footer_dribble_link", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" class=\"fa fa-dribbble    wow fadeInUp\" data-wow-delay=\"1.6s\"></a></li>";
        }
        // line 11
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "footer_behance", [], "any", false, false, true, 11)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "footer_behance_link", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" class=\"fa fa-behance     wow fadeInUp\" data-wow-delay=\"1.9s\"></a></li>";
        }
        // line 12
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "footer_googlep", [], "any", false, false, true, 12)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "footer_googlep_link", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" class=\"fa fa-google-plus wow fadeInUp\" data-wow-delay=\"2s\"  ></a></li>";
        }
        // line 13
        echo "                </ul>
            </div>

        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 13,  101 => 12,  94 => 11,  87 => 10,  80 => 9,  74 => 8,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <p class=\"wow fadeInUp\" data-wow-delay=\"0.6s\">{{ this.theme.footer_copyright|raw }}</p>
                <ul class=\"social-icon\">
                    {% if this.theme.footer_facebook %}<li><a href=\"{{ this.theme.footer_facebook_link }}\" class=\"fa fa-facebook    wow fadeInUp\" data-wow-delay=\"1s\"  ></a></li>{% endif %}
                    {% if this.theme.footer_twitter  %}<li><a href=\"{{ this.theme.footer_twitter_link  }}\" class=\"fa fa-twitter     wow fadeInUp\" data-wow-delay=\"1.3s\"></a></li>{% endif %}
                    {% if this.theme.footer_dribble  %}<li><a href=\"{{ this.theme.footer_dribble_link  }}\" class=\"fa fa-dribbble    wow fadeInUp\" data-wow-delay=\"1.6s\"></a></li>{% endif %}
                    {% if this.theme.footer_behance  %}<li><a href=\"{{ this.theme.footer_behance_link  }}\" class=\"fa fa-behance     wow fadeInUp\" data-wow-delay=\"1.9s\"></a></li>{% endif %}
                    {% if this.theme.footer_googlep  %}<li><a href=\"{{ this.theme.footer_googlep_link  }}\" class=\"fa fa-google-plus wow fadeInUp\" data-wow-delay=\"2s\"  ></a></li>{% endif %}
                </ul>
            </div>

        </div>
    </div>
</footer>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/footer.htm", "");
    }
}
