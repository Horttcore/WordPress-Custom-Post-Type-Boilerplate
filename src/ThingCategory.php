<?php
namespace Foo;

use Horttcore\CustomTaxonomy\Taxonomy;

class ThingCategory extends Taxonomy
{
    protected $slug = 'thing-category';

    protected $postTypes = ['thing'];

    public function getConfig(): array
    {
        return [
            'description'        => __('Lorem Ipsum …', 'wordpress-custom-post-type-boilerplate'),
            'public'             => false,
            'publicly_queryable' => true,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => true,
            'rest_base'          => 'thing category',
            'show_tagcloud'      => true,
            'show_in_quick_edit' => false,
            'show_admin_column'  => true,
            'rewrite'            => [
                'slug'       => _x('thing category', 'Taxonomy slug', 'wordpress-custom-post-type-boilerplate'),
                'with_front' => false,
            ]
        ];
    }

    public function getLabels(): array
    {
        return [
            'name'                       => __('Thing Categories', 'wordpress-custom-post-type-boilerplate'),
            'singular_name'              => __('Thing Category', 'wordpress-custom-post-type-boilerplate'),
            'search_items'               => __('Search Thing Categories', 'wordpress-custom-post-type-boilerplate'),
            'popular_items'              => __('Popular Thing Categories', 'wordpress-custom-post-type-boilerplate'),
            'all_items'                  => __('All Thing Categories', 'wordpress-custom-post-type-boilerplate'),
            'parent_item'                => __('Parent Thing Category', 'wordpress-custom-post-type-boilerplate'),
            'parent_item_colon'          => __('Parent Thing Category:', 'wordpress-custom-post-type-boilerplate'),
            'edit_item'                  => __('Edit Thing Category', 'wordpress-custom-post-type-boilerplate'),
            'view_item'                  => __('View Thing Category', 'wordpress-custom-post-type-boilerplate'),
            'update_item'                => __('Update Thing Category', 'wordpress-custom-post-type-boilerplate'),
            'add_new_item'               => __('Add New Thing Category', 'wordpress-custom-post-type-boilerplate'),
            'new_item_name'              => __('New Thing Category Name', 'wordpress-custom-post-type-boilerplate'),
            'separate_items_with_commas' => __('Separate thing category with commas', 'wordpress-custom-post-type-boilerplate'),
            'add_or_remove_items'        => __('Add or remove thing category', 'wordpress-custom-post-type-boilerplate'),
            'choose_from_most_used'      => __('Choose from the most used thing category', 'wordpress-custom-post-type-boilerplate'),
            'not_found'                  => __('No thing category found', 'wordpress-custom-post-type-boilerplate'),
            'no_terms'                   => __('No thing category', 'wordpress-custom-post-type-boilerplate'),
            'items_list_navigation'      => __('Thing Categories list navigation', 'wordpress-custom-post-type-boilerplate'),
            'items_list'                 => __('Thing Categories list', 'wordpress-custom-post-type-boilerplate'),
            'most_used'                  => __('Most Used', 'wordpress-custom-post-type-boilerplate'),
            'back_to_items'              => __('&larr; Back to Thing Categories', 'wordpress-custom-post-type-boilerplate'),
        ];
    }
}
