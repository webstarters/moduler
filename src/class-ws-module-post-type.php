<?php

namespace Webstarters\Modules;

class PostType
{
    const POST_TYPE = 'webstarters_module';

    /**
     * Register the post type.
     *
     * @return void
     */
    public function __invoke()
    {
        $labels = [
            'name'                  => _x('Modules', 'Post Type General Name', 'webstarters'),
            'singular_name'         => _x('Module', 'Post Type Singular Name', 'webstarters'),
            'menu_name'             => __('Modules', 'webstarters'),
            'name_admin_bar'        => __('Module', 'webstarters'),
            'archives'              => __('Module Archives', 'webstarters'),
            'attributes'            => __('Module Attributes', 'webstarters'),
            'parent_item_colon'     => __('Parent Module:', 'webstarters'),
            'all_items'             => __('All Modules', 'webstarters'),
            'add_new_item'          => __('Add New Module', 'webstarters'),
            'add_new'               => __('Add New', 'webstarters'),
            'new_item'              => __('New Module', 'webstarters'),
            'edit_item'             => __('Edit Module', 'webstarters'),
            'update_item'           => __('Update Module', 'webstarters'),
            'view_item'             => __('View Module', 'webstarters'),
            'view_items'            => __('View Modules', 'webstarters'),
            'search_items'          => __('Search Module', 'webstarters'),
            'not_found'             => __('Not found', 'webstarters'),
            'not_found_in_trash'    => __('Not found in Trash', 'webstarters'),
            'featured_image'        => __('Featured Image', 'webstarters'),
            'set_featured_image'    => __('Set featured image', 'webstarters'),
            'remove_featured_image' => __('Remove featured image', 'webstarters'),
            'use_featured_image'    => __('Use as featured image', 'webstarters'),
            'insert_into_item'      => __('Insert into Module', 'webstarters'),
            'uploaded_to_this_item' => __('Uploaded to this Module', 'webstarters'),
            'items_list'            => __('Modules list', 'webstarters'),
            'items_list_navigation' => __('Modules list navigation', 'webstarters'),
            'filter_items_list'     => __('Filter items list', 'webstarters'),
        ];

        $args = [
            'label'                 => __('Module', 'webstarters'),
            'description'           => __('Reusable components for use when page-building', 'webstarters'),
            'labels'                => $labels,
            'supports'              => ['title', 'editor', 'revisions', 'custom-fields'],
            'taxonomies'            => ['category', 'post_tag'],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-screenoptions',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        ];

        register_post_type(self::POST_TYPE, $args);
    }
}
