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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/video.htm */
class __TwigTemplate_275b8aabd7f3ec4e60736e5cccbe43cb20c734cb805f6f3debc1139177c66487 extends \Twig\Template
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
        echo "<section id=\"video\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-6 col-sm-10\" data-wow-delay=\"1.3s\">
                <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "video_header", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "video_subheader", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h3>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "video_content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-6 col-sm-10\" data-wow-delay=\"1.6s\">
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 13), "video_youtube", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"video\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-6 col-sm-10\" data-wow-delay=\"1.3s\">
                <h2>{{ this.theme.video_header }}</h2>
                <h3>{{ this.theme.video_subheader }}</h3>
                <p>{{ this.theme.video_content }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-6 col-sm-10\" data-wow-delay=\"1.6s\">
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" src=\"{{ this.theme.video_youtube }}\" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/video.htm", "");
    }
}
