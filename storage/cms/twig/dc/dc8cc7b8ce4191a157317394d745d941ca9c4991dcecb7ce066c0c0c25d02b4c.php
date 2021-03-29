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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/layouts/default.htm */
class __TwigTemplate_9af30ac705cdbf2ccb50f3ad05da369e972d62b2835435e6f71142df51a04c77 extends \Twig\Template
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
        $tags = array("partial" => 30, "if" => 33);
        $filters = array("escape" => 5, "theme" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/animate.css", 2 => "assets/css/font-awesome.min.css", 3 => "assets/css/owl.theme.css", 4 => "assets/css/owl.carousel.css", 5 => "assets/css/style.css"]);
        // line 22
        echo "\" rel=\"stylesheet\">
</head>
<body data-spy=\"scroll\" data-offset=\"50\" data-target=\".navbar-collapse\">

    <div class=\"preloader\">
        <div class=\"sk-rotating-plane\"></div>
    </div>

    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 33), "settings_overview", [], "any", false, false, true, 33)) {
            // line 34
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/overview"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/detail"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/video"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 38
        echo "
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 39), "settings_speakers", [], "any", false, false, true, 39)) {
            // line 40
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/speakers"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 42
        echo "
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 43), "settings_program", [], "any", false, false, true, 43)) {
            // line 44
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/program"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 46
        echo "
";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 47), "settings_register", [], "any", false, false, true, 47)) {
            // line 48
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/register"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 49
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/faq"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 51
        echo "
";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 52), "settings_venue", [], "any", false, false, true, 52)) {
            // line 53
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/venue"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 56), "settings_sponsors", [], "any", false, false, true, 56)) {
            // line 57
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/sponsors"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 59
        echo "
";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 60), "settings_contact", [], "any", false, false, true, 60)) {
            // line 61
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/contact"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 63
        echo "
    ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("template/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "
";
        // line 66
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 66), "settings_gotop", [], "any", false, false, true, 66)) {
            // line 67
            echo "    <a href=\"#back-top\" class=\"go-top\"><i class=\"fa fa-angle-up\"></i></a>
";
        }
        // line 69
        echo "
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/jquery.parallax.js", 3 => "assets/js/owl.carousel.min.js", 4 => "assets/js/smoothscroll.js", 5 => "assets/js/wow.min.js", 6 => "assets/js/custom.js", 7 => "@framework", 8 => "@framework.extras"]);
        // line 79
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 79,  213 => 70,  210 => 69,  206 => 67,  204 => 66,  201 => 65,  197 => 64,  194 => 63,  188 => 61,  186 => 60,  183 => 59,  177 => 57,  175 => 56,  172 => 55,  166 => 53,  164 => 52,  161 => 51,  155 => 49,  150 => 48,  148 => 47,  145 => 46,  139 => 44,  137 => 43,  134 => 42,  128 => 40,  126 => 39,  123 => 38,  117 => 36,  112 => 35,  107 => 34,  105 => 33,  102 => 32,  97 => 31,  93 => 30,  83 => 22,  81 => 15,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ this.page.title }}</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link href=\"{{ [
        'assets/css/bootstrap.min.css',
        'assets/css/animate.css',
        'assets/css/font-awesome.min.css',
        'assets/css/owl.theme.css',
        'assets/css/owl.carousel.css',
        'assets/css/style.css',
    ]|theme }}\" rel=\"stylesheet\">
</head>
<body data-spy=\"scroll\" data-offset=\"50\" data-target=\".navbar-collapse\">

    <div class=\"preloader\">
        <div class=\"sk-rotating-plane\"></div>
    </div>

    {% partial 'template/navbar' %}
    {% partial 'template/intro'  %}

{% if this.theme.settings_overview %}
    {% partial 'template/overview' %}
    {% partial 'template/detail'   %}
    {% partial 'template/video'    %}
{% endif %}

{% if this.theme.settings_speakers %}
    {% partial 'template/speakers' %}
{% endif %}

{% if this.theme.settings_program %}
    {% partial 'template/program'  %}
{% endif %}

{% if this.theme.settings_register %}
    {% partial 'template/register' %}
    {% partial 'template/faq'      %}
{% endif %}

{% if this.theme.settings_venue %}
    {% partial 'template/venue'    %}
{% endif %}

{% if this.theme.settings_sponsors %}
    {% partial 'template/sponsors' %}
{% endif %}

{% if this.theme.settings_contact %}
    {% partial 'template/contact' %}
{% endif %}

    {% partial 'template/footer' %}

{% if this.theme.settings_gotop %}
    <a href=\"#back-top\" class=\"go-top\"><i class=\"fa fa-angle-up\"></i></a>
{% endif %}

    <script src=\"{{ [
        'assets/js/jquery.js',
        'assets/js/bootstrap.min.js',
        'assets/js/jquery.parallax.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/smoothscroll.js',
        'assets/js/wow.min.js',
        'assets/js/custom.js',
        '@framework',
        '@framework.extras']|theme }}\"></script>

</body>
</html>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/layouts/default.htm", "");
    }
}
