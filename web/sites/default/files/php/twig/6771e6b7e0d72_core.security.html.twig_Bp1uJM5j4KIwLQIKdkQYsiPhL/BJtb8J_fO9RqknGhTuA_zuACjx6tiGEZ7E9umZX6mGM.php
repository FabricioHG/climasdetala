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

/* @help_topics/core.security.html.twig */
class __TwigTemplate_f1c908ed24898c08f8c1be11e69d7be8 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/core.security.html.twig"));

        // line 5
        yield "<h2>";
        yield t("What are security updates?", array());
        yield "</h2>
<p>";
        // line 6
        yield t("Any software occasionally has bugs, and sometimes these bugs have security implications. When security bugs are fixed in the core software, modules, or themes that your site uses, they are released in a <em>security update</em>. You will need to apply security updates in order to keep your site secure.", array());
        yield "</p>
<h2>";
        // line 7
        yield t("What are security advisories?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("A security advisory is a public announcement about a reported security problem in the core software. Contributed projects with a shield icon and \"Stable releases for this project are covered by the security advisory policy\" on their project page are also covered by Drupal's security advisory policy. Security advisories are managed by the <a href=\"https://www.drupal.org/drupal-security-team\">Drupal Security Team</a>.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("Security tasks", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Keeping track of updates, updating the core software, and updating contributed modules and/or themes are all part of keeping your site secure. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Additional resources", array());
        yield "</h2>
<ul>
    <li>";
        // line 13
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>", array());
        yield "</li>
  <li>";
        // line 14
        yield t("<a href=\"https://www.drupal.org/drupal-security-team/security-advisory-process-and-permissions-policy\">Security advisory process and permissions policy</a>", array());
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
        return "@help_topics/core.security.html.twig";
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
        return array (  81 => 14,  77 => 13,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 5 %}<h2>{% trans %}What are security updates?{% endtrans %}</h2>
<p>{% trans %}Any software occasionally has bugs, and sometimes these bugs have security implications. When security bugs are fixed in the core software, modules, or themes that your site uses, they are released in a <em>security update</em>. You will need to apply security updates in order to keep your site secure.{% endtrans %}</p>
<h2>{% trans %}What are security advisories?{% endtrans %}</h2>
<p>{% trans %}A security advisory is a public announcement about a reported security problem in the core software. Contributed projects with a shield icon and \"Stable releases for this project are covered by the security advisory policy\" on their project page are also covered by Drupal's security advisory policy. Security advisories are managed by the <a href=\"https://www.drupal.org/drupal-security-team\">Drupal Security Team</a>.{% endtrans %}</p>
<h2>{% trans %}Security tasks{% endtrans %}</h2>
<p>{% trans %}Keeping track of updates, updating the core software, and updating contributed modules and/or themes are all part of keeping your site secure. See the related topics listed below for specific tasks.{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>{% endtrans %}</li>
  <li>{% trans %}<a href=\"https://www.drupal.org/drupal-security-team/security-advisory-process-and-permissions-policy\">Security advisory process and permissions policy</a>{% endtrans %}</li>
</ul>", "@help_topics/core.security.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/help/help_topics/core.security.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 5);
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
