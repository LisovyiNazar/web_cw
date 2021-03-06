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

/* D:\NAZAR\program\OpenServer\OpenServer\OpenServer\domains\coursework/themes/martin-new-event/partials/template/program.htm */
class __TwigTemplate_e471598cdb6f435f8d13cc6a43e5b11bed80d2ccea56db5772b6d37f491b9e8f extends \Twig\Template
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
        $filters = array("theme" => 25);
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
        echo "<section id=\"program\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-12 col-sm-12\" data-wow-delay=\"0.6s\">
                <div class=\"section-title\">
                    <h2>Our Programs</h2>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-10 col-sm-10\" data-wow-delay=\"0.9s\">
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#fday\" aria-controls=\"fday\" role=\"tab\" data-toggle=\"tab\">FIRST DAY</a></li>
                    <li><a href=\"#sday\" aria-controls=\"sday\" role=\"tab\" data-toggle=\"tab\">SECOND DAY</a></li>
                    <li><a href=\"#tday\" aria-controls=\"tday\" role=\"tab\" data-toggle=\"tab\">THIRD DAY</a></li>
                </ul>
                <!-- tab panes -->
                <div class=\"tab-content\">

                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"fday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img1.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 09.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Introduction to Design</h3>
                            <h4>By Jenny Green</h4>
                            <p>Maecenas accumsan metus turpis, eu faucibus ligula interdum in. Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img2.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 10.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 360</span>
                            </h6>
                            <h3>Front-End Development</h3>
                            <h4>By Johnathan Mark</h4>
                            <p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img3.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Social Media Marketing</h3>
                            <h4>By Johnathan Doe</h4>
                            <p>Nam pulvinar, elit vitae rhoncus pretium, massa urna bibendum ex, aliquam efficitur lorem odio vitae erat. Integer rutrum viverra magna, nec ultrices risus rutrum nec.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"sday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img4.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Backend Development</h3>
                            <h4>By Matt Lee</h4>
                            <p>Integer rutrum viverra magna, nec ultrices risus rutrum nec. Pellentesque interdum vel nisi nec tincidunt. Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img5.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 01.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Web Application Lite</h3>
                            <h4>By David Orlando</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img6.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 650</span>
                            </h6>
                            <h3>Professional UX Design</h3>
                            <h4>By James Lee Mark</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"tday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img7.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Online Shopping Business</h3>
                            <h4>By Michael Walker</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img8.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 05.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 850</span>
                            </h6>
                            <h3>Introduction to Mobile App</h3>
                            <h4>By Cherry Stella</h4>
                            <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/program-img9.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 07.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Bootstrap UI Design</h3>
                            <h4>By John David</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
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
        return "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/program.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 159,  226 => 142,  206 => 125,  187 => 109,  167 => 92,  147 => 75,  128 => 59,  108 => 42,  88 => 25,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"program\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-12 col-sm-12\" data-wow-delay=\"0.6s\">
                <div class=\"section-title\">
                    <h2>Our Programs</h2>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-10 col-sm-10\" data-wow-delay=\"0.9s\">
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#fday\" aria-controls=\"fday\" role=\"tab\" data-toggle=\"tab\">FIRST DAY</a></li>
                    <li><a href=\"#sday\" aria-controls=\"sday\" role=\"tab\" data-toggle=\"tab\">SECOND DAY</a></li>
                    <li><a href=\"#tday\" aria-controls=\"tday\" role=\"tab\" data-toggle=\"tab\">THIRD DAY</a></li>
                </ul>
                <!-- tab panes -->
                <div class=\"tab-content\">

                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"fday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img1.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 09.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Introduction to Design</h3>
                            <h4>By Jenny Green</h4>
                            <p>Maecenas accumsan metus turpis, eu faucibus ligula interdum in. Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img2.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 10.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 360</span>
                            </h6>
                            <h3>Front-End Development</h3>
                            <h4>By Johnathan Mark</h4>
                            <p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img3.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Social Media Marketing</h3>
                            <h4>By Johnathan Doe</h4>
                            <p>Nam pulvinar, elit vitae rhoncus pretium, massa urna bibendum ex, aliquam efficitur lorem odio vitae erat. Integer rutrum viverra magna, nec ultrices risus rutrum nec.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"sday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img4.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Backend Development</h3>
                            <h4>By Matt Lee</h4>
                            <p>Integer rutrum viverra magna, nec ultrices risus rutrum nec. Pellentesque interdum vel nisi nec tincidunt. Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img5.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 01.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Web Application Lite</h3>
                            <h4>By David Orlando</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img6.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 650</span>
                            </h6>
                            <h3>Professional UX Design</h3>
                            <h4>By James Lee Mark</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"tday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img7.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Online Shopping Business</h3>
                            <h4>By Michael Walker</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img8.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 05.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 850</span>
                            </h6>
                            <h3>Introduction to Mobile App</h3>
                            <h4>By Cherry Stella</h4>
                            <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img9.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 07.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Bootstrap UI Design</h3>
                            <h4>By John David</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>", "D:\\NAZAR\\program\\OpenServer\\OpenServer\\OpenServer\\domains\\coursework/themes/martin-new-event/partials/template/program.htm", "");
    }
}
