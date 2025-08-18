# Custom Block

This is an example of a custom block written in React (no ACF), including block.json and edit.js.

Here I chose a simple "Related Posts" block that I put together for a client. It is a simple block and the client is still in the process of adding more content before this block is used. This is still a bit of a work in progress but it's a good example of how I approach creating custom blocks in Gutenberg.

## Technical Approach

Because this block needs to fetch posts from the database to render on the front end, I needed to build it as a server-side-rendered block. I took advantage of the `ServerSideRender` component to show a visual representation of how the block will appear on the frontend, even though its rendering logic resides in the PHP file.

One thing I would do differently is use the Core Header block as an Inner Block for the block heading. This would allow for more flexibility to change the heading text, as opposed to having it hardcoded in the block. I plan to revisit this to make that update.

### Plugin Structure

```text
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
