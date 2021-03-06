<?php

namespace Drupal\Tests\quickedit\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests Layout Builder integration with Quick Edit.
 *
 * @group quickedit
 */
class LayoutBuilderQuickEditTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'layout_builder',
    'node',
    'quickedit',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Create two nodes.
    $this->createContentType([
      'type' => 'bundle_with_section_field',
      'name' => 'Bundle with section field',
    ]);
    $this->createNode([
      'type' => 'bundle_with_section_field',
    ]);
  }

  /**
   * Tests Quick Edit integration with a block from a different entity type.
   */
  public function testPlaceFieldBlockFromDifferentEntityType() {
    $page = $this->getSession()->getPage();

    $this->drupalLogin($this->drupalCreateUser([
      'configure any layout',
      'administer node display',
      'access in-place editing',
    ]));

    // From the manage display page, go to manage the layout.
    $this->drupalGet('admin/structure/types/manage/bundle_with_section_field/display/default');
    $this->submitForm(['layout[enabled]' => TRUE], 'Save');
    $this->submitForm(['layout[allow_custom]' => TRUE], 'Save');

    // Place a field block for a user entity field.
    $this->drupalGet('node/1/layout');
    $page->clickLink('Add block');
    $page->clickLink('Name');
    $page->pressButton('Add block');
    $page->pressButton('Save layout');

    $this->drupalGet('node/1');
    $this->assertSession()->statusCodeEquals(200);
  }

}
