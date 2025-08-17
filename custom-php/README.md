# Custom PHP

This is an example of custom PHP code used in a client site's custom post type class that modifies WordPress behavior in the following ways:

- To modify the archive page post order by a custom meta field (in the `order_by_state` method on lines 146-153).
- To modify the permalink structure, replacing `srf-team-category` with `team` in the URLs (in the `modify_permalinks` method on lines 165-195).
- To add custom rewrite rules so that the permalink structure is preserved when the page is accessed via a permalink (in the `custom_rewrite_rules` method on lines 197-210).

The relevant code is on lines 146-210 of the `class-srf-team.php` file.

You can review the full codebase for the plugin in the [GitHub repository](https://github.com/syngapresearchfund/srf-forge). Additionally you can view the theme codebase in [this repository](https://github.com/syngapresearchfund/srf).
