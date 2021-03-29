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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/register.htm */
class __TwigTemplate_45f255c42201ed2c88893f77084de17a27d14e4fa3f148289bd1f2761bffac86 extends \Twig\Template
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
        echo "<section id=\"register\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-7 col-sm-7\" data-wow-delay=\"0.6s\">
                <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "register_header", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "register_subheader", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h3>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "register_content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-5 col-sm-5\" data-wow-delay=\"1s\">
                <form action=\"#\" method=\"post\">
                    <input name=\"firstname\" type=\"text\" class=\"form-control\" id=\"firstname\" placeholder=\"First Name\">
                    <input name=\"lastname\" type=\"text\" class=\"form-control\" id=\"lastname\" placeholder=\"Last Name\">
                    <input name=\"phone\" type=\"telephone\" class=\"form-control\" id=\"phone\" placeholder=\"Phone Number\">
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email Address\">
                    <div class=\"col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10\">
                        <input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"REGISTER\">
                    </div>
                </form>
            </div>

            <div class=\"col-md-1\"></div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"register\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-7 col-sm-7\" data-wow-delay=\"0.6s\">
                <h2>{{ this.theme.register_header }}</h2>
                <h3>{{ this.theme.register_subheader }}</h3>
                <p>{{ this.theme.register_content }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-5 col-sm-5\" data-wow-delay=\"1s\">
                <form action=\"#\" method=\"post\">
                    <input name=\"firstname\" type=\"text\" class=\"form-control\" id=\"firstname\" placeholder=\"First Name\">
                    <input name=\"lastname\" type=\"text\" class=\"form-control\" id=\"lastname\" placeholder=\"Last Name\">
                    <input name=\"phone\" type=\"telephone\" class=\"form-control\" id=\"phone\" placeholder=\"Phone Number\">
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email Address\">
                    <div class=\"col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10\">
                        <input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"REGISTER\">
                    </div>
                </form>
            </div>

            <div class=\"col-md-1\"></div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/register.htm", "");
    }
}
