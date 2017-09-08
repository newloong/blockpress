<?php
/**
 * Image Block
 *
 * Represents an image block
 */

namespace LVL99\ACFPageBuilder;

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

class BlockImage extends Block {
  public $name = 'image';
  public $label = 'Image';
  public $description = 'An image block';
  public $display = 'block';
  public $fields = [
    [
      'name' => 'image',
      'label' => 'Image',
      'type' => 'image',
    ],
  ];
}
