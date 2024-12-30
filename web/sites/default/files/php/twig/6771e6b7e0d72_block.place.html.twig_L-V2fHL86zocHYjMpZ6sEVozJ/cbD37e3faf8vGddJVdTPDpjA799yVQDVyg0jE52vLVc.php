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

/* @help_topics/block.place.html.twig */
class __TwigTemplate_2c2c12efb414f3b93ad402ad909be040 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/block.place.html.twig"));

        // line 7
        $context["layout_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield t("Block layout", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["layout_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["layout_link_text"] ?? null), "block.admin_display"));
        // line 11
        $context["configure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("block.configure"));
        // line 12
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Place a block into a theme's region.", array());
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; @layout_link.", array("@layout_link" => ($context["layout_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("Click the name of the theme that you want to place the block in.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Find the region where you want the block, and click <em>Place block</em> in that region. A modal dialog will pop up.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Find the block you want to place and click <em>Place block</em>. A <em>Configure block</em> modal dialog will pop up.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Configure the block and click <em>Save block</em>; see @configure_topic for configuration details.", array("@configure_topic" => ($context["configure_topic"] ?? null), ));
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
        return "@help_topics/block.place.html.twig";
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
        return array (  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  66 => 14,  62 => 13,  57 => 12,  55 => 11,  53 => 10,  49 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set layout_link_text %}
{% trans %}Block layout{% endtrans %}
{% endset %}
{% set layout_link = render_var(help_route_link(layout_link_text, 'block.admin_display')) %}
{% set configure_topic = render_var(help_topic_link('block.configure')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Place a block into a theme's region. {% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; {{ layout_link }}.{% endtrans %}</li>
  <li>{% trans %}Click the name of the theme that you want to place the block in.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.{% endtrans %}</li>
  <li>{% trans %}Find the region where you want the block, and click <em>Place block</em> in that region. A modal dialog will pop up.{% endtrans %}</li>
  <li>{% trans %}Find the block you want to place and click <em>Place block</em>. A <em>Configure block</em> modal dialog will pop up.{% endtrans %}</li>
  <li>{% trans %}Configure the block and click <em>Save block</em>; see {{ configure_topic }} for configuration details.{% endtrans %}</li>
</ol>", "@help_topics/block.place.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/block/help_topics/block.place.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

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