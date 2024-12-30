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

/* @help_topics/user.create.html.twig */
class __TwigTemplate_f599fbec839fb9c7156c8f6442826265 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/user.create.html.twig"));

        // line 7
        $context["people_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("People", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["people_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["people_link_text"] ?? null), "entity.user.collection"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Create a new user account.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@people_link</em>.", array("@people_link" => ($context["people_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 14
        yield t("Click <em>Add user</em>.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("Enter the <em>Email address</em>, <em>Username</em>, and <em>Password</em> (twice) for the new user.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Verify that the <em>Roles</em> checked for the new user are correct.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("If you want the new user to receive an email message notifying them of the new account, check <em>Notify user of new account</em>.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Optionally, change other settings on the form.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Create new account</em>.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("You will be left on the <em>Add user</em> page; repeat these steps if you have more user accounts to create.", array());
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
        return "@help_topics/user.create.html.twig";
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
        return array (  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  59 => 10,  54 => 9,  52 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% line 7 %}{% set people_link_text %}{% trans %}People{% endtrans %}{% endset %}
{% set people_link = render_var(help_route_link(people_link_text, 'entity.user.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a new user account.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>{{ people_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add user</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the <em>Email address</em>, <em>Username</em>, and <em>Password</em> (twice) for the new user.{% endtrans %}</li>
  <li>{% trans %}Verify that the <em>Roles</em> checked for the new user are correct.{% endtrans %}</li>
  <li>{% trans %}If you want the new user to receive an email message notifying them of the new account, check <em>Notify user of new account</em>.{% endtrans %}</li>
  <li>{% trans %}Optionally, change other settings on the form.{% endtrans %}</li>
  <li>{% trans %}Click <em>Create new account</em>.{% endtrans %}</li>
  <li>{% trans %}You will be left on the <em>Add user</em> page; repeat these steps if you have more user accounts to create.{% endtrans %}</li>
</ol>", "@help_topics/user.create.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/climasdetala.local/web/core/modules/user/help_topics/user.create.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 8, "help_route_link" => 8);

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