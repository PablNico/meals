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
      '#theme' => 'categories',
      '#categories' => $categories
    ];
  }

  public function mealsByCategories($category) {
    $meals = \Drupal::service('meal_integration.service')->getMealsByCategory($category);
    return [
      '#theme' => 'meals_by_categories',
      '#meals' => $meals
    ];
  }

  public function mealDetailsById($mealId) {
    $mealDetails = \Drupal::service('meal_integration.service')->getMealDetailsById($mealId);
    return [
      '#theme' => 'meal_details',
      '#mealDetails' => $mealDetails
    ];
  }

}
