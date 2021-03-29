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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/detail.htm */
class __TwigTemplate_bb2f8c0f36ad30a73acd3ae0590e76129d006aaeaeb750a24883e2c3775bad75 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<section id=\"detail\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-4 col-sm-4\" data-wow-delay=\"0.3s\">
                <i class=\"fa ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "detail_box1_icon", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\"></i>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "detail_box1_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h3>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "detail_box1_content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-4 col-sm-4\" data-wow-delay=\"0.6s\">
                <i class=\"fa ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "detail_box2_icon", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\"></i>
                <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 13), "detail_box2_title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</h3>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 14), "detail_box2_content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInRight col-md-4 col-sm-4\" data-wow-delay=\"0.9s\">
                <i class=\"fa ";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 18), "detail_box3_icon", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\"></i>
                <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 19), "detail_box3_title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</h3>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 20), "detail_box3_content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</p>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  103 => 19,  99 => 18,  92 => 14,  88 => 13,  84 => 12,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"detail\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-4 col-sm-4\" data-wow-delay=\"0.3s\">
                <i class=\"fa {{ this.theme.detail_box1_icon }}\"></i>
                <h3>{{ this.theme.detail_box1_title }}</h3>
                <p>{{ this.theme.detail_box1_content }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-4 col-sm-4\" data-wow-delay=\"0.6s\">
                <i class=\"fa {{ this.theme.detail_box2_icon }}\"></i>
                <h3>{{ this.theme.detail_box2_title }}</h3>
                <p>{{ this.theme.detail_box2_content }}</p>
            </div>

            <div class=\"wow fadeInRight col-md-4 col-sm-4\" data-wow-delay=\"0.9s\">
                <i class=\"fa {{ this.theme.detail_box3_icon }}\"></i>
                <h3>{{ this.theme.detail_box3_title }}</h3>
                <p>{{ this.theme.detail_box3_content }}</p>
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/detail.htm", "");
    }
}
