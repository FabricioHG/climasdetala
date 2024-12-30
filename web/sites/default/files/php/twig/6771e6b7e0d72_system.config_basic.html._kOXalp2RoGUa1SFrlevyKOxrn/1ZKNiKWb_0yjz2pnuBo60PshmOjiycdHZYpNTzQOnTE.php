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

/* @help_topics/system.config_basic.html.twig */
class __TwigTemplate_8610db036f1bd57b7d7e165060e40d1f extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/system.config_basic.html.twig"));

        // line 7
        $context["regional_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Regional settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["regional_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["regional_link_text"] ?? null), "system.regional_settings"));
        // line 9
        $context["information_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Basic site settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["information_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["information_link_text"] ?? null), "system.site_information_settings"));
        // line 11
        $context["datetime_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Date and time formats", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        $context["datetime_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["datetime_link_text"] ?? null), "entity.date_format.collection"));
        // line 13
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 14
        yield t("Configure the basic settings of your site, including the site name, slogan, main email address, default time zone, default country, and the date formats to use.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 17
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em>@information_link</em>.", array("@information_link" => ($context["information_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 18
        yield t("Enter the site name, slogan, and main email address for your site.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>@regional_link</em>.", array("@regional_link" => ($context["regional_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 21
        yield t("Select the default country and default time zone for your site.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>@datetime_link</em>.", array("@datetime_link" => ($context["datetime_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 24
        yield t("Look at the <em>Patterns</em> for the Default long, medium, and short date formats. If any of them does not match the date format you want to use on your site, click <em>Edit</em> in that row to edit the format.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Adjust the <em>Format string</em> until the <em>Displayed</em> format matches what you want. (Date format strings are composed of PHP date format codes.)", array());
        yield "</li>
  <li>";
        // line 26
        yield t("Click <em>Save format</em>. You should see a message indicating that the format was saved.", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Repeat the previous three steps for any other date formats that need to be changed.", array());
        yield "</li>
</ol>
<h2>";
        // line 29
        yield t("Additional resources", array());
        yield "</h2>
<p>";
        // line 30
        yield t("<a href=\"https://www.php.net/manual/datetime.format.php#refsect1-datetime.format-parameters\">PHP date format codes reference</a>", array());
        yield "</p>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/system.config_basic.html.twig";
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
        return array (  131 => 30,  127 => 29,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  77 => 15,  73 => 14,  68 => 13,  66 => 12,  61 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set regional_link_text %}{% trans %}Regional settings{% endtrans %}{% endset %}
{% set regional_link = render_var(help_route_link(regional_link_text, 'system.regional_settings')) %}
{% set information_link_text %}{% trans %}Basic site settings{% endtrans %}{% endset %}
{% set information_link = render_var(help_route_link(information_link_text, 'system.site_information_settings')) %}
{% set datetime_link_text %}{% trans %}Date and time formats{% endtrans %}{% endset %}
{% set datetime_link = render_var(help_route_link(datetime_link_text, 'entity.date_format.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure the basic settings of your site, including the site name, slogan, main email address, default time zone, default country, and the date formats to use.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <em>{{ information_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the site name, slogan, and main email address for your site. {% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>{{ regional_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Select the default country and default time zone for your site.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>{{ datetime_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Look at the <em>Patterns</em> for the Default long, medium, and short date formats. If any of them does not match the date format you want to use on your site, click <em>Edit</em> in that row to edit the format.{% endtrans %}</li>
  <li>{% trans %}Adjust the <em>Format string</em> until the <em>Displayed</em> format matches what you want. (Date format strings are composed of PHP date format codes.){% endtrans %}</li>
  <li>{% trans %}Click <em>Save format</em>. You should see a message indicating that the format was saved.{% endtrans %}</li>
  <li>{% trans %}Repeat the previous three steps for any other date formats that need to be changed.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<p>{% trans %}<a href=\"https://www.php.net/manual/datetime.format.php#refsect1-datetime.format-parameters\">PHP date format codes reference</a>{% endtrans %}</p>", "@help_topics/system.config_basic.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/system/help_topics/system.config_basic.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 17);
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
