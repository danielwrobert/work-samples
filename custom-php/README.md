# Custom PHP

This is an example of custom PHP code used in a client site's custom post type class that modifies WordPress behavior in the following ways:

- Modifies the archive page post order by a custom meta field (in the `order_by_state` method on lines 146-153).
- Modifies the permalink structure by replacing `srf-team-category` with `team` followed by the applied team member category in the URLs (in the `modify_permalinks` method on lines 165-195).
- Adds custom rewrite rules so that the permalink structure is preserved when the page is accessed via a permalink (in the `custom_rewrite_rules` method on lines 197-210).

The relevant code is on lines 146-210 of the `class-srf-team.php` file.

## Additional Context

This is a site that I built for a non-profit organization that I volunteer for as their technical lead. When I joined, the site was running on Webflow. While Webflow offers a strong visual editing experience, it presented limitations around user roles and content management—particularly the inability to support multiple editors without additional per-user costs. To better support the organization’s needs, I migrated the site to WordPress, enabling custom roles, granular permissions, and a more scalable, intuitive content workflow.

Migrating the data from Webflow to the new WordPress site posed some challenges, as Webflow’s export separated CMS content from static content. To streamline the process, I used Webflow’s API to retrieve all data and developed custom scripts to map and import the different content types into WordPress.

After migrating the data from Webflow, I designed and developed a new WordPress theme for the organization. At that time, full site editing was not quite production-ready, so I built it as a classic theme. If I were to rebuild the site today, I would use a full site editing approach.

### Codebases

You can review the full codebase for the different parts of the project in the following GitHub repositories:

- [Plugin repository](https://github.com/syngapresearchfund/srf-forge) for custom content types and related data
- [Theme repository](https://github.com/syngapresearchfund/srf) for the site's visual design
- [Migration scripts](https://github.com/syngapresearchfund/srf-import-scripts) for migrating the data from Webflow to WordPress
