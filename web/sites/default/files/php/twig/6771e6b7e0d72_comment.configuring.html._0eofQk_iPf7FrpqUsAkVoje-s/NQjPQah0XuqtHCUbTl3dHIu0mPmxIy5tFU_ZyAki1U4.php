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

/* @help_topics/comment.configuring.html.twig */
class __TwigTemplate_26715ad9240c29bc59adfbfd8b2a250d extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/comment.configuring.html.twig"));

        // line 9
        $context["comment_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield t("Administer comments and comment settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 13
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 14
        $context["comment_type_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("comment.creating_type"));
        // line 15
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 16
        yield t("Configure a content entity type/subtype to allow commenting, using a comment type that you have configured. See @content_structure_topic for more about content entities and fields, and @comment_type_topic to configure a comment type.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), "@comment_type_topic" => ($context["comment_type_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 17
        yield t("Who can configure comments?", array());
        yield "</h2>
<p>";
        // line 18
        yield t("In order to follow these steps, the Field UI module must be installed. You'll need the Comment module's <em>@comment_permissions_link</em> permission, in order to change comment settings for a comment field. You'll also need to have the appropriate permission for adding fields to the entity type or subtype that the comments are attached to. For example, to add a comment field to content items provided by the Node module, you would need the Node module's <em>Administer content types</em> permission.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 19
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 21
        yield t("Follow the steps in the related <em>Adding a field to an entity sub-type</em> topic to add a field of type <em>Comments</em> to the desired entity type or sub-type.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("On the first field settings page, choose the <em>Comment type</em> to use for this entity type or sub-type. You'll also notice that the <em>Allowed number of values</em> field cannot be changed for comment fields.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("On the next field settings page, enter the desired settings for the comment field:", array());
        // line 24
        yield "    <ul>
      <li>";
        // line 25
        yield t("<em>Threading</em>: whether or not the comments are collected by threads, with people able to reply to particular comments instead of to the content entity itself.", array());
        yield "</li>
      <li>";
        // line 26
        yield t("<em>Comments per page</em>: the maximum number of comments displayed on one page (a pager will be added if you exceed this limit).", array());
        yield "</li>
      <li>";
        // line 27
        yield t("<em>Anonymous commenting</em>: whether or not anonymous commenters are allowed or required to leave contact information with their comments (only applies if anonymous users have permission to post comments).", array());
        yield "</li>
      <li>";
        // line 28
        yield t("<em>Show reply form on the same page as comments</em>: whether the comment reply form is displayed on the same page as the comments. If this is not selected, clicking <em>Reply</em> will open a new page with the reply form.", array());
        yield "</li>
      <li>";
        // line 29
        yield t("<em>Preview comments</em>: whether previewing comments before submission is <em>Required</em>, <em>Optional</em>, or <em>Disabled</em>.", array());
        yield "</li>
      <li>";
        // line 30
        yield t("<em>Default value</em>: each individual entity has its own comment settings, but here you can set defaults for the comment settings for this entity type or subtype. The comment settings values are:", array());
        // line 31
        yield "        <ul>
          <li>";
        // line 32
        yield t("<em>Open</em>: comments are allowed.", array());
        yield "</li>
          <li>";
        // line 33
        yield t("<em>Closed</em>: past comments remain visible, but no new comments are allowed.", array());
        yield "</li>
          <li>";
        // line 34
        yield t("<em>Hidden</em>: past comments are hidden, and no new comments are allowed.", array());
        yield "</li>
        </ul>
      </li>
    </ul>
  </li>
</ol>
<h2>";
        // line 40
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/comment/administering-a-content-types-comment-settings\">";
        // line 42
        yield t("Online documentation for content comment settings", array());
        yield "</a></li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/comment.configuring.html.twig";
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
        return array (  141 => 42,  136 => 40,  127 => 34,  123 => 33,  119 => 32,  116 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  91 => 24,  89 => 23,  85 => 22,  81 => 21,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  59 => 15,  57 => 14,  55 => 13,  53 => 12,  49 => 10,  47 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 9 %}{% set comment_permissions_link_text %}
{% trans %}Administer comments and comment settings{% endtrans %}
{% endset %}
{% set comment_permissions_link = render_var(help_route_link(comment_permissions_link_text, 'user.admin_permissions.module', {'modules': 'comment'})) %}
{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
{% set comment_type_topic = render_var(help_topic_link('comment.creating_type')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure a content entity type/subtype to allow commenting, using a comment type that you have configured. See {{ content_structure_topic }} for more about content entities and fields, and {{ comment_type_topic }} to configure a comment type.{% endtrans %}</p>
<h2>{% trans %}Who can configure comments?{% endtrans %}</h2>
<p>{% trans %}In order to follow these steps, the Field UI module must be installed. You'll need the Comment module's <em>{{ comment_permissions_link }}</em> permission, in order to change comment settings for a comment field. You'll also need to have the appropriate permission for adding fields to the entity type or subtype that the comments are attached to. For example, to add a comment field to content items provided by the Node module, you would need the Node module's <em>Administer content types</em> permission.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Follow the steps in the related <em>Adding a field to an entity sub-type</em> topic to add a field of type <em>Comments</em> to the desired entity type or sub-type.{% endtrans %}</li>
  <li>{% trans %}On the first field settings page, choose the <em>Comment type</em> to use for this entity type or sub-type. You'll also notice that the <em>Allowed number of values</em> field cannot be changed for comment fields.{% endtrans %}</li>
  <li>{% trans %}On the next field settings page, enter the desired settings for the comment field:{% endtrans %}
    <ul>
      <li>{% trans %}<em>Threading</em>: whether or not the comments are collected by threads, with people able to reply to particular comments instead of to the content entity itself.{% endtrans %}</li>
      <li>{% trans %}<em>Comments per page</em>: the maximum number of comments displayed on one page (a pager will be added if you exceed this limit).{% endtrans %}</li>
      <li>{% trans %}<em>Anonymous commenting</em>: whether or not anonymous commenters are allowed or required to leave contact information with their comments (only applies if anonymous users have permission to post comments).{% endtrans %}</li>
      <li>{% trans %}<em>Show reply form on the same page as comments</em>: whether the comment reply form is displayed on the same page as the comments. If this is not selected, clicking <em>Reply</em> will open a new page with the reply form.{% endtrans %}</li>
      <li>{% trans %}<em>Preview comments</em>: whether previewing comments before submission is <em>Required</em>, <em>Optional</em>, or <em>Disabled</em>.{% endtrans %}</li>
      <li>{% trans %}<em>Default value</em>: each individual entity has its own comment settings, but here you can set defaults for the comment settings for this entity type or subtype. The comment settings values are:{% endtrans %}
        <ul>
          <li>{% trans %}<em>Open</em>: comments are allowed.{% endtrans %}</li>
          <li>{% trans %}<em>Closed</em>: past comments remain visible, but no new comments are allowed.{% endtrans %}</li>
          <li>{% trans %}<em>Hidden</em>: past comments are hidden, and no new comments are allowed.{% endtrans %}</li>
        </ul>
      </li>
    </ul>
  </li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/comment/administering-a-content-types-comment-settings\">{% trans %}Online documentation for content comment settings{% endtrans %}</a></li>
</ul>", "@help_topics/comment.configuring.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/comment/help_topics/comment.configuring.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 10);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 12, "help_route_link" => 12, "help_topic_link" => 13);

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