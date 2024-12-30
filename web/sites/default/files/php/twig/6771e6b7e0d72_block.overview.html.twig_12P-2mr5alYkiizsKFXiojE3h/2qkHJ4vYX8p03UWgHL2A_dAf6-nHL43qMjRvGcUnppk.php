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

/* @help_topics/block.overview.html.twig */
class __TwigTemplate_dd16ecf0693ebb220c6eee8e5178328c extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/block.overview.html.twig"));

        // line 7
        yield "<h2>";
        yield t("What are blocks?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("Blocks are boxes of content rendered into an area, or region, of a web page of your site. Blocks are placed and configured specifically for each theme.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("What are content blocks?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Content blocks are blocks whose content you can edit. You can define one or more <em>block types</em>, and attach fields to each block type. Content blocks can be placed just like blocks provided by other modules.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What is the block description?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("The block description is an identification name for a block, which is shown in the administrative interface. It is not displayed on the site.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What is the block title?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("The block title is the heading that is optionally shown to site visitors when the block is placed in a region.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("Overview for managing blocks", array());
        yield "</h2>
<p>";
        // line 16
        yield t("The <em>Block</em> module allows you to place blocks in regions of your installed themes, and configure block settings. The <em>Block Content</em> module allows you to manage block types and content blocks. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 17
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 19
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/blocks-chapter.html\">Blocks (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/block.overview.html.twig";
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
        return array (  93 => 19,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}<h2>{% trans %}What are blocks?{% endtrans %}</h2>
<p>{% trans %}Blocks are boxes of content rendered into an area, or region, of a web page of your site. Blocks are placed and configured specifically for each theme.{% endtrans %}</p>
<h2>{% trans %}What are content blocks?{% endtrans %}</h2>
<p>{% trans %}Content blocks are blocks whose content you can edit. You can define one or more <em>block types</em>, and attach fields to each block type. Content blocks can be placed just like blocks provided by other modules.{% endtrans %}</p>
<h2>{% trans %}What is the block description?{% endtrans %}</h2>
<p>{% trans %}The block description is an identification name for a block, which is shown in the administrative interface. It is not displayed on the site.{% endtrans %}</p>
<h2>{% trans %}What is the block title?{% endtrans %}</h2>
<p>{% trans %}The block title is the heading that is optionally shown to site visitors when the block is placed in a region.{% endtrans %}</p>
<h2>{% trans %}Overview for managing blocks{% endtrans %}</h2>
<p>{% trans %}The <em>Block</em> module allows you to place blocks in regions of your installed themes, and configure block settings. The <em>Block Content</em> module allows you to manage block types and content blocks. See the related topics listed below for specific tasks.{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/blocks-chapter.html\">Blocks (Drupal User Guide)</a>{% endtrans %}</li>
</ul>", "@help_topics/block.overview.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/block/help_topics/block.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
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
