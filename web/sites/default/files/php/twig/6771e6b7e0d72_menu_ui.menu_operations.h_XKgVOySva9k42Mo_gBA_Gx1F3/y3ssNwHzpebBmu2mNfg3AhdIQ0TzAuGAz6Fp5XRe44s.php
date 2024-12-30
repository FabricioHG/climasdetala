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

/* @help_topics/menu_ui.menu_operations.html.twig */
class __TwigTemplate_b245b53d8f37e464bb814c435722ccfe extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/menu_ui.menu_operations.html.twig"));

        // line 7
        $context["structure_menu_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Menus", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["structure_menu_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["structure_menu_text"] ?? null), "entity.menu.collection"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Create a new menu.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administration menu, navigate <em>Structure</em> &gt; @structure_menu_link.", array("@structure_menu_link" => ($context["structure_menu_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 14
        yield t("Click <em>Add menu</em>.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("Enter the title for the menu, which is used as the default block title if the menu is displayed as a block. If desired, also edit the machine name of the menu, which is by default derived from the title.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Enter an administrative summary, which is displayed on the <em>Menus</em> page.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("If your site has more than one language, choose the language for the menu.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save</em>. You will be on the menu editing page, ready to add links to the menu if the core Custom Menu Links module is installed; see related topics for further tasks.", array());
        yield "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/menu_ui.menu_operations.html.twig";
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
        return array (  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set structure_menu_text %}{% trans %}Menus{% endtrans %}{% endset %}
{% set structure_menu_link = render_var(help_route_link(structure_menu_text, 'entity.menu.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a new menu.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administration menu, navigate <em>Structure</em> &gt; {{ structure_menu_link }}.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add menu</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the title for the menu, which is used as the default block title if the menu is displayed as a block. If desired, also edit the machine name of the menu, which is by default derived from the title.{% endtrans %}</li>
  <li>{% trans %}Enter an administrative summary, which is displayed on the <em>Menus</em> page.{% endtrans %}</li>
  <li>{% trans %}If your site has more than one language, choose the language for the menu.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You will be on the menu editing page, ready to add links to the menu if the core Custom Menu Links module is installed; see related topics for further tasks.{% endtrans %}</li>
</ol>", "@help_topics/menu_ui.menu_operations.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/menu_ui/help_topics/menu_ui.menu_operations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 8, "help_route_link" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
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