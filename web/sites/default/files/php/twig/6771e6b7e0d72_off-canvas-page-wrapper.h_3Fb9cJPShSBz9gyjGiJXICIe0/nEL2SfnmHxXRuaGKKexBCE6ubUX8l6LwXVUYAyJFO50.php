<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/claro/templates/off-canvas-page-wrapper.html.twig */
class __TwigTemplate_96e103825d1389d59ae08c26015de1d3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/off-canvas-page-wrapper.html.twig"));

        // line 22
        if (($context["children"] ?? null)) {
            // line 23
            yield "  <div class=\"page-wrapper dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
            yield "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["children"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/off-canvas-page-wrapper.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  52 => 24,  49 => 23,  47 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a page wrapper.
 *
 * For consistent wrapping to {{ page }} render in all themes. The
 * \"data-off-canvas-main-canvas\" attribute is required by the off-canvas dialog.
 * This is used by the core/drupal.dialog.off_canvas library to select the
 * \"main canvas\" page element as opposed to the \"off canvas\" which is the dialog
 * itself. The \"main canvas\" element must be resized according to the width of
 * the \"off canvas\" dialog so that no portion of the \"main canvas\" is obstructed
 * by the off-canvas dialog. The off-canvas dialog can vary in width when opened
 * and can be resized by the user. The \"data-off-canvas-main-canvas\" attribute
 * cannot be removed without breaking the off-canvas dialog functionality.
 *
 * Available variables:
 * - children: Contains the child elements of the page.
 *
 * @ingroup themeable
 */
#}
{% if children %}
  <div class=\"page-wrapper dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    {{ children }}
  </div>
{% endif %}
", "core/themes/claro/templates/off-canvas-page-wrapper.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/themes/claro/templates/off-canvas-page-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
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
}