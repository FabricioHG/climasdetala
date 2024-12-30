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

/* @help_topics/views_ui.add_display.html.twig */
class __TwigTemplate_96b422155acef354f4f98095c0a40fdd extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/views_ui.add_display.html.twig"));

        // line 7
        $context["views_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Views", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["views_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["views_link_text"] ?? null), "entity.view.collection"));
        // line 9
        $context["view_edit_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("views_ui.edit"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Add a new display to an existing view. This will allow you to display similar data to an existing view, using similar settings, in a new block, page, feed, etc.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("If you are not already editing your view, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@views_link</em>. Find the view you want to edit, and click its <em>Edit</em> link.", array("@views_link" => ($context["views_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Under <em>Displays</em>, click <em>Add</em>.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("In the pop-up list, click the link for the type of display you want to add; the most common types are <em>Page</em> and <em>Block</em>. The new display will be added to your view, and you will be editing that display.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Optionally, click the link next to <em>Display name</em> and enter a new name to be shown for this display in the administrative interface.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Follow the steps in @view_edit_topic to edit the other settings for the display.", array("@view_edit_topic" => ($context["view_edit_topic"] ?? null), ));
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
        return "@help_topics/views_ui.add_display.html.twig";
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
        return array (  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  65 => 12,  61 => 11,  56 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set views_link_text %}{% trans %}Views{% endtrans %}{% endset %}
{% set views_link = render_var(help_route_link(views_link_text, 'entity.view.collection')) %}
{% set view_edit_topic = render_var(help_topic_link('views_ui.edit')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add a new display to an existing view. This will allow you to display similar data to an existing view, using similar settings, in a new block, page, feed, etc.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}If you are not already editing your view, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ views_link }}</em>. Find the view you want to edit, and click its <em>Edit</em> link.{% endtrans %}</li>
  <li>{% trans %}Under <em>Displays</em>, click <em>Add</em>.{% endtrans %}</li>
  <li>{% trans %}In the pop-up list, click the link for the type of display you want to add; the most common types are <em>Page</em> and <em>Block</em>. The new display will be added to your view, and you will be editing that display.{% endtrans %}</li>
  <li>{% trans %}Optionally, click the link next to <em>Display name</em> and enter a new name to be shown for this display in the administrative interface.{% endtrans %}</li>
  <li>{% trans %}Follow the steps in {{ view_edit_topic }} to edit the other settings for the display.{% endtrans %}</li>
</ol>", "@help_topics/views_ui.add_display.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/views_ui/help_topics/views_ui.add_display.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 8, "help_route_link" => 8, "help_topic_link" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
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