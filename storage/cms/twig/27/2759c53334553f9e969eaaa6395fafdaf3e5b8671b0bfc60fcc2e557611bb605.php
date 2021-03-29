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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/sponsors.htm */
class __TwigTemplate_9d32b7265d8724d78f2016eeb7c1d88c0f9deca076695bf5e4c636117a2e8cc0 extends \Twig\Template
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
        $filters = array("theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<section id=\"sponsors\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow bounceIn col-md-12 col-sm-12\">
                <div class=\"section-title\">
                    <h2>Our Sponsors</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.3s\">
                <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsor-img1.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.6s\">
                <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsor-img2.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.9s\">
                <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsor-img3.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"1s\">
                <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsor-img4.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/sponsors.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  90 => 21,  83 => 17,  76 => 13,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"sponsors\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow bounceIn col-md-12 col-sm-12\">
                <div class=\"section-title\">
                    <h2>Our Sponsors</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.3s\">
                <img src=\"{{ 'assets/images/sponsor-img1.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.6s\">
                <img src=\"{{ 'assets/images/sponsor-img2.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.9s\">
                <img src=\"{{ 'assets/images/sponsor-img3.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"1s\">
                <img src=\"{{ 'assets/images/sponsor-img4.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/sponsors.htm", "");
    }
}
