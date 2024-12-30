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

/* @help_topics/comment.moderating.html.twig */
class __TwigTemplate_345934e223dd0289f6931c1f936fbb67 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/comment.moderating.html.twig"));

        // line 8
        $context["comment_unpublished_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "  ";
            yield t("Unapproved comments", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["comment_unpublished_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_unpublished_link_text"] ?? null), "comment.admin_approval"));
        // line 12
        $context["comment_published_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "  ";
            yield t("Comments", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["comment_published_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_published_link_text"] ?? null), "comment.admin"));
        // line 16
        $context["comment_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "  ";
            yield t("Administer comments and comment settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 20
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 21
        yield t("Decide which comments are shown on the website.", array());
        yield "</p>
<h2>";
        // line 22
        yield t("Who can moderate comments?", array());
        yield "</h2>
<p>";
        // line 23
        yield t("Users with the <em>@comment_permissions_link</em> permission (typically administrators) can moderate comments. You will also need the <em>Access the Content Overview page</em> permission from the Node module (if it is installed) to navigate to the comment management page.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 24
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 26
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <em>@comment_published_link</em>. A list of all comments is shown.", array("@comment_published_link" => ($context["comment_published_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 27
        yield t("To unpublish comments, select one or more comments by checking the boxes on the left side (right side in right-to-left languages). Then select <em>Unpublish comment</em> from the <em>Action</em> select list and click <em>Apply to selected items</em>. If you select the <em>Delete comment</em> action, you can instead delete the unwanted  comments.", array());
        yield "</li>
  <li>";
        // line 28
        yield t("To change the content of a comment click <em>Edit</em> from the dropdown button for a particular comment.", array());
        yield "</li>
  <li>";
        // line 29
        yield t("To publish comments that are not yet visible on the website, navigate to the <em>@comment_unpublished_link</em> tab. Select one or more comments by checking the boxes on the left side (right side in right-to-left languages). Then select <em>Publish comment</em> from the <em>Action</em> select list and click <em>Apply to selected items</em>.", array("@comment_unpublished_link" => ($context["comment_unpublished_link"] ?? null), ));
        yield "</li>
</ol>
<h2>";
        // line 31
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/comment/administering-and-approving-comments\">";
        // line 33
        yield t("Online documentation for moderating comments", array());
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
        return "@help_topics/comment.moderating.html.twig";
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
        return array (  118 => 33,  113 => 31,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  74 => 20,  72 => 19,  67 => 17,  65 => 16,  63 => 15,  58 => 13,  56 => 12,  54 => 11,  49 => 9,  47 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 8 %}{% set comment_unpublished_link_text %}
  {% trans %}Unapproved comments{% endtrans %}
{% endset %}
{% set comment_unpublished_link = render_var(help_route_link(comment_unpublished_link_text, 'comment.admin_approval')) %}
{% set comment_published_link_text %}
  {% trans %}Comments{% endtrans %}
{% endset %}
{% set comment_published_link = render_var(help_route_link(comment_published_link_text, 'comment.admin')) %}
{% set comment_permissions_link_text %}
  {% trans %}Administer comments and comment settings{% endtrans %}
{% endset %}
{% set comment_permissions_link = render_var(help_route_link(comment_permissions_link_text, 'user.admin_permissions.module', {'modules': 'comment'})) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Decide which comments are shown on the website.{% endtrans %}</p>
<h2>{% trans %}Who can moderate comments?{% endtrans %}</h2>
<p>{% trans %}Users with the <em>{{ comment_permissions_link }}</em> permission (typically administrators) can moderate comments. You will also need the <em>Access the Content Overview page</em> permission from the Node module (if it is installed) to navigate to the comment management page.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <em>{{ comment_published_link }}</em>. A list of all comments is shown.{% endtrans %}</li>
  <li>{% trans %}To unpublish comments, select one or more comments by checking the boxes on the left side (right side in right-to-left languages). Then select <em>Unpublish comment</em> from the <em>Action</em> select list and click <em>Apply to selected items</em>. If you select the <em>Delete comment</em> action, you can instead delete the unwanted  comments.{% endtrans %}</li>
  <li>{% trans %}To change the content of a comment click <em>Edit</em> from the dropdown button for a particular comment.{% endtrans %}</li>
  <li>{% trans %}To publish comments that are not yet visible on the website, navigate to the <em>{{ comment_unpublished_link }}</em> tab. Select one or more comments by checking the boxes on the left side (right side in right-to-left languages). Then select <em>Publish comment</em> from the <em>Action</em> select list and click <em>Apply to selected items</em>.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/comment/administering-and-approving-comments\">{% trans %}Online documentation for moderating comments{% endtrans %}</a></li>
</ul>", "@help_topics/comment.moderating.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/comment/help_topics/comment.moderating.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 23);
        static $functions = array("render_var" => 11, "help_route_link" => 11);

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