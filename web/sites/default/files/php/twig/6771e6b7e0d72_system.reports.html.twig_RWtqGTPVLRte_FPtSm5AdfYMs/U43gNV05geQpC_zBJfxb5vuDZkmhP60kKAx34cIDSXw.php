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

/* @help_topics/system.reports.html.twig */
class __TwigTemplate_af1a5dec81bf351ec8cd15afff8d0d56 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/system.reports.html.twig"));

        // line 8
        $context["status_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Status report", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["status_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["status_link_text"] ?? null), "system.status"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Run reports to learn about the status and health of your site.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>@status_link</em> to see a report that summarizes the health and status of your site. If there are any warnings or errors, you will need to fix them. Take note of any upcoming highly critical security releases that may impact your site.", array("@status_link" => ($context["status_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("If you have the core Database Logging module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Recent log messages</em> to see a report of the error and informational messages your site has generated. You can filter the report by <em>Severity</em> to see only the most critical messages, if desired.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("If you have the core Update Manager module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Available updates</em> to see a report of the updates that are available for your site software. If <em>Last checked</em> is far in the past, click <em>Check manually</em> to update the report. Scan the report; if the core software or any modules or themes have security updates available, you should update them as soon as possible.", array());
        yield "</li>
</ol>
<h2>";
        // line 18
        yield t("Additional resources", array());
        yield "</h2>
<ul>
    <li>";
        // line 20
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>, which includes information on how to update your site's core software, modules, and themes.", array());
        yield "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/system.reports.html.twig";
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
        return array (  86 => 20,  81 => 18,  76 => 16,  72 => 15,  68 => 14,  63 => 12,  59 => 11,  54 => 10,  52 => 9,  47 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 8 %}{% set status_link_text %}{% trans %}Status report{% endtrans %}{% endset %}
{% set status_link = render_var(help_route_link(status_link_text, 'system.status')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Run reports to learn about the status and health of your site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>{{ status_link }}</em> to see a report that summarizes the health and status of your site. If there are any warnings or errors, you will need to fix them. Take note of any upcoming highly critical security releases that may impact your site.{% endtrans %}</li>
  <li>{% trans %}If you have the core Database Logging module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Recent log messages</em> to see a report of the error and informational messages your site has generated. You can filter the report by <em>Severity</em> to see only the most critical messages, if desired.{% endtrans %}</li>
  <li>{% trans %}If you have the core Update Manager module installed, in the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>Available updates</em> to see a report of the updates that are available for your site software. If <em>Last checked</em> is far in the past, click <em>Check manually</em> to update the report. Scan the report; if the core software or any modules or themes have security updates available, you should update them as soon as possible.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>, which includes information on how to update your site's core software, modules, and themes.{% endtrans %}</li>
</ul>", "@help_topics/system.reports.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/system/help_topics/system.reports.html.twig");
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