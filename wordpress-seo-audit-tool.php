<?php
/**
 * Plugin Name: WordPress SEO Audit Tool
 * Description: A WordPress SEO audit starter focused on technical checks and actionable remediation.
 * Version: 0.1.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

namespace SangPortfolio;

if (! defined('ABSPATH')) {
    exit;
}

final class WordpressSeoAuditToolPlugin {
    public function __construct() {
        add_action('init', [$this, 'bootstrap']);
    }

    public function bootstrap(): void {
        do_action('sang_portfolio_wordpress_seo_audit_tool_ready');
    }
}

new WordpressSeoAuditToolPlugin();
