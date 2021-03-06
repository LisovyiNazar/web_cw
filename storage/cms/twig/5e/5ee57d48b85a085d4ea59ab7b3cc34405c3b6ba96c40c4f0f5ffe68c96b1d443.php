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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/contact.htm */
class __TwigTemplate_ca0dbe4bea5bd4b2d3d58b5a437b4eb06c0ad7cdaaf644ec4f4544c0903e9ceb extends \Twig\Template
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
        echo "<section id=\"contact\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-offset-1 col-md-5 col-sm-6\" data-wow-delay=\"0.6s\">
                <div class=\"contact_des\">
                    <h3>New Event</h3>
                    <p>Proin sodales convallis urna eu condimentum. Morbi tincidunt augue eros, vitae pretium mi condimentum eget. Suspendisse eu turpis sed elit pretium congue.</p>
                    <p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor.</p>
                    <a href=\"#\" class=\"btn btn-danger\">DOWNLOAD NOW</a>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-5 col-sm-6\" data-wow-delay=\"0.9s\">
                <div class=\"contact_detail\">
                    <div class=\"section-title\">
                        <h2>Keep in touch</h2>
                    </div>
                    <form action=\"#\" method=\"post\">
                        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Name\">
                          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
                          <textarea name=\"message\" rows=\"5\" class=\"form-control\" id=\"message\" placeholder=\"Message\"></textarea>
                        <div class=\"col-md-6 col-sm-10\">
                            <input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"SEND\">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-offset-1 col-md-5 col-sm-6\" data-wow-delay=\"0.6s\">
                <div class=\"contact_des\">
                    <h3>New Event</h3>
                    <p>Proin sodales convallis urna eu condimentum. Morbi tincidunt augue eros, vitae pretium mi condimentum eget. Suspendisse eu turpis sed elit pretium congue.</p>
                    <p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor.</p>
                    <a href=\"#\" class=\"btn btn-danger\">DOWNLOAD NOW</a>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-5 col-sm-6\" data-wow-delay=\"0.9s\">
                <div class=\"contact_detail\">
                    <div class=\"section-title\">
                        <h2>Keep in touch</h2>
                    </div>
                    <form action=\"#\" method=\"post\">
                        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Name\">
                          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
                          <textarea name=\"message\" rows=\"5\" class=\"form-control\" id=\"message\" placeholder=\"Message\"></textarea>
                        <div class=\"col-md-6 col-sm-10\">
                            <input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"SEND\">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/contact.htm", "");
    }
}
