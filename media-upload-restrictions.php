<?php
/*
 * Plugin Name: Media Upload Restrictions
 * Plugin URI: https://www.itineris.co.uk/
 * Description: Restricts uploads to comply with our upload policy.
 * Author: Itineris Ltd
 * Author URI: https://www.itineris.co.uk/
 * Version: 0.2.0
 */

/**
 * Prevent audio files from being uploaded.
 */
add_filter('upload_mimes', function (array $mime_types): array {
  return array_filter($mime_types, fn (string $mime_type): bool => false === strpos($mime_type, 'audio'));
});

/**
 * Prevent video files from being uploaded.
 */
add_filter('upload_mimes', function (array $mime_types): array {
  return array_filter($mime_types, fn (string $mime_type): bool => false === strpos($mime_type, 'video'));
});
