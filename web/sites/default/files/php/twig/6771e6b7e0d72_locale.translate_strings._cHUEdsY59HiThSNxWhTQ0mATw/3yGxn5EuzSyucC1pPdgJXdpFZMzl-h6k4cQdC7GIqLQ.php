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

/* @help_topics/locale.translate_strings.html.twig */
class __TwigTemplate_5c8f85fad3c2aef383e01498dce603d8 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/locale.translate_strings.html.twig"));

        // line 9
        $context["translate_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("User interface translation", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["translate_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["translate_text"] ?? null), "locale.translate_page"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Translate user interface text strings from English into a non-English language that is configured on your site.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; @translate_link.", array("@translate_link" => ($context["translate_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 16
        yield t("Using the filters, search for a string or set of strings that you want to translate; make sure to select the correct <em>Translation language</em> if you have more than one non-English language on your site.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Enter new translations and click <em>Save translations</em>.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Repeat these steps until all of the desired user interface text is translated for all languages on your site.", array());
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
        return "@help_topics/locale.translate_strings.html.twig";
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
        return array (  80 => 18,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  59 => 12,  54 => 11,  52 => 10,  47 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 9 %}{% set translate_text %}{% trans %}User interface translation{% endtrans %}{% endset %}
{% set translate_link = render_var(help_route_link(translate_text, 'locale.translate_page')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Translate user interface text strings from English into a non-English language that is configured on your site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; {{ translate_link }}.{% endtrans %}</li>
  <li>{% trans %}Using the filters, search for a string or set of strings that you want to translate; make sure to select the correct <em>Translation language</em> if you have more than one non-English language on your site.{% endtrans %}</li>
  <li>{% trans %}Enter new translations and click <em>Save translations</em>.{% endtrans %}</li>
  <li>{% trans %}Repeat these steps until all of the desired user interface text is translated for all languages on your site.{% endtrans %}</li>
</ol>", "@help_topics/locale.translate_strings.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/locale/help_topics/locale.translate_strings.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 15);
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
