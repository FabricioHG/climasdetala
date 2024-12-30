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

/* @help_topics/language.add.html.twig */
class __TwigTemplate_6a44192ec1d48dcf4d350cce27966e0b extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/language.add.html.twig"));

        // line 7
        $context["languages_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Languages", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["languages_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["languages_text"] ?? null), "entity.configurable_language.collection"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Add a language to your site.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; @languages_link.", array("@languages_link" => ($context["languages_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 14
        yield t("Click <em>Add language</em>.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("If your language is in the <em>Language name</em> list, select it and click <em>Add language</em>.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("If your language is not in the list, select <em>Custom language...</em> and enter the <em>Language code</em>, <em>Language name</em>, and <em>Direction</em> for the language. Click <em>Add custom language</em>.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Wait for the translation system to be updated. Also, if you have the core Update Manager module installed and translations are available for your language, wait for translations to be downloaded. You should be returned to the <em>Languages</em> page when this completes.", array());
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
        return "@help_topics/language.add.html.twig";
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
        return array (  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set languages_text %}{% trans %}Languages{% endtrans %}{% endset %}
{% set languages_link = render_var(help_route_link(languages_text, 'entity.configurable_language.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add a language to your site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; {{ languages_link }}.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add language</em>.{% endtrans %}</li>
  <li>{% trans %}If your language is in the <em>Language name</em> list, select it and click <em>Add language</em>.{% endtrans %}</li>
  <li>{% trans %}If your language is not in the list, select <em>Custom language...</em> and enter the <em>Language code</em>, <em>Language name</em>, and <em>Direction</em> for the language. Click <em>Add custom language</em>.{% endtrans %}</li>
  <li>{% trans %}Wait for the translation system to be updated. Also, if you have the core Update Manager module installed and translations are available for your language, wait for translations to be downloaded. You should be returned to the <em>Languages</em> page when this completes.{% endtrans %}</li>
</ol>", "@help_topics/language.add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/language/help_topics/language.add.html.twig");
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
