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
        $filters = array("theme" => 16);
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
        <div class=\"sponsors_inner\">
            <div class=\"row\">
                <div class=\"wow bounceIn col-md-12 col-sm-12 animated\"
                    style=\"visibility: visible; animation-name: bounceIn;\">
                    <div class=\"section-title\">
                        <h2>Наші спонсори</h2>
                        <p>Долучайтеся до нас</p>
                    </div>
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.3s\"
                    style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-1.jpg\" alt=\"\">
                    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsors/sponsor-1.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.6s\"
                    style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-2.png\" alt=\"\">
                    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsors/sponsor-2.png");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.9s\"
                    style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-3.png\" alt=\"\">
                    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsors/sponsor-3.png");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.9s\"
                    style=\"visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-4.jpg\" alt=\"\">
                    <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsors/sponsor-4.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.6s\"
                    style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-5.png\" alt=\"\">
                    <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsors/sponsor-5.png");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.3s\"
                    style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-6.jpg\" alt=\"\">
                    <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sponsors/sponsor-6.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
                </div>
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
        return array (  124 => 46,  115 => 40,  106 => 34,  97 => 28,  88 => 22,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"sponsors\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"sponsors_inner\">
            <div class=\"row\">
                <div class=\"wow bounceIn col-md-12 col-sm-12 animated\"
                    style=\"visibility: visible; animation-name: bounceIn;\">
                    <div class=\"section-title\">
                        <h2>Наші спонсори</h2>
                        <p>Долучайтеся до нас</p>
                    </div>
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.3s\"
                    style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-1.jpg\" alt=\"\">
                    <img src=\"{{ 'assets/images/sponsors/sponsor-1.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.6s\"
                    style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-2.png\" alt=\"\">
                    <img src=\"{{ 'assets/images/sponsors/sponsor-2.png'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.9s\"
                    style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-3.png\" alt=\"\">
                    <img src=\"{{ 'assets/images/sponsors/sponsor-3.png'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.9s\"
                    style=\"visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-4.jpg\" alt=\"\">
                    <img src=\"{{ 'assets/images/sponsors/sponsor-4.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.6s\"
                    style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-5.png\" alt=\"\">
                    <img src=\"{{ 'assets/images/sponsors/sponsor-5.png'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
                </div>

                <div class=\"wow fadeInUp col-md-2 col-sm-2 col-xs-2 animated\" data-wow-delay=\"0.3s\"
                    style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">
                    <img src=\"/img/Partners/sponsor-6.jpg\" alt=\"\">
                    <img src=\"{{ 'assets/images/sponsors/sponsor-6.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
                </div>
            </div>
        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/sponsors.htm", "");
    }
}
