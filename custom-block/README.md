# Custom Block

This is an example of a custom block written in React (no ACF), including block.json and edit.js.

Here I chose a simple "Related Posts" block that I put together for a client. It is a simple block and it is not currently used in the site yet – they are still in the process adding more content before this block is used. This is still a bit of a work in progress but it's a good example of how I approach creating a custom block in Gutenberg.

Because this block needs to fetch posts from the database, I chose to build it as a server-side-rendered block.

## Project Structure

```
cse-blocks/
├── cse-blocks.php                # Main plugin file with header and includes
├── package.json                  # Node.js dependencies and build scripts
├── package-lock.json             # Locked dependency versions
├── LICENSE                       # GNU General Public License v3
├── README.md                     # This documentation file
├── inc/                          # PHP includes directory
│   ├── blocks/                   # Block registration and rendering
│   │   └── related-posts.php     # Related Posts block PHP logic
│   └── editor-customizations.php # Editor customizations and block categories
└── src/                          # Source files for building blocks
    ├── icons.js                  # SVG icon components (USGlobeIcon, GlobeIcon)
    └── related-posts/            # Related Posts block source
        ├── block.json            # Block metadata and configuration
        ├── edit.js               # Block editor component
        ├── index.js              # Block registration entry point
        └── style.scss            # Block styles
```

### Key Components

- **Main Plugin File**: `cse-blocks.php` registers the plugin and includes necessary files
- **Block Registration**: `inc/blocks/related-posts.php` handles server-side block rendering
- **Editor Customizations**: `inc/editor-customizations.php` adds custom block categories
- **Block Source**: `src/related-posts/` contains the React components and styles for the Related Posts block

## Additional Examples

Most of my work and involvement with custom blocks over the past few years has been done in the [WooCommerce Blocks](https://github.com/woocommerce/woocommerce-blocks/) and [WooCommerce](https://github.com/woocommerce/woocommerce/) repositories.

Below is a PR that I authored while working on the Mini Cart block. Note that I did not author the block from the start, but it fell under my team's purview and I was able to contribute to it during one of our Sprints.

[Add option to hide/show price in Mini Cart block](https://github.com/woocommerce/woocommerce-blocks/pull/6796)
