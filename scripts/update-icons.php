<?php

class UpdateIcons
{
    public function __construct() {
        $this->log('-- Updating icons...');

        $this->remove_old_icons();
        $this->copy_new_icons();
        $this->adapt_new_icons();

        $this->log('-- Done.');
    }

    private function remove_old_icons() {
        $this->log('-- -- Removing old icons...');

        $icons = glob(__DIR__.'/../resources/svg/*.svg');
        foreach ($icons as $icon) {
            unlink($icon);
        }
    }

    private function copy_new_icons() {
        $this->log('-- -- Copying new icons...');

        $icons = glob(__DIR__.'/../node_modules/@mdi/svg/svg/*.svg');
        foreach ($icons as $icon) {
            copy($icon, __DIR__.'/../resources/svg/'.basename($icon));
        }
    }

    private function adapt_new_icons() {
        $this->log('-- -- Adapt new icons...');

        $icons = glob(__DIR__.'/../resources/svg/*.svg');
        foreach ($icons as $icon) {
            // Get icon content
            $svgString = file_get_contents($icon);
            
            // Parse icon content
            $dom = new DOMDocument();
            $dom->loadXML($svgString);

            // Get svg element
            $svg = $dom->getElementsByTagName('svg')->item(0);

            // Set fill attribute to currentColor
            $svg->setAttribute('fill', 'currentColor');

            // Save icon svg without namespace
            $newSvgString = $dom->saveXML($svg, LIBXML_NOXMLDECL);

            // Save icon
            file_put_contents($icon, $newSvgString);
        }
    }

    private function log($message) {
        echo $message.PHP_EOL;
    }
}

(new UpdateIcons());