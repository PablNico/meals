<?php

namespace Drupal\meal_integration\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class MealApiController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function categories() {
    $categories = \Drupal::service('meal_integration.service')->getAllCategories();
    return [
      '#theme' => 'meal_integration_theme_hook',
      '#categories' => $categories
    ];
  }

  public function mealsByCategories($category) {
    $meals = \Drupal::service('meal_integration.service')->getMealsByCategory($category);
    return [
      '#theme' => 'meal_integration_theme_hook',
      '#meals' => $meals
    ];
  }

  public function mealDetailsById($mealId) {
    $mealDetails = \Drupal::service('meal_integration.service')->getMealDetailsById($mealId);
    return [
      '#theme' => 'meal_integration_theme_hook',
      '#mealDetails' => $mealDetails
    ];
  }

}
