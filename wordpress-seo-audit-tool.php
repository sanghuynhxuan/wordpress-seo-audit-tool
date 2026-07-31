<?php
/**
 * Plugin Name: WordPress SEO Audit Tool
 * Description: A technical SEO helper that applies noindex rules to search and 404 pages.
 * Version: 1.0.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

if (! defined('ABSPATH')) { exit; }

require_once __DIR__ . '/includes/Support.php';
require_once __DIR__ . '/includes/Feature.php';

add_action('plugins_loaded', static function (): void {
    (new \SangPortfolio\WordpressSeoAuditTool\Feature())->register();
});
