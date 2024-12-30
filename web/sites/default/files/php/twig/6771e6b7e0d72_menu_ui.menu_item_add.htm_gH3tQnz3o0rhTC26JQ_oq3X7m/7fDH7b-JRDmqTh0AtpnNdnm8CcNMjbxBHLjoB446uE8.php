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

/* @help_topics/menu_ui.menu_item_add.html.twig */
class __TwigTemplate_ccf33663c3ad458e655c9de57a5d50c8 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/menu_ui.menu_item_add.html.twig"));

        // line 8
        $context["structure_menu_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Menus", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["structure_menu_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["structure_menu_text"] ?? null), "entity.menu.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Add a link to a menu. Note that you can also add a link to a menu from the content edit page if menu settings have been configured for the content type.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", array("@structure_menu_link" => ($context["structure_menu_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Locate the desired menu and click <em>Add link</em> in the <em>Operations</em> list.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Enter the <em>Menu link title</em> to be displayed.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Enter the <em>Link</em>, one of the following:", array());
        // line 18
        yield "    <ul>
      <li>";
        // line 19
        yield t("An internal path, such as <em>/node/add</em>", array());
        yield "</li>
      <li>";
        // line 20
        yield t("A full external URL", array());
        yield "</li>
      <li>";
        // line 21
        yield t("Start typing the title of a content item and select it when the full title comes up", array());
        yield "</li>
      <li>";
        // line 22
        yield t("<em>&lt;nolink&gt;</em> to display the <em>Menu link title</em> as plain text without a link", array());
        yield "</li>
      <li>";
        // line 23
        yield t("<em>&lt;front&gt;</em> to link to the front page of your site", array());
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 26
        yield t("Make sure that <em>Enabled</em> is checked; if not, the menu link will not be displayed.", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Optionally, enter a <em>Description</em>, which will be displayed when a user hovers over the link.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("Optionally, check <em>Show as expanded</em> to automatically show the children of this link (if any) when this link is shown.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("Optionally, select the <em>Parent link</em>, if this menu link should be a child of another menu link.", array());
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. You will be returned to the <em>Add link</em> page to add another link.", array());
        yield "</li>
  <li>";
        // line 31
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", array("@structure_menu_link" => ($context["structure_menu_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 32
        yield t("Locate the menu you just added a link to and click <em>Edit</em> in the <em>Operations</em> list.", array());
        yield "</li>
  <li>";
        // line 33
        yield t("Verify that the order of links is correct. If it is not, drag menu links until the order is correct, and click <em>Save</em>.", array());
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
        return "@help_topics/menu_ui.menu_item_add.html.twig";
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
        return array (  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  82 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  63 => 12,  59 => 11,  54 => 10,  52 => 9,  47 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 8 %}{% set structure_menu_text %}{% trans %}Menus{% endtrans %}{% endset %}
{% set structure_menu_link = render_var(help_route_link(structure_menu_text, 'entity.menu.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add a link to a menu. Note that you can also add a link to a menu from the content edit page if menu settings have been configured for the content type.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; {{ structure_menu_link }}.{% endtrans %}</li>
  <li>{% trans %}Locate the desired menu and click <em>Add link</em> in the <em>Operations</em> list.{% endtrans %}</li>
  <li>{% trans %}Enter the <em>Menu link title</em> to be displayed.{% endtrans %}</li>
  <li>{% trans %}Enter the <em>Link</em>, one of the following:{% endtrans %}
    <ul>
      <li>{% trans %}An internal path, such as <em>/node/add</em>{% endtrans %}</li>
      <li>{% trans %}A full external URL{% endtrans %}</li>
      <li>{% trans %}Start typing the title of a content item and select it when the full title comes up{% endtrans %}</li>
      <li>{% trans %}<em>&lt;nolink&gt;</em> to display the <em>Menu link title</em> as plain text without a link{% endtrans %}</li>
      <li>{% trans %}<em>&lt;front&gt;</em> to link to the front page of your site{% endtrans %}</li>
    </ul>
  </li>
  <li>{% trans %}Make sure that <em>Enabled</em> is checked; if not, the menu link will not be displayed.{% endtrans %}</li>
  <li>{% trans %}Optionally, enter a <em>Description</em>, which will be displayed when a user hovers over the link.{% endtrans %}</li>
  <li>{% trans %}Optionally, check <em>Show as expanded</em> to automatically show the children of this link (if any) when this link is shown.{% endtrans %}</li>
  <li>{% trans %}Optionally, select the <em>Parent link</em>, if this menu link should be a child of another menu link.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You will be returned to the <em>Add link</em> page to add another link.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; {{ structure_menu_link }}.{% endtrans %}</li>
  <li>{% trans %}Locate the menu you just added a link to and click <em>Edit</em> in the <em>Operations</em> list.{% endtrans %}</li>
  <li>{% trans %}Verify that the order of links is correct. If it is not, drag menu links until the order is correct, and click <em>Save</em>.{% endtrans %}</li>
</ol>", "@help_topics/menu_ui.menu_item_add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/menu_ui/help_topics/menu_ui.menu_item_add.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 9, "help_route_link" => 9);

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
