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

/* @help_topics/path.editing_alias.html.twig */
class __TwigTemplate_638729a7f0f297358e59f052f4555646 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/path.editing_alias.html.twig"));

        // line 7
        $context["path_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "  ";
            yield t("Administer URL aliases", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["path_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["path_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "path"]));
        // line 11
        $context["path_aliases_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "  ";
            yield t("URL aliases", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["path_aliases_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["path_aliases_link_text"] ?? null), "entity.path_alias.collection"));
        // line 15
        $context["path_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("path.overview"));
        // line 16
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 17
        yield t("Change an existing URL alias, to correct the path or the alias value. See @path_overview_topic for more about aliases.", array("@path_overview_topic" => ($context["path_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 18
        yield t("Who can manage URL aliases?", array());
        yield "</h2>
<p>";
        // line 19
        yield t("Users with the <em>@path_permissions_link</em> permission can edit aliases.", array("@path_permissions_link" => ($context["path_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 20
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 22
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>@path_aliases_link</em>. A list of all the site's aliases will appear.", array("@path_aliases_link" => ($context["path_aliases_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 23
        yield t("Click <em>Edit</em> in the dropdown button for the alias that you would like to change.", array());
        yield "</li>
  <li>";
        // line 24
        yield t("Make the required changes and click <em>Save</em>. You will be returned to the URL alias list page.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Note that you can also add new aliases from this page, for any path on your site.", array());
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
        return "@help_topics/path.editing_alias.html.twig";
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
        return array (  101 => 25,  97 => 24,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 16,  65 => 15,  63 => 14,  58 => 12,  56 => 11,  54 => 10,  49 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set path_permissions_link_text %}
  {% trans %}Administer URL aliases{% endtrans %}
{% endset %}
{% set path_permissions_link = render_var(help_route_link(path_permissions_link_text, 'user.admin_permissions.module', {'modules': 'path'})) %}
{% set path_aliases_link_text %}
  {% trans %}URL aliases{% endtrans %}
{% endset %}
{% set path_aliases_link = render_var(help_route_link(path_aliases_link_text, 'entity.path_alias.collection')) %}
{% set path_overview_topic = render_var(help_topic_link('path.overview')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Change an existing URL alias, to correct the path or the alias value. See {{ path_overview_topic }} for more about aliases.{% endtrans %}</p>
<h2>{% trans %}Who can manage URL aliases?{% endtrans %}</h2>
<p>{% trans %}Users with the <em>{{ path_permissions_link }}</em> permission can edit aliases.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>{{ path_aliases_link }}</em>. A list of all the site's aliases will appear.{% endtrans %}</li>
  <li>{% trans %}Click <em>Edit</em> in the dropdown button for the alias that you would like to change.{% endtrans %}</li>
  <li>{% trans %}Make the required changes and click <em>Save</em>. You will be returned to the URL alias list page.{% endtrans %}</li>
  <li>{% trans %}Note that you can also add new aliases from this page, for any path on your site.{% endtrans %}</li>
</ol>", "@help_topics/path.editing_alias.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/path/help_topics/path.editing_alias.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 17);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 15);

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
