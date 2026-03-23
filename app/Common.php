<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

if (! function_exists('coir_catalog')) {
    function coir_catalog(): array
    {
        return [
            [
                'slug' => 'coir-grow-media',
                'name' => 'Coir Grow Media',
                'category' => 'Gardening',
                'price' => 320,
                'unit' => 'per block',
                'description' => 'A moisture-retentive and breathable growing medium ideal for seed starting, urban gardens, nurseries, and greenhouse operations.',
                'image' => 'https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=900&q=80',
                'specs' => [
                    'Helps retain moisture while allowing air circulation',
                    'Useful for vegetables, ornamentals, and seedlings',
                    'Supports soil improvement and root development',
                ],
            ],
            [
                'slug' => 'coir-erosion-control-mats',
                'name' => 'Coir Erosion Control Mats',
                'category' => 'Landscaping',
                'price' => 540,
                'unit' => 'per roll',
                'description' => 'Natural fiber mats designed to help stabilize exposed soil, reduce erosion, and support vegetation growth on slopes and open ground.',
                'image' => 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=900&q=80',
                'specs' => [
                    'Useful for roadside, riverbank, and slope applications',
                    'Biodegradable support for restoration projects',
                    'Strong natural weave for outdoor use',
                ],
            ],
            [
                'slug' => 'coir-seedling-pots',
                'name' => 'Coir Seedling Pots',
                'category' => 'Agriculture',
                'price' => 180,
                'unit' => 'per set',
                'description' => 'Lightweight biodegradable pots for nurseries and seedling preparation, reducing transplant disturbance while supporting sustainable growing practices.',
                'image' => 'https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?auto=format&fit=crop&w=900&q=80',
                'specs' => [
                    'Ideal for seed propagation and nursery operations',
                    'Plant-friendly structure for early root growth',
                    'Suitable alternative to disposable plastic containers',
                ],
            ],
            [
                'slug' => 'coir-logs',
                'name' => 'Coir Logs',
                'category' => 'Infrastructure',
                'price' => 760,
                'unit' => 'per unit',
                'description' => 'Dense natural-fiber logs for shoreline, drainage, and land rehabilitation projects that need structure while remaining environmentally responsible.',
                'image' => 'https://images.unsplash.com/photo-1473448912268-2022ce9509d8?auto=format&fit=crop&w=900&q=80',
                'specs' => [
                    'Can assist with sediment control and slope protection',
                    'Suitable for rehabilitation and restoration work',
                    'Made from renewable coconut husk fiber',
                ],
            ],
            [
                'slug' => 'coir-mats-and-liners',
                'name' => 'Coir Mats and Liners',
                'category' => 'Home and Utility',
                'price' => 250,
                'unit' => 'per piece',
                'description' => 'Durable natural-fiber mats and liners for entryways, hanging baskets, plant containers, and decorative utility uses.',
                'image' => 'https://images.unsplash.com/photo-1517705008128-361805f42e86?auto=format&fit=crop&w=900&q=80',
                'specs' => [
                    'Strong texture suited for repeated practical use',
                    'Works well for gardening and home applications',
                    'Simple natural finish with eco-friendly appeal',
                ],
            ],
            [
                'slug' => 'processed-coir-fiber',
                'name' => 'Processed Coir Fiber',
                'category' => 'Manufacturing',
                'price' => 430,
                'unit' => 'per sack',
                'description' => 'Loose coconut fiber prepared for industrial, agricultural, and craft applications where renewable fill or raw natural material is needed.',
                'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=900&q=80',
                'specs' => [
                    'Can be used for brushes, cushioning, and fillers',
                    'Supports product development with local raw material',
                    'Flexible for both commercial and small-scale use',
                ],
            ],
        ];
    }
}

if (! function_exists('coir_product')) {
    function coir_product(string $slug): ?array
    {
        foreach (coir_catalog() as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }

        return null;
    }
}
