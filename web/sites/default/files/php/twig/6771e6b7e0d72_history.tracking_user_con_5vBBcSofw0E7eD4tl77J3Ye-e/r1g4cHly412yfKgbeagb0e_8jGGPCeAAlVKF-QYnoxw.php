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

/* @help_topics/history.tracking_user_content.html.twig */
class __TwigTemplate_efc6bd60b46b4d33133d8be2508ba1ce extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/history.tracking_user_content.html.twig"));

        // line 6
        yield "<h2>";
        yield t("What content visits are tracked?", array());
        yield "</h2>
<p>";
        // line 7
        yield t("The core History module tracks when each logged-in user has most recently visited each content item page on the site. This allows content to be marked as <em>new</em> or <em>updated</em> for each user, meaning that it was newly created or has been updated since the last time they visited its page. These records are kept for one month, meaning that content older than one month is never marked as new or updated.", array());
        yield "</p>
<h2>";
        // line 8
        yield t("What options are available for using this tracking information?", array());
        yield "</h2>
<p>";
        // line 9
        yield t("You can display the new/updated status of content by creating or editing a view. There is a <em>Has new content</em> field for <em>Content</em> views, which displays the new/updated marker. There is also a <em>Has new content</em> filter, which limits the view to new and updated content.", array());
        yield "</p>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/history.tracking_user_content.html.twig";
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
        return array (  60 => 9,  56 => 8,  52 => 7,  47 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 6 %}<h2>{% trans %}What content visits are tracked?{% endtrans %}</h2>
<p>{% trans %}The core History module tracks when each logged-in user has most recently visited each content item page on the site. This allows content to be marked as <em>new</em> or <em>updated</em> for each user, meaning that it was newly created or has been updated since the last time they visited its page. These records are kept for one month, meaning that content older than one month is never marked as new or updated.{% endtrans %}</p>
<h2>{% trans %}What options are available for using this tracking information?{% endtrans %}</h2>
<p>{% trans %}You can display the new/updated status of content by creating or editing a view. There is a <em>Has new content</em> field for <em>Content</em> views, which displays the new/updated marker. There is also a <em>Has new content</em> filter, which limits the view to new and updated content.{% endtrans %}</p>", "@help_topics/history.tracking_user_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/history/help_topics/history.tracking_user_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                [],
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