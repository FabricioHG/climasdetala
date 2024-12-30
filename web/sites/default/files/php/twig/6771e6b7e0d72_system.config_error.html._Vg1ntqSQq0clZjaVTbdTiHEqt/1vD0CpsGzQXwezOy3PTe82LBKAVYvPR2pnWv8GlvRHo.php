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

/* @help_topics/system.config_error.html.twig */
class __TwigTemplate_00c7b010c3e3a533c8ed3c3049e45848 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/system.config_error.html.twig"));

        // line 7
        $context["log_settings_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Logging and errors", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["log_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["log_settings_link_text"] ?? null), "system.logging_settings"));
        // line 9
        $context["information_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Basic site settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["information_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["information_link_text"] ?? null), "system.site_information_settings"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Set up your site to respond appropriately to site errors, including 403 and 404 page responses.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What are 403 and 404 responses?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("When a user visits a web page, the web server sends a response code in addition to the page content. A normal, non-error response has code 200. If the page does not exist on the site, the response code is 404. If the page exists, but the user is not authorized to visit the page, the response code is 403. The core software provides default responses for both 403 and 404 codes, but if you prefer, you can create your own pages for each.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("What other errors can occur?", array());
        yield "</h2>
<p>";
        // line 16
        yield t("Under some situations, your site can generate error messages. These can be due to user errors (such as entering invalid values in a form, or incorrect configuration), PHP runtime errors, or software bugs. Some errors may result in a <em>white screen of death</em> (a totally blank web page response); less drastic errors will generate error messages. You can configure what happens when an error message is generated.", array());
        yield "</p>
<h2>";
        // line 17
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 19
        yield t("If desired, create pages to use for 403 and 404 responses. Note the URLs for these pages.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em>@information_link</em>.", array("@information_link" => ($context["information_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 21
        yield t("In the <em>Error pages</em> section, enter the URL for your 403/404 pages, starting after the site home page URL. For example, if your site URL is <em>https://example.com</em> and your 404 page is <em>https://example.com/not-found</em>, you would enter <em>/not-found</em>.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>@log_settings_link</em>.", array("@log_settings_link" => ($context["log_settings_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 24
        yield t("For a production site, select <em>None</em> under <em>Error messages to display</em>. For a site that is in development, select one of the other options, so that you are more aware of the errors the site is generating.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
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
        return "@help_topics/system.config_error.html.twig";
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
        return array (  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set log_settings_link_text %}{% trans %}Logging and errors{% endtrans %}{% endset %}
{% set log_settings_link = render_var(help_route_link(log_settings_link_text, 'system.logging_settings')) %}
{% set information_link_text %}{% trans %}Basic site settings{% endtrans %}{% endset %}
{% set information_link = render_var(help_route_link(information_link_text, 'system.site_information_settings')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Set up your site to respond appropriately to site errors, including 403 and 404 page responses.{% endtrans %}</p>
<h2>{% trans %}What are 403 and 404 responses?{% endtrans %}</h2>
<p>{% trans %}When a user visits a web page, the web server sends a response code in addition to the page content. A normal, non-error response has code 200. If the page does not exist on the site, the response code is 404. If the page exists, but the user is not authorized to visit the page, the response code is 403. The core software provides default responses for both 403 and 404 codes, but if you prefer, you can create your own pages for each.{% endtrans %}</p>
<h2>{% trans %}What other errors can occur?{% endtrans %}</h2>
<p>{% trans %}Under some situations, your site can generate error messages. These can be due to user errors (such as entering invalid values in a form, or incorrect configuration), PHP runtime errors, or software bugs. Some errors may result in a <em>white screen of death</em> (a totally blank web page response); less drastic errors will generate error messages. You can configure what happens when an error message is generated.{% endtrans %}</p>
<h2>{% trans %}Steps {% endtrans %}</h2>
<ol>
  <li>{% trans %}If desired, create pages to use for 403 and 404 responses. Note the URLs for these pages.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em>{{ information_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}In the <em>Error pages</em> section, enter the URL for your 403/404 pages, starting after the site home page URL. For example, if your site URL is <em>https://example.com</em> and your 404 page is <em>https://example.com/not-found</em>, you would enter <em>/not-found</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>{{ log_settings_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}For a production site, select <em>None</em> under <em>Error messages to display</em>. For a site that is in development, select one of the other options, so that you are more aware of the errors the site is generating.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
</ol>", "@help_topics/system.config_error.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/system/help_topics/system.config_error.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 20);
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