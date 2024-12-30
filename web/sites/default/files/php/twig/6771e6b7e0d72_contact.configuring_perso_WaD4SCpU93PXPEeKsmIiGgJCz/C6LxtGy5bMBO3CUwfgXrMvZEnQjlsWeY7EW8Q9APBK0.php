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

/* @help_topics/contact.configuring_personal.html.twig */
class __TwigTemplate_800e2d4d1890f2c13580831cf2888f68 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/contact.configuring_personal.html.twig"));

        // line 7
        $context["config_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Account settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["config_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["config_link_text"] ?? null), "entity.user.admin_form"));
        // line 9
        $context["permission_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Permissions", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["permission_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["permission_link_text"] ?? null), "user.admin_permissions"));
        // line 11
        $context["adding_fields_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("contact.adding_fields"));
        // line 12
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Configure personal contact forms for registered users on the website.", array());
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <em>@config_link</em>.", array("@config_link" => ($context["config_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("In the <em>Contact settings</em> section, check/uncheck the box to enable/disable the contact form for new user accounts.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save configuration</em>.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <em>@permission_link</em>.", array("@permission_link" => ($context["permission_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 20
        yield t("Verify that permissions are correct for your site's roles, including the generic <em>Anonymous user</em> and <em>Authenticated user</em>. In order to use personal contact forms, users need both <em>View user information</em> (in the <em>User</em> section, which enables them to view user profiles) and <em>Use users' personal contact forms</em> (in the <em>Contact</em> section, which enables them to use contact forms if they can view user profiles).", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Click <em>Save permissions</em>.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("The contact form will always have <em>Subject</em> and <em>Message</em> fields. If you want to add more fields, follow the steps in @adding_fields_topic.", array("@adding_fields_topic" => ($context["adding_fields_topic"] ?? null), ));
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
        return "@help_topics/contact.configuring_personal.html.twig";
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
        return array (  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  72 => 14,  68 => 13,  63 => 12,  61 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set config_link_text %}{% trans %}Account settings{% endtrans %}{% endset %}
{% set config_link = render_var(help_route_link(config_link_text, 'entity.user.admin_form')) %}
{% set permission_link_text %}{% trans %}Permissions{% endtrans %}{% endset %}
{% set permission_link = render_var(help_route_link(permission_link_text, 'user.admin_permissions')) %}
{% set adding_fields_topic = render_var(help_topic_link('contact.adding_fields')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure personal contact forms for registered users on the website.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <em>{{ config_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}In the <em>Contact settings</em> section, check/uncheck the box to enable/disable the contact form for new user accounts.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <em>{{ permission_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Verify that permissions are correct for your site's roles, including the generic <em>Anonymous user</em> and <em>Authenticated user</em>. In order to use personal contact forms, users need both <em>View user information</em> (in the <em>User</em> section, which enables them to view user profiles) and <em>Use users' personal contact forms</em> (in the <em>Contact</em> section, which enables them to use contact forms if they can view user profiles).{% endtrans %}</li>
  <li>{% trans %}Click <em>Save permissions</em>.{% endtrans %}</li>
  <li>{% trans %}The contact form will always have <em>Subject</em> and <em>Message</em> fields. If you want to add more fields, follow the steps in {{ adding_fields_topic }}.{% endtrans %}</li>
</ol>", "@help_topics/contact.configuring_personal.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/contact/help_topics/contact.configuring_personal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 8, "help_route_link" => 8, "help_topic_link" => 11);

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
