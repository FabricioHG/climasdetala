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

/* @help_topics/language.detect.html.twig */
class __TwigTemplate_a6ce6abf7ad8f33bfda0706dd5d6346c extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/language.detect.html.twig"));

        // line 7
        $context["detection_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Detection and selection", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["detection_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["detection_text"] ?? null), "language.negotiation"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Configure the methods used to decide which language will be used to display text on your site.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What is a language detection method?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("A language detection method is a way for your site to decide what language should be used to display text. This decision is made by evaluating a series of detection methods for languages; the first detection method that gets a result will determine which language is used. If you have more than one language on your site, you can configure the detection methods that are used and the order they are evaluated, for both user interface text and content text. Configuration text always uses the interface text method, and most sites use the same detection methods for all types of text.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What language detection methods are available?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("The available detection methods depend on what modules you have installed. Some of the most commonly-used language detection methods are:", array());
        yield "</p>
<dl>
  <dt>";
        // line 16
        yield t("URL", array());
        yield "</dt>
  <dd>";
        // line 17
        yield t("Use the language from the URL, which can either be in a path prefix like <em>example.com/fr/page_path</em> for French (fr) language, or in a domain like <em>fr.example.com/page_path</em>.", array());
        yield "</dd>
  <dt>";
        // line 18
        yield t("User", array());
        yield "</dt>
  <dd>";
        // line 19
        yield t("For logged in users, use the language they have set in their profiles.", array());
        yield "</dd>
  <dt>";
        // line 20
        yield t("Browser", array());
        yield "</dt>
  <dd>";
        // line 21
        yield t("Use the language preferences from the user's browser.", array());
        yield "</dd>
  <dt>";
        // line 22
        yield t("Selected language", array());
        yield "</dt>
  <dd>";
        // line 23
        yield t("Use the language most recently selected from a <em>Language switcher</em> block.", array());
        yield "</dd>
  <dt>";
        // line 24
        yield t("Session", array());
        yield "</dt>
  <dd>";
        // line 25
        yield t("Use the language from a session parameter or a request parameter; for example, adding <em>?language=fr</em> to the end of the URL.", array());
        yield "</dd>
</dl>
<h2>";
        // line 27
        yield t("Steps", array());
        yield "</h2>
<ol>
    <li>";
        // line 29
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>Languages</em> &gt; @detection_link.", array("@detection_link" => ($context["detection_link"] ?? null), ));
        yield "</li>
    <li>";
        // line 30
        yield t("Check the boxes to enable the desired language detection methods, and uncheck boxes for the methods you do not want to use.", array());
        yield "</li>
    <li>";
        // line 31
        yield t("Drag the methods to change their order, if desired.", array());
        yield "</li>
    <li>";
        // line 32
        yield t("Click <em>Save settings</em>.", array());
        yield "</li>
    <li>";
        // line 33
        yield t("Click <em>Configure</em> on each enabled detection method and verify that its configuration is correct (or update the configuration if not).", array());
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
        return "@help_topics/language.detect.html.twig";
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
        return array (  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  121 => 27,  116 => 25,  112 => 24,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set detection_text %}{% trans %}Detection and selection{% endtrans %}{% endset %}
{% set detection_link = render_var(help_route_link(detection_text, 'language.negotiation')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure the methods used to decide which language will be used to display text on your site.{% endtrans %}</p>
<h2>{% trans %}What is a language detection method?{% endtrans %}</h2>
<p>{% trans %}A language detection method is a way for your site to decide what language should be used to display text. This decision is made by evaluating a series of detection methods for languages; the first detection method that gets a result will determine which language is used. If you have more than one language on your site, you can configure the detection methods that are used and the order they are evaluated, for both user interface text and content text. Configuration text always uses the interface text method, and most sites use the same detection methods for all types of text.{% endtrans %}</p>
<h2>{% trans %}What language detection methods are available?{% endtrans %}</h2>
<p>{% trans %}The available detection methods depend on what modules you have installed. Some of the most commonly-used language detection methods are:{% endtrans %}</p>
<dl>
  <dt>{% trans %}URL{% endtrans %}</dt>
  <dd>{% trans %}Use the language from the URL, which can either be in a path prefix like <em>example.com/fr/page_path</em> for French (fr) language, or in a domain like <em>fr.example.com/page_path</em>.{% endtrans %}</dd>
  <dt>{% trans %}User{% endtrans %}</dt>
  <dd>{% trans %}For logged in users, use the language they have set in their profiles.{% endtrans %}</dd>
  <dt>{% trans %}Browser{% endtrans %}</dt>
  <dd>{% trans %}Use the language preferences from the user's browser.{% endtrans %}</dd>
  <dt>{% trans %}Selected language{% endtrans %}</dt>
  <dd>{% trans %}Use the language most recently selected from a <em>Language switcher</em> block.{% endtrans %}</dd>
  <dt>{% trans %}Session{% endtrans %}</dt>
  <dd>{% trans %}Use the language from a session parameter or a request parameter; for example, adding <em>?language=fr</em> to the end of the URL.{% endtrans %}</dd>
</dl>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
    <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>Languages</em> &gt; {{ detection_link }}.{% endtrans %}</li>
    <li>{% trans %}Check the boxes to enable the desired language detection methods, and uncheck boxes for the methods you do not want to use.{% endtrans %}</li>
    <li>{% trans %}Drag the methods to change their order, if desired.{% endtrans %}</li>
    <li>{% trans %}Click <em>Save settings</em>.{% endtrans %}</li>
    <li>{% trans %}Click <em>Configure</em> on each enabled detection method and verify that its configuration is correct (or update the configuration if not).{% endtrans %}</li>
</ol>", "@help_topics/language.detect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/language/help_topics/language.detect.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 29);
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