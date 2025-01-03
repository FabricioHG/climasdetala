<?php

namespace Drupal\Tests\views_slideshow\Functional\Plugin;

use Drupal\views\Entity\View;
use Drupal\Tests\views\Functional\ViewTestBase;
use Drupal\views\Tests\ViewTestData;

/**
 * Tests the slideshow style views plugin.
 *
 * @group views
 */
class StyleSlideshowTest extends ViewTestBase {

  /**
   * Set default theme to stark.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'views',
    'views_slideshow',
    'views_slideshow_cycle',
    'views_test_config',
    'views_slideshow_test',
  ];

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_style_slideshow'];

  /**
   * {@inheritdoc}
   */
  protected function setUp($import_test_views = TRUE, $modules = ['views_test_config']): void {
    parent::setUp();

    $this->enableViewsTestModule();
    if ($import_test_views) {
      ViewTestData::createTestViews(get_class($this), ['views_slideshow_test']);
    }
  }

  /**
   * Test slideshow display.
   */
  public function testSlideshow() {
    $this->drupalGet('test-style-slideshow');

    $result = $this->cssSelect('.views_slideshow_main');
    $this->assertEquals(count($result), 1, 'Slideshow displayed on page');
  }

  /**
   * Test slideshow control widgets.
   */
  public function testSlideshowWidgets() {
    $this->drupalGet('test-style-slideshow');

    // Ensure no controls are displayed.
    $this->assertCount(0, $this->cssSelect('.views-slideshow-controls-top'));
    $this->assertCount(0, $this->cssSelect('.views-slideshow-controls-bottom'));

    // Test top widget position.
    $view = View::load('test_style_slideshow');
    $display = &$view->getDisplay('default');
    $display['display_options']['style']['options']['widgets'] = [
      'top' => [
        'views_slideshow_controls' => [
          'enable' => TRUE,
          'weight' => 1,
          'hide_on_single_slide' => 0,
          'type' => 'views_slideshow_controls_text',
        ],
      ],
    ];
    $view->save();

    $this->drupalGet('test-style-slideshow');
    $this->assertCount(1, $this->cssSelect('.views-slideshow-controls-top'));
    $this->assertCount(0, $this->cssSelect('.views-slideshow-controls-bottom'));

    // Test bottom widget position.
    $view = View::load('test_style_slideshow');
    $display = &$view->getDisplay('default');
    $display['display_options']['style']['options']['widgets'] = [
      'bottom' => [
        'views_slideshow_controls' => [
          'enable' => TRUE,
          'weight' => 1,
          'hide_on_single_slide' => 0,
          'type' => 'views_slideshow_controls_text',
        ],
      ],
      'top' => [],
    ];
    $view->save();

    $this->drupalGet('test-style-slideshow');
    $this->assertCount(0, $this->cssSelect('.views-slideshow-controls-top'));
    $this->assertCount(1, $this->cssSelect('.views-slideshow-controls-bottom'));
  }

}
