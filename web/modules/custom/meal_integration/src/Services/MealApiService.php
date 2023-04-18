<?php

namespace Drupal\meal_integration\Services;

use Drupal\Core\Config\ConfigFactory;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;

/**
 * Defines HelloController class.
 */
class MealApiService {

  /**
   * The logger interface.
   *
   * @var \Psr\Log\LoggerInterface
   */
  private $logger;

  /**
   * Meal APÌ client.
   *
   * @var \GuzzleHttp\Client
   */
  private $mealClient;


  public function __construct(ConfigFactoryInterface $configFactory, LoggerInterface $logger) {
    $mealConfig = $configFactory->get('meal_integration.settings');
    $mealUrl = $mealConfig->get('meal_url');
    $apiKey = $mealConfig->get('api-key');
    $this->mealClient = new Client(
      [
        'base_uri' => "{$mealUrl}/{$apiKey}/",
      ]
    );

    $this->logger = $logger;
  }

  public function getAllCategories() {
    return json_decode($this->mealClient->get('categories.php')->getBody()->getContents())->categories;
  }

  public function getRandomMeal() {
    return $this->mealClient->get('random.php')->getBody()->getContents();
  }

  public function getMealsByCategory($category) {
    return json_decode($this->mealClient->get("filter.php?c={$category}")->getBody()->getContents())->meals;
  }

  public function getMealDetailsById($mealId) {
    return reset(json_decode($this->mealClient->get("lookup.php?i={$mealId}")->getBody()->getContents())->meals);
  }

}
