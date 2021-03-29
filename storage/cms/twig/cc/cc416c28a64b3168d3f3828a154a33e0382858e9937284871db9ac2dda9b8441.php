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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/speakers.htm */
class __TwigTemplate_c145125af209931899407a011451aa46667187ea7e6a8d50ea436ae77955f7d9 extends \Twig\Template
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
        echo "<section id=\"speakers\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12 wow bounceIn\">
                <div class=\"section-title\">
                    <h2>Creative Speakers</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div id=\"owl-speakers\" class=\"owl-carousel\">

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speakers-img1.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Jenny Green</h3>
                                <h6>UI Designer</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speakers-img2.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>David Yoon</h3>
                                <h6>Creative Director</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speakers-img3.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Je Mary Lee</h3>
                                <h6>Web Specialist</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speakers-img4.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Johnathan Doe</h3>
                                <h6>Frontend Dev</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speakers-img5.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Elite Hamilton</h3>
                                <h6>Marketing Guru</h6>
                            </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/speakers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  118 => 46,  105 => 36,  92 => 26,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"speakers\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12 wow bounceIn\">
                <div class=\"section-title\">
                    <h2>Creative Speakers</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div id=\"owl-speakers\" class=\"owl-carousel\">

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img1.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Jenny Green</h3>
                                <h6>UI Designer</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img2.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>David Yoon</h3>
                                <h6>Creative Director</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img3.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Je Mary Lee</h3>
                                <h6>Web Specialist</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img4.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Johnathan Doe</h3>
                                <h6>Frontend Dev</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img5.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Elite Hamilton</h3>
                                <h6>Marketing Guru</h6>
                            </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/speakers.htm", "");
    }
}
