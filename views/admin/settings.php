<?php

use Wallmander\ElasticsearchIndexer\Model\Config;

?>
<div class="wrap">
    <h2>Elasticsearch Indexer Settings</h2>

    <p>Remember to reindex posts after changing options</p>

    <form method="post" action="options.php">
        <?php settings_fields('esi_options_group'); ?>
        <?php do_settings_sections('esi_options_group'); ?>
        <table class="form-table">

            <tr valign="top">
                <th>Enable Integration</th>
                <td>
                    <input type="hidden" name="<?php echo Config::optionKey('enable_integration') ?>"
                           value="0"/>
                    <input type="checkbox" name="<?php echo Config::optionKey('enable_integration') ?>"
                           value="1" <?php echo Config::option('enable_integration') ? 'checked="checked"' : ''; ?>/>

                    <p class="description">Posts will still be synced if disabled.</p>
                </td>
            </tr>

            <tr valign="top">
                <th>Host(s)</th>
                <td>
                    <input type="text" name="<?php echo Config::optionKey('hosts') ?>"
                           value="<?php echo Config::option('hosts'); ?>"/>

                    <p class="description">
                        Example: <code>127.0.0.1:9000</code>, <code>http://127.0.0.1:9000</code> or <code>https://127.0.0.1:9000</code><br>
                        Multiple separated by commas. No spaces.
                    </p>
                </td>
            </tr>

            <tr valign="top">
                <th>Shards</th>
                <td>
                    <input type="number" name="<?php echo Config::optionKey('shards') ?>" min="1"
                           value="<?php echo Config::option('shards'); ?>"/>

                    <p class="description">Recommended: 5</p>
                </td>
            </tr>

            <tr valign="top">
                <th>Replicas</th>
                <td>
                    <input type="number" name="<?php echo Config::optionKey('replicas') ?>" min="0"
                           value="<?php echo Config::option('replicas'); ?>"/>

                    <p class="description">Recommended: 1</p>
                </td>
            </tr>
            <tr valign="top">
                <th>Index private post types</th>
                <td>
                    <input type="hidden" name="<?php echo Config::optionKey('index_private_post_types') ?>" value="0"/>
                    <input type="checkbox" name="<?php echo Config::optionKey('index_private_post_types') ?>"
                           value="1" <?php echo Config::option('index_private_post_types') ? 'checked="checked"' : ''; ?>/>

                    <p class="description">
                        Allow Elasticsearch to index non public post types. This could speed up admin some admin
                        pages.<br>
                        It is important that you reindex all posts after changing this option.
                    </p>
                </td>
            </tr>
            <tr valign="top">
                <th>Include child taxonomies</th>
                <td>
                    <input type="hidden" name="<?php echo Config::optionKey('include_posts_from_child_taxonomies') ?>"
                           value="0"/>
                    <input type="checkbox" name="<?php echo Config::optionKey('include_posts_from_child_taxonomies') ?>"
                           value="1" <?php echo Config::option('include_posts_from_child_taxonomies') ? 'checked="checked"' : ''; ?>/>

                    <p class="description">Include posts from child taxonomies</p>
                </td>
            </tr>
            <tr valign="top">
                <th>Enable Profiler Frontend</th>
                <td>
                    <input type="hidden" name="<?php echo Config::optionKey('profile_frontend') ?>"
                           value="0"/>
                    <input type="checkbox" name="<?php echo Config::optionKey('profile_frontend') ?>"
                           value="1" <?php echo Config::option('profile_frontend') ? 'checked="checked"' : ''; ?>/>

                    <p class="description"></p>
                </td>
            </tr>
            <tr valign="top">
                <th>Enable Profiler Admin</th>
                <td>
                    <input type="hidden" name="<?php echo Config::optionKey('profile_admin') ?>"
                           value="0"/>
                    <input type="checkbox" name="<?php echo Config::optionKey('profile_admin') ?>"
                           value="1" <?php echo Config::option('profile_admin') ? 'checked="checked"' : ''; ?>/>

                    <p class="description"></p>
                </td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
</div>
