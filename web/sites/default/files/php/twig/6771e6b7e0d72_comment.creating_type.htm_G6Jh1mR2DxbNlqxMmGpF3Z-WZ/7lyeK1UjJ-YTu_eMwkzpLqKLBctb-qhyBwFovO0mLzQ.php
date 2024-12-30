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

/* @help_topics/comment.creating_type.html.twig */
class __TwigTemplate_5bb4fb8816032a975eb60da78fe99feb extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/comment.creating_type.html.twig"));

        // line 10
        $context["comment_types_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            yield t("Comment types", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        $context["comment_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_types_link_text"] ?? null), "entity.comment_type.collection"));
        // line 14
        $context["comment_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "  ";
            yield t("Administer comment types and settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 18
        $context["comment_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("comment.overview"));
        // line 19
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 20
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 21
        yield t("Create a new comment type. See @comment_overview_topic for information about comments and comment types.", array("@comment_overview_topic" => ($context["comment_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 22
        yield t("Who can create a comment type?", array());
        yield "</h2>
<p>";
        // line 23
        yield t("Users with the <em>@comment_permissions_link</em> permission (typically administrators) can create comment types.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 24
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 26
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@comment_types_link</em>.", array("@comment_types_link" => ($context["comment_types_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 27
        yield t("Click <em>Add comment type</em>.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("In the <em>Label</em> field, enter a name for the comment type, which is how it will be listed in the administrative interface.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("In the <em>Target entity type</em> field, select the entity type to be commented on. See @content_structure_topic for more about content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. The comment type will be created.", array());
        yield "</li>
  <li>";
        // line 31
        yield t("Optionally, if you have the core Field UI module installed you can follow the steps in the related topics to add fields to the new comment type, set up the editing form, and configure the display.", array());
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
        return "@help_topics/comment.creating_type.html.twig";
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
        return array (  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  69 => 20,  67 => 19,  65 => 18,  63 => 17,  58 => 15,  56 => 14,  54 => 13,  49 => 11,  47 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 10 %}{% set comment_types_link_text %}
  {% trans %}Comment types{% endtrans %}
{% endset %}
{% set comment_types_link = render_var(help_route_link(comment_types_link_text, 'entity.comment_type.collection')) %}
{% set comment_permissions_link_text %}
  {% trans %}Administer comment types and settings{% endtrans %}
{% endset %}
{% set comment_permissions_link = render_var(help_route_link(comment_permissions_link_text, 'user.admin_permissions.module', {'modules': 'comment'})) %}
{% set comment_overview_topic = render_var(help_topic_link('comment.overview')) %}
{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a new comment type. See {{ comment_overview_topic }} for information about comments and comment types.{% endtrans %}</p>
<h2>{% trans %}Who can create a comment type?{% endtrans %}</h2>
<p>{% trans %}Users with the <em>{{ comment_permissions_link }}</em> permission (typically administrators) can create comment types.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ comment_types_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add comment type</em>.{% endtrans %}</li>
  <li>{% trans %}In the <em>Label</em> field, enter a name for the comment type, which is how it will be listed in the administrative interface.{% endtrans %}</li>
  <li>{% trans %}In the <em>Target entity type</em> field, select the entity type to be commented on. See {{ content_structure_topic }} for more about content entities and fields.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. The comment type will be created.{% endtrans %}</li>
  <li>{% trans %}Optionally, if you have the core Field UI module installed you can follow the steps in the related topics to add fields to the new comment type, set up the editing form, and configure the display.{% endtrans %}</li>
</ol>", "@help_topics/comment.creating_type.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/comment/help_topics/comment.creating_type.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "trans" => 11);
        static $filters = array("escape" => 21);
        static $functions = array("render_var" => 13, "help_route_link" => 13, "help_topic_link" => 18);

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