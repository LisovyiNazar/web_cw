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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/overview.htm */
class __TwigTemplate_876d6acfece640f99d0f450bf00d5a875fee8d2a33fd83fee9b9c1e35d73535e extends \Twig\Template
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
        $filters = array("escape" => 6, "nl2br" => 7, "theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'nl2br', 'theme'],
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
        echo "<section id=\"overview\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.6s\">
                <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "overview_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h3>
                <p>";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "overview_content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true));
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.9s\">
                <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/overview-img.jpg");
        echo "\" class=\"img-responsive\" alt=\"Overview\">
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/overview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"overview\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.6s\">
                <h3>{{ this.theme.overview_title }}</h3>
                <p>{{ this.theme.overview_content|nl2br }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.9s\">
                <img src=\"{{ 'assets/images/overview-img.jpg'|theme }}\" class=\"img-responsive\" alt=\"Overview\">
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/overview.htm", "");
    }
}
