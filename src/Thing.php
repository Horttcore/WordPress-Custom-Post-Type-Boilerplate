<?php
namespace RalfHortt\WordPressClientPluginBoilerplate;

use Horttcore\CustomPostType\PostType;

class Thing extends PostType
{
    protected $slug = 'thing';

    /**
     * Register post type.
     *
     * @return array Post type configuration
     */
    public function getConfig() : array
    {
        return [
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'       => _x('things', 'Post Type Slug', 'wordpress-custom-post-type-boilerplate'),
                'with_front' => false,
            ],
            'capability_type' => 'post',
            'has_archive'     => false,
            'hierarchical'    => false,
            'menu_position'   => null,
            'menu_icon'       => 'dashicons-businessman',
            'supports'        => [
                'title',
                'editor',
                'thumbnail',
                'page-attributes',
            ],
            'show_in_rest' => true,
        ];
    }

    /**
     * Labels.
     *
     * @return array
     **/
    public function getLabels() : array
    {
        return [
            'name'                  => _x('Things', 'post type general name', 'wordpress-custom-post-type-boilerplate'),
            'singular_name'         => _x('Thing', 'post type singular name', 'wordpress-custom-post-type-boilerplate'),
            'add_new'               => _x('Add New', 'Thing', 'wordpress-custom-post-type-boilerplate'),
            'add_new_item'          => __('Add New Thing', 'wordpress-custom-post-type-boilerplate'),
            'edit_item'             => __('Edit Thing', 'wordpress-custom-post-type-boilerplate'),
            'new_item'              => __('New Thing', 'wordpress-custom-post-type-boilerplate'),
            'view_item'             => __('View Thing', 'wordpress-custom-post-type-boilerplate'),
            'view_items'            => __('View Things', 'wordpress-custom-post-type-boilerplate'),
            'search_items'          => __('Search Things', 'wordpress-custom-post-type-boilerplate'),
            'not_found'             => __('No Things found', 'wordpress-custom-post-type-boilerplate'),
            'not_found_in_trash'    => __('No Things found in Trash', 'wordpress-custom-post-type-boilerplate'),
            'parent_item_colon'     => __('Parent Thing', 'wordpress-custom-post-type-boilerplate'),
            'all_items'             => __('All Things', 'wordpress-custom-post-type-boilerplate'),
            'archives'              => __('Thing Archives', 'wordpress-custom-post-type-boilerplate'),
            'attributes'            => __('Thing Attributes', 'wordpress-custom-post-type-boilerplate'),
            'insert_into_item'      => __('Insert into thing', 'wordpress-custom-post-type-boilerplate'),
            'uploaded_to_this_item' => __('Uploaded to this page', 'wordpress-custom-post-type-boilerplate'),
            'featured_image'        => __('Logo', 'wordpress-custom-post-type-boilerplate'),
            'set_featured_image'    => __('Set logo', 'wordpress-custom-post-type-boilerplate'),
            'remove_featured_image' => __('Remove logo', 'wordpress-custom-post-type-boilerplate'),
            'use_featured_image'    => __('Use as logo', 'wordpress-custom-post-type-boilerplate'),
            'menu_name'             => _x('Things', 'post type general name', 'wordpress-custom-post-type-boilerplate'),
            'filter_items_list'     => __('Things', 'wordpress-custom-post-type-boilerplate'),
            'items_list_navigation' => __('Things', 'wordpress-custom-post-type-boilerplate'),
            'items_list'            => __('Things', 'wordpress-custom-post-type-boilerplate'),
        ];
    }

    /**
     * Update messages.
     *
     * @param WP_Post      $post     Post object
     * @param string       $postType Post type slug
     * @param WP_Post_Type $postType Post type slug
     *
     * @return array Update messages
     **/
    public function getPostUpdateMessages(\WP_Post $post, string $postType, \WP_Post_Type $postTypeObjects) : array
    {
        $messages = [
            0  => '', // Unused. Messages start at index 1.
            1  => __('Thing updated.', 'wordpress-custom-post-type-boilerplate'),
            2  => __('Custom field updated.'),
            3  => __('Custom field deleted.'),
            4  => __('Thing updated.', 'wordpress-custom-post-type-boilerplate'),
            5  => isset($_GET['revision']) ? sprintf(__('Thing restored to revision from %s', 'wordpress-custom-post-type-boilerplate'), wp_post_revision_title((int) $_GET['revision'], false)) : false,
            6  => __('Thing published.', 'wordpress-custom-post-type-boilerplate'),
            7  => __('Thing saved.', 'wordpress-custom-post-type-boilerplate'),
            8  => __('Thing submitted.', 'wordpress-custom-post-type-boilerplate'),
            9  => sprintf(__('Thing scheduled for: <strong>%1$s</strong>.', 'wordpress-custom-post-type-boilerplate'), date_i18n(__('M j, Y @ G:i', 'wordpress-custom-post-type-boilerplate'), strtotime($post->post_date))),
            10 => __('Thing draft updated.', 'wordpress-custom-post-type-boilerplate'),
        ];

        if (!$postTypeObjects->publicly_queryable) {
            return $messages;
        }

        $permalink = get_permalink($post->ID);
        $view_link = sprintf(' <a href="%s">%s</a>', esc_url($permalink), __('View thing', 'wordpress-custom-post-type-boilerplate'));
        $messages[1] .= $view_link;
        $messages[6] .= $view_link;
        $messages[9] .= $view_link;

        $preview_permalink = add_query_arg('preview', 'true', $permalink);
        $preview_link = sprintf(' <a target="_blank" href="%s">%s</a>', esc_url($preview_permalink), __('Preview thing', 'wordpress-custom-post-type-boilerplate'));
        $messages[8] .= $preview_link;
        $messages[10] .= $preview_link;

        return $messages;
    }
}
