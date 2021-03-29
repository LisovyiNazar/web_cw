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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/intro.htm */
class __TwigTemplate_84cd3beffe6a9ef2968c81db1547f616afd6e58beefd9381ba4adb10bfaac5c6 extends \Twig\Template
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
        echo "<section id=\"intro\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <h3 class=\"wow bounceIn\" data-wow-delay=\"0.9s\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "intro_line1", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h3>
                <h1 class=\"wow fadeInUp\" data-wow-delay=\"1.6s\">";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "intro_line2", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1>
                <a href=\"#overview\" class=\"btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs\" data-wow-delay=\"2.3s\">LEARN MORE</a>
                <a href=\"#register\" class=\"btn btn-lg btn-danger smoothScroll wow fadeInUp\" data-wow-delay=\"2.3s\">REGISTER NOW</a>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"intro\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <h3 class=\"wow bounceIn\" data-wow-delay=\"0.9s\">{{ this.theme.intro_line1 }}</h3>
                <h1 class=\"wow fadeInUp\" data-wow-delay=\"1.6s\">{{ this.theme.intro_line2 }}</h1>
                <a href=\"#overview\" class=\"btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs\" data-wow-delay=\"2.3s\">LEARN MORE</a>
                <a href=\"#register\" class=\"btn btn-lg btn-danger smoothScroll wow fadeInUp\" data-wow-delay=\"2.3s\">REGISTER NOW</a>
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/intro.htm", "");
    }
}
