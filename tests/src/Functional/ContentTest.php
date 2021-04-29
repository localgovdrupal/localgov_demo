<?php

namespace Drupal\Tests\localgov_demo\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the demo content.
 *
 * @group localgov_demo
 */
class ContentTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'localgov_theme';

  /**
   * {@inheritdoc}
   */
  protected $profile = 'localgov';

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'localgov_demo',
  ];

  /**
   * Test default content.
   */
  public function testPageContent() {

    // Test Service landing page: Adult health and social care.
    $this->drupalGet('/adult-health-and-social-care');
    $this->assertSession()->elementTextContains('css', 'header h1', 'Adult health and social care');
    $this->assertSession()->elementTextContains('css', 'header p', 'Advice and support for adult health and social care');
    $this->assertSession()->elementTextContains('css', '.block-localgov-service-cta-block nav', 'Find out about meals on wheels');
    $this->assertSession()->elementTextContains('css', '.block-localgov-service-cta-block nav', 'Request help for an adult');
    $this->assertSession()->elementTextContains('css', 'main .servicehub--more h3', 'Travel passes and support');
    $this->assertSession()->elementTextContains('css', 'main .servicehub--more p', 'Blue Badges, Freedom Passes for older or disabled people, London Taxicards and other travel support.');
    $this->assertSession()->elementTextContains('css', 'main .servicehub--status h3', 'Service updates');
    $this->assertSession()->elementTextContains('css', 'main .servicehub--update_inner', 'Adult social care service is working normally');
    $this->assertSession()->elementTextContains('css', 'main .contact-container h2', 'Contact this service');
    $this->assertSession()->elementTextContains('css', 'main .contact-container', 'Send us a message');
    $this->assertSession()->elementTextContains('css', 'main .contact-container', '555 111 222 333');
    $this->assertSession()->elementTextContains('css', 'main .contact-container', 'Opening times');
    $this->assertSession()->elementTextContains('css', 'main .contact-container .contact-title', 'Agile Collective');
    $this->assertSession()->elementTextContains('css', 'main .contact-container .contact-bottom', 'If you have hearing or speech difficulties, please call 555 111 222 333');
    $this->assertSession()->elementTextContains('css', 'main .sidebar', 'Popular topics');
    $this->assertSession()->elementTextContains('css', 'main .sidebar', 'Garden waste');
    $this->assertSession()->elementTextContains('css', 'main .sidebar', 'Parks and gardens');
  }

}
