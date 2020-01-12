<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* phone/index.html.twig */
class __TwigTemplate_888a45d9d3fbfcbe69b7aadb715ec35e4620363795023b31f8ebf77afef066dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phone/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phone/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "phone/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Phone index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Phone Book</h1>

    <h2>Your phone numbers</h2>
    <div>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_new");
        echo "\">Create new</a>
    </div>

    ";
        // line 13
        if ((isset($context["phones"]) || array_key_exists("phones", $context) ? $context["phones"] : (function () { throw new RuntimeError('Variable "phones" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "
    <table class=\"table\">
        <thead>
            <tr>
                <th>Contact name</th>
                <th>Phone_number</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["phones"]) || array_key_exists("phones", $context) ? $context["phones"] : (function () { throw new RuntimeError('Variable "phones" does not exist.', 24, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 25
                echo "            <tr>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "phoneNumber", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_show", ["id" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">show</a>
                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">edit</a>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("share", ["id" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">share</a>
                </td>
            </tr>
            ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["phone"], "share", [], "any", false, false, false, 34));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
                    // line 35
                    echo "                <tr>
                    <td>You are sharing this contact with:</td>
                    <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["share"], "user", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 38
                    echo twig_include($this->env, $context, "share/_delete_form.html.twig");
                    echo "</td>
                </tr>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </tbody>
    </table>
";
        } else {
            // line 46
            echo "        <small colspan=\"5\">no records found</small>
";
        }
        // line 48
        echo "
    <h2>Shared phone numbers</h2>

    ";
        // line 51
        if ((isset($context["shared"]) || array_key_exists("shared", $context) ? $context["shared"] : (function () { throw new RuntimeError('Variable "shared" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "    <table class=\"table\">
        <thead>
        <tr>
            <th>Contact name</th>
            <th>Phone_number</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shared"]) || array_key_exists("shared", $context) ? $context["shared"] : (function () { throw new RuntimeError('Variable "shared" does not exist.', 60, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
                // line 61
                echo "            <tr>
                <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["share"], "name", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["share"], "phoneNumber", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 73
            echo "        <small colspan=\"5\">no records found</small>
    ";
        }
        // line 75
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "phone/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 75,  274 => 73,  269 => 70,  260 => 66,  252 => 63,  248 => 62,  245 => 61,  240 => 60,  230 => 52,  228 => 51,  223 => 48,  219 => 46,  214 => 43,  199 => 41,  182 => 38,  178 => 37,  174 => 35,  157 => 34,  151 => 31,  147 => 30,  143 => 29,  138 => 27,  134 => 26,  131 => 25,  114 => 24,  102 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phone index{% endblock %}

{% block body %}
    <h1>Phone Book</h1>

    <h2>Your phone numbers</h2>
    <div>
        <a href=\"{{ path('phone_new') }}\">Create new</a>
    </div>

    {% if phones %}

    <table class=\"table\">
        <thead>
            <tr>
                <th>Contact name</th>
                <th>Phone_number</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for phone in phones %}
            <tr>
                <td>{{ phone.name }}</td>
                <td>{{ phone.phoneNumber }}</td>
                <td>
                    <a href=\"{{ path('phone_show', {'id': phone.id}) }}\">show</a>
                    <a href=\"{{ path('phone_edit', {'id': phone.id}) }}\">edit</a>
                    <a href=\"{{ path('share', {'id': phone.id}) }}\">share</a>
                </td>
            </tr>
            {% for share in phone.share %}
                <tr>
                    <td>You are sharing this contact with:</td>
                    <td>{{ share.user.name }}</td>
                    <td>{{ include('share/_delete_form.html.twig') }}</td>
                </tr>
            {% endfor %}

        {% endfor %}
        </tbody>
    </table>
{% else %}
        <small colspan=\"5\">no records found</small>
{% endif %}

    <h2>Shared phone numbers</h2>

    {% if shared %}
    <table class=\"table\">
        <thead>
        <tr>
            <th>Contact name</th>
            <th>Phone_number</th>
        </tr>
        </thead>
        <tbody>
        {% for share in shared %}
            <tr>
                <td>{{ share.name }}</td>
                <td>{{ share.phoneNumber }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% else %}
        <small colspan=\"5\">no records found</small>
    {% endif %}

{% endblock %}
", "phone/index.html.twig", "/home/me/symfonie/phonebook/templates/phone/index.html.twig");
    }
}
