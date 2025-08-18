# Work Samples

This repository contains a small sample of production-ready code samples that showcase recent WordPress and Gutenberg experience.

## Repository Structure

```
work-samples/
├── README.md                     # This file - repository overview and documentation
├── custom-block/                 # Custom Gutenberg block implementation
│   ├── README.md                 # Detailed documentation of the custom block
│   └── cse-blocks/              # WordPress plugin directory
│       ├── cse-blocks.php        # Main plugin file with header and includes
│       ├── package.json          # Node.js dependencies and build scripts
│       ├── package-lock.json     # Locked dependency versions
│       ├── LICENSE               # GNU General Public License v3
│       ├── inc/                  # PHP includes directory
│       │   ├── blocks/           # Block registration and rendering
│       │   │   └── related-posts.php  # Related Posts block PHP logic
│       │   └── editor-customizations.php  # Editor customizations and block categories
│       └── src/                  # Source files for building blocks
│           ├── icons.js          # SVG icon components (USGlobeIcon, GlobeIcon)
│           └── related-posts/    # Related Posts block source
│               ├── block.json    # Block metadata and configuration
│               ├── edit.js       # Block editor component
│               ├── index.js      # Block registration entry point
│               └── style.scss    # Block styles
├── fse-template/                 # Full Site Editing template implementation
│   ├── README.md                 # Documentation of the FSE template approach
│   ├── functions.php             # PHP functions for block bindings and dynamic content
│   └── footer.html               # HTML template part with dynamic copyright year
├── css-styling/                  # Advanced SCSS styling examples
│   ├── README.md                 # Documentation of styling approach
│   ├── _home.scss                # Home page specific styles with animations and responsive layout
│   └── _post-grid.scss          # Post grid component styles
└── custom-php/                   # Custom PHP class for WordPress modifications
    ├── README.md                 # Documentation of PHP customizations
    └── class-srf-team.php        # Custom post type class with permalink and archive modifications
```

## Included Samples

### [Custom Block](custom-block/)
A custom Gutenberg block written in React (no ACF) that demonstrates:
- **Related Posts Block**: A server-side rendered block that fetches posts from the database
- **Modern Development**: Uses React components, SCSS styling, and proper block.json configuration
- **Plugin Architecture**: Complete WordPress plugin structure with proper organization
- **Block Bindings**: Integration with WordPress core block system

**Key Features:**
- Server-side rendering for database queries
- Custom block categories and editor customizations
- SVG icon components
- Build system with Node.js dependencies

### [Full Site Editing Template](fse-template/)
A full-site editing `.html` template implementation showcasing:
- **Dynamic Content**: Uses Block Bindings API to display current year in copyright
- **Template Parts**: Modular footer template with dynamic data
- **Modern WordPress**: Leverages FSE capabilities for dynamic content

**Technical Approach:**
- Utilizes Block Bindings API for dynamic content
- Integrates with core Paragraph block
- Demonstrates FSE template architecture

### [CSS Styling](css-styling/)
Advanced SCSS styling examples featuring:
- **Animations**: Complex CSS animations and transitions
- **Responsive Design**: Mobile-first responsive layouts
- **Modular Architecture**: Organized SCSS partials for maintainability
- **Modern CSS**: Uses latest CSS features and best practices

**Components:**
- Home page specific styles with advanced animations
- Post grid component with responsive behavior
- Organized SCSS structure for scalability

### [Custom PHP](custom-php/)
Custom PHP class demonstrating WordPress modifications:
- **Custom Post Types**: Team member content type with custom behavior
- **Permalink Modifications**: Custom URL structure for better SEO
- **Archive Customization**: Modified post ordering by custom meta fields
- **Rewrite Rules**: Custom URL rewriting for clean permalinks

**Key Modifications:**
- Custom archive page post ordering by meta field
- Permalink structure changes (srf-team-category → team/category)
- Custom rewrite rules for URL preservation
- Integration with WordPress core systems

## Technical Highlights

- **WordPress Integration**: All samples demonstrate proper WordPress development practices
- **Modern Development**: Uses current WordPress features like FSE, Block Bindings, and modern block development
- **Production Ready**: Code samples are taken from actual client and personal projects
- **Best Practices**: Follows WordPress coding standards and modern development workflows
- **Documentation**: Each component includes detailed README files explaining implementation decisions

## Additional Context

These samples represent real-world WordPress development experience, including:
- Client project implementations
- Personal blog development
- Non-profit organization website migrations
- WooCommerce block contributions
- Modern WordPress theme development

Each sample demonstrates different aspects of WordPress development, from custom blocks and FSE templates to advanced styling and PHP customizations, providing a comprehensive view of current WordPress development capabilities.
