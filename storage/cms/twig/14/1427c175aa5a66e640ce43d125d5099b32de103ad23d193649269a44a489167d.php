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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/navbar.htm */
class __TwigTemplate_2e0ad0f37f50ce0dc8e0d9815ad9ceeddb02bc96cd339b2572a0bf1a9a9efcdb extends \Twig\Template
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
        $tags = array("if" => 16);
        $filters = array("escape" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
    <div class=\"container\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
            </button>
            <a href=\"#\" class=\"navbar-brand\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "settings_brand", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</a>
        </div>

        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#intro\"    class=\"smoothScroll\">Intro</a></li>
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "settings_overview", [], "any", false, false, true, 16)) {
            echo "<li><a href=\"#overview\" class=\"smoothScroll\">Overview</a></li>";
        }
        // line 17
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 17), "settings_speakers", [], "any", false, false, true, 17)) {
            echo "<li><a href=\"#speakers\" class=\"smoothScroll\">Speakers</a></li>";
        }
        // line 18
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 18), "settings_program", [], "any", false, false, true, 18)) {
            echo "<li><a href=\"#program\"  class=\"smoothScroll\">Programs</a></li>";
        }
        // line 19
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 19), "settings_register", [], "any", false, false, true, 19)) {
            echo "<li><a href=\"#register\" class=\"smoothScroll\">Register</a></li>";
        }
        // line 20
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 20), "settings_venue", [], "any", false, false, true, 20)) {
            echo "<li><a href=\"#venue\"    class=\"smoothScroll\">Venue</a></li>";
        }
        // line 21
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 21), "settings_sponsors", [], "any", false, false, true, 21)) {
            echo "<li><a href=\"#sponsors\" class=\"smoothScroll\">Sponsors</a></li>";
        }
        // line 22
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "settings_contact", [], "any", false, false, true, 22)) {
            echo "<li><a href=\"#contact\"  class=\"smoothScroll\">Contact</a></li>";
        }
        // line 23
        echo "            </ul>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  111 => 22,  106 => 21,  101 => 20,  96 => 19,  91 => 18,  86 => 17,  82 => 16,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
    <div class=\"container\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
            </button>
            <a href=\"#\" class=\"navbar-brand\">{{ this.theme.settings_brand }}</a>
        </div>

        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#intro\"    class=\"smoothScroll\">Intro</a></li>
                {% if this.theme.settings_overview  %}<li><a href=\"#overview\" class=\"smoothScroll\">Overview</a></li>{% endif %}
                {% if this.theme.settings_speakers  %}<li><a href=\"#speakers\" class=\"smoothScroll\">Speakers</a></li>{% endif %}
                {% if this.theme.settings_program   %}<li><a href=\"#program\"  class=\"smoothScroll\">Programs</a></li>{% endif %}
                {% if this.theme.settings_register  %}<li><a href=\"#register\" class=\"smoothScroll\">Register</a></li>{% endif %}
                {% if this.theme.settings_venue     %}<li><a href=\"#venue\"    class=\"smoothScroll\">Venue</a></li>{% endif %}
                {% if this.theme.settings_sponsors  %}<li><a href=\"#sponsors\" class=\"smoothScroll\">Sponsors</a></li>{% endif %}
                {% if this.theme.settings_contact   %}<li><a href=\"#contact\"  class=\"smoothScroll\">Contact</a></li>{% endif %}
            </ul>
        </div>

    </div>
</div>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/navbar.htm", "");
    }
}
