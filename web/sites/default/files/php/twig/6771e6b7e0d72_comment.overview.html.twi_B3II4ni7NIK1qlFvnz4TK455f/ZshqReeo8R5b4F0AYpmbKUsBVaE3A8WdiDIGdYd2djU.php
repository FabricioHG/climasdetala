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

/* @help_topics/comment.overview.html.twig */
class __TwigTemplate_9a0b48920830ae6192a329b6886cc4cf extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/comment.overview.html.twig"));

        // line 13
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 14
        $context["users_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("user.overview"));
        // line 15
        yield "<h2>";
        yield t("What is a comment?", array());
        yield "</h2>
<p>";
        // line 16
        yield t("A comment is a piece of content, typically posted by a website visitor, which provides discussion or commentary on other content like blog posts and news articles. Comments are a type of content entity, and can have fields that store text, HTML markup, and other data. Comments are attached to other content entities via Comment fields. See @content_structure_topic for more about content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 17
        yield t("What is a comment type?", array());
        yield "</h2>
<p>";
        // line 18
        yield t("Comments are divided into <em>comment types</em>, which are the entity sub-types for the comment entity type. Each comment type has its own fields and its own form and display settings; each type can be used to comment on a single entity type. You can set up different comment types for different commenting purposes on your web site; for example, you might set up a comment type for recipes that has fields \"How did it taste?\" and \"Did the instructions work?\", and another comment type for blog entries that has only a generic comment body field.", array());
        yield "</p>
<h2>";
        // line 19
        yield t("What is moderation?", array());
        yield "</h2>
<p>";
        // line 20
        yield t("<em>Moderation</em> is a workflow where comments posted by some users on your site are verified before being published, to prevent spam and other bad behavior. The core software provides basic moderation functionality: you can configure permissions so that new comments posted by some user roles start as unpublished until a user with a different role reviews and publishes them. Contributed modules provide additional moderation and spam-reduction functionality, such as requiring untrusted users pass a CAPTCHA test before submitting comments and letting community members flag comments as possible spam. See @users_overview_topic for more about users, permissions, and roles.", array("@users_overview_topic" => ($context["users_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 21
        yield t("Overview of managing comments", array());
        yield "</h2>
<p>";
        // line 22
        yield t("The core Comment module provides the following functionality:", array());
        yield "</p>
<ul>
  <li>";
        // line 24
        yield t("Posting comments", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Creating comment types; the core Field UI module allows you to attach fields to comment types and attach comment reference fields to other entities so that people can comment on them.", array());
        yield "</li>
  <li>";
        // line 26
        yield t("Configuring commenting", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Moderating comments as discussed above", array());
        yield "</li>
</ul>
<p>";
        // line 29
        yield t("See the related topics listed below for specific tasks.", array());
        yield "</p>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/comment.overview.html.twig";
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
        return array (  102 => 29,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  51 => 15,  49 => 14,  47 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 13 %}{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
{% set users_overview_topic = render_var(help_topic_link('user.overview')) %}
<h2>{% trans %}What is a comment?{% endtrans %}</h2>
<p>{% trans %}A comment is a piece of content, typically posted by a website visitor, which provides discussion or commentary on other content like blog posts and news articles. Comments are a type of content entity, and can have fields that store text, HTML markup, and other data. Comments are attached to other content entities via Comment fields. See {{ content_structure_topic }} for more about content entities and fields.{% endtrans %}</p>
<h2>{% trans %}What is a comment type?{% endtrans %}</h2>
<p>{% trans %}Comments are divided into <em>comment types</em>, which are the entity sub-types for the comment entity type. Each comment type has its own fields and its own form and display settings; each type can be used to comment on a single entity type. You can set up different comment types for different commenting purposes on your web site; for example, you might set up a comment type for recipes that has fields \"How did it taste?\" and \"Did the instructions work?\", and another comment type for blog entries that has only a generic comment body field.{% endtrans %}</p>
<h2>{% trans %}What is moderation?{% endtrans %}</h2>
<p>{% trans %}<em>Moderation</em> is a workflow where comments posted by some users on your site are verified before being published, to prevent spam and other bad behavior. The core software provides basic moderation functionality: you can configure permissions so that new comments posted by some user roles start as unpublished until a user with a different role reviews and publishes them. Contributed modules provide additional moderation and spam-reduction functionality, such as requiring untrusted users pass a CAPTCHA test before submitting comments and letting community members flag comments as possible spam. See {{ users_overview_topic }} for more about users, permissions, and roles.{% endtrans %}</p>
<h2>{% trans %}Overview of managing comments{% endtrans %}</h2>
<p>{% trans %}The core Comment module provides the following functionality:{% endtrans %}</p>
<ul>
  <li>{% trans %}Posting comments{% endtrans %}</li>
  <li>{% trans %}Creating comment types; the core Field UI module allows you to attach fields to comment types and attach comment reference fields to other entities so that people can comment on them.{% endtrans %}</li>
  <li>{% trans %}Configuring commenting{% endtrans %}</li>
  <li>{% trans %}Moderating comments as discussed above{% endtrans %}</li>
</ul>
<p>{% trans %}See the related topics listed below for specific tasks.{% endtrans %}</p>", "@help_topics/comment.overview.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/comment/help_topics/comment.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "trans" => 15);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 13, "help_topic_link" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link'],
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
