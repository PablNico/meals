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

/* modules/custom/meal_integration/templates/categories-links.html.twig */
class __TwigTemplate_976c1a02db27e4274a8e007053baa13b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<ul>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "    <li>
      <a href=\"/category/";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "strCategory", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "strCategory", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo " <a/>
      <img src=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "strCategoryThumb", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>


<ul>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 14
            echo "    <li><a href=\"/meal/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["meal"], "idMeal", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["meal"], "strMeal", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>

<h3>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mealDetails"] ?? null), "strMeal", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</h3>
<ul>
  <li>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mealDetails"] ?? null), "strCategory", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</li>
  <li>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mealDetails"] ?? null), "strArea", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</li>
</ul>

<img src=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mealDetails"] ?? null), "strMealThumb", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\">
<p>
  ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mealDetails"] ?? null), "strInstructions", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
</p>

";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\Core\Template\DebugExtension::dump($this->env, $context, ...[0 => $this->sandbox->ensureToStringAllowed(($context["mealDetails"] ?? null), 29, $this->source)]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/meal_integration/templates/categories-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  110 => 26,  105 => 24,  99 => 21,  95 => 20,  90 => 18,  86 => 16,  75 => 14,  71 => 13,  65 => 9,  56 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<ul>
  {% for category in categories %}
    <li>
      <a href=\"/category/{{ category.strCategory }}\"> {{ category.strCategory }} <a/>
      <img src=\"{{ category.strCategoryThumb }}\">
    </li>
  {% endfor %}
</ul>


<ul>
  {% for meal in meals %}
    <li><a href=\"/meal/{{ meal.idMeal }}\">{{ meal.strMeal }}</a></li>
  {% endfor %}
</ul>

<h3>{{ mealDetails.strMeal }}</h3>
<ul>
  <li>{{ mealDetails.strCategory }}</li>
  <li>{{ mealDetails.strArea }}</li>
</ul>

<img src=\"{{ mealDetails.strMealThumb }}\">
<p>
  {{ mealDetails.strInstructions }}
</p>

{{ dump(mealDetails) }}
", "modules/custom/meal_integration/templates/categories-links.html.twig", "/app/web/modules/custom/meal_integration/templates/categories-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 5);
        static $functions = array("dump" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['dump']
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
