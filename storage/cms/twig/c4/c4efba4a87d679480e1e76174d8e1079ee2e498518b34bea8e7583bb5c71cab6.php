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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/faq.htm */
class __TwigTemplate_bf11fc90ecfa609c5b68b81fb869539b377ba12b0a09eaec4e334724c308b385 extends \Twig\Template
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
        echo "<section id=\"faq\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center\">
                <div class=\"section-title\">
                    <h2>Do you have Questions?</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10\" data-wow-delay=\"0.9s\">
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">What is Responsive Design?</a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">What are latest UX Developments?</a>
                              </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                            <div class=\"panel-body\">
                                <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                           <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">What things about Social Media will be discussed?</a>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                            <div class=\"panel-body\">
                                <p>Aenean vulputate finibus justo et feugiat. Ut turpis lacus, dapibus quis justo id, porttitor tempor justo. Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa.</p>
                                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                            </div>
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
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/faq.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"faq\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center\">
                <div class=\"section-title\">
                    <h2>Do you have Questions?</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10\" data-wow-delay=\"0.9s\">
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">What is Responsive Design?</a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">What are latest UX Developments?</a>
                              </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                            <div class=\"panel-body\">
                                <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-default\">
                           <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">What things about Social Media will be discussed?</a>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                            <div class=\"panel-body\">
                                <p>Aenean vulputate finibus justo et feugiat. Ut turpis lacus, dapibus quis justo id, porttitor tempor justo. Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa.</p>
                                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/faq.htm", "");
    }
}
