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

/* @help_topics/locale.translation_status.html.twig */
class __TwigTemplate_0a1e912354468f30ddf3dffa5b22a73c extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/locale.translation_status.html.twig"));

        // line 8
        $context["language_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Languages", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["translation_updates_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Available translation updates", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["language_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["language_text"] ?? null), "entity.configurable_language.collection"));
        // line 11
        $context["translation_updates_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["translation_updates_text"] ?? null), "locale.translate_status"));
        // line 12
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Check the current status of interface translations, and see if there are any updates available.", array());
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; @language_link.", array("@language_link" => ($context["language_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("Look at the <em>Interface translation</em> column in the language table, to find the percentage of user interface text that has been translated for each language.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>@translation_updates_link</em>. This report is only available if the core Update Status module is installed.", array("@translation_updates_link" => ($context["translation_updates_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 19
        yield t("Optionally, click <em>Check manually</em> to update the report.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("View the report to find out if any languages have translation updates that you can download.", array());
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
        return "@help_topics/locale.translation_status.html.twig";
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
        return array (  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  70 => 14,  66 => 13,  61 => 12,  59 => 11,  57 => 10,  52 => 9,  47 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 8 %}{% set language_text %}{% trans %}Languages{% endtrans %}{% endset %}
{% set translation_updates_text %}{% trans %}Available translation updates{% endtrans %}{% endset %}
{% set language_link = render_var(help_route_link(language_text, 'entity.configurable_language.collection')) %}
{% set translation_updates_link = render_var(help_route_link(translation_updates_text, 'locale.translate_status')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Check the current status of interface translations, and see if there are any updates available.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; {{ language_link }}.{% endtrans %}</li>
  <li>{% trans %}Look at the <em>Interface translation</em> column in the language table, to find the percentage of user interface text that has been translated for each language.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>{{ translation_updates_link }}</em>. This report is only available if the core Update Status module is installed.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Check manually</em> to update the report.{% endtrans %}</li>
  <li>{% trans %}View the report to find out if any languages have translation updates that you can download.{% endtrans %}</li>
</ol>", "@help_topics/locale.translation_status.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/locale/help_topics/locale.translation_status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_route_link" => 10);

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
