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

/* @help_topics/contact.adding_fields.html.twig */
class __TwigTemplate_1d94a037acd3e69c72750b7cf7c0a126 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/contact.adding_fields.html.twig"));

        // line 6
        $context["contact_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Contact forms", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["contact_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["contact_link_text"] ?? null), "entity.contact_form.collection"));
        // line 8
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 9
        yield t("Add, remove, or rearrange the fields on personal and site-wide contact forms.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("What are the fields on contact forms?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Both personal and site-wide contact forms will always have <em>Subject</em> and <em>Message</em> fields. You can add additional fields for users to fill out if desired. Note that if you want to display other content on a form page, such as text or images, you can use a content block.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@contact_link</em>.", array("@contact_link" => ($context["contact_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Click <em>Manage fields</em> for the form you want to change the fields of, and add or remove one or more fields on the form.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Manage form display</em> to change the order or configuration of the fields on the form.", array());
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
        return "@help_topics/contact.adding_fields.html.twig";
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
        return array (  84 => 16,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  54 => 8,  52 => 7,  47 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 6 %}{% set contact_link_text %}{% trans %}Contact forms{% endtrans %}{% endset %}
{% set contact_link = render_var(help_route_link(contact_link_text, 'entity.contact_form.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add, remove, or rearrange the fields on personal and site-wide contact forms.{% endtrans %}</p>
<h2>{% trans %}What are the fields on contact forms?{% endtrans %}</h2>
<p>{% trans %}Both personal and site-wide contact forms will always have <em>Subject</em> and <em>Message</em> fields. You can add additional fields for users to fill out if desired. Note that if you want to display other content on a form page, such as text or images, you can use a content block.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ contact_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Manage fields</em> for the form you want to change the fields of, and add or remove one or more fields on the form.{% endtrans %}</li>
  <li>{% trans %}Click <em>Manage form display</em> to change the order or configuration of the fields on the form.{% endtrans %}</li>
</ol>", "@help_topics/contact.adding_fields.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/contact/help_topics/contact.adding_fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 6);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 7, "help_route_link" => 7);

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
