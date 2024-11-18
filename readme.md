# Add Aria Current to Links - WordPress Plugin

[![GitHub release](https://img.shields.io/github/v/release/Silver0034/aria-current?include_prereleases)](https://github.com/Silver0034/aria-current/releases/latest)
![PHP Version](https://img.shields.io/badge/php->=_8.0.0-blue)
![WordPress Version](https://img.shields.io/badge/wordpress->=5.0.0-blue)
![Tested WP Version](https://img.shields.io/badge/tested%20up%20to-6.7-brightgreen)

Automatically add `aria-current="page"` to WordPress blocks linking to the current page.

## Overview

This plugin automatically adds the `aria-current="page"` attribute to blocks that link to the current page. This helps improve accessibility by indicating the current page in navigation.

## How It Works

The plugin uses a filter to modify the block content before it is rendered. It checks if the block contains a link to the current page and adds the `aria-current="page"` attribute to the link if it does.

## Installation

### Downloading from GitHub Releases

1. Go to the [latest release](https://github.com/Silver0034/aria-current/releases/latest) on GitHub.
2. Download the zip file of the latest release.
3. In your WordPress admin dashboard, go to Plugins > Add New.
4. Click on "Upload Plugin" and choose the downloaded zip file.
5. Click "Install Now" and then "Activate Plugin".

### Updating

#### Through WordPress Plugins Menu

1. In your WordPress admin dashboard, go to Plugins > Installed Plugins.
2. If an update is available, you will see an "Update Now" link under the plugin name.
3. Click "Update Now" to update the plugin to the latest version.

#### Through WordPress Updater

1. In your WordPress admin dashboard, go to Dashboard > Updates.
2. If an update is available, you will see the plugin listed under "Plugins".
3. Select the plugin and click "Update Plugins".
