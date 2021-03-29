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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/venue.htm */
class __TwigTemplate_54a9473dccc3c119ff27b8e8964062801dd9182d0bd444af92a5844774dc4e4e extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<section id=\"venue\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8\" data-wow-delay=\"0.9s\">
                <h2>Venue</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                <h4>New Event</h4>
                <h4>120 Market Street, Suite 110</h4>
                <h4>San Francisco, CA 10110</h4>
                <h4>Tel: 010-020-0120</h4>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/venue.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"venue\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8\" data-wow-delay=\"0.9s\">
                <h2>Venue</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                <h4>New Event</h4>
                <h4>120 Market Street, Suite 110</h4>
                <h4>San Francisco, CA 10110</h4>
                <h4>Tel: 010-020-0120</h4>
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/venue.htm", "");
    }
}
