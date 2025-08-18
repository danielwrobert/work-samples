# CSS Styling

This is an example of a .scss file with advanced styling (e.g., animations, responsive layout). These stylesheets are used for the styling on the [https://wordpress.com/go/](https://wordpress.com/go/) homepage.

The `_home.scss` file is used for the homepage layout, and the `_post-grid.scss` file is a component stylesheet that is used for the post grid throughout the site.

## Technical Approach

I utilized CSS Grid along with breakpoints, using mixins, to ensure an optimal layout across devices. I also leveraged the Marketing team's "Muriel" design system color variables ($muriel-*) to maintain brand consistency and enable easy theme updates. Lastly, I applied category-specific color schemes (.category-digital-marketing, .category-tutorials, etc.) to create a visual hierarchy and content organization.

In retrospect, one thing I would do differently would be to use the BEM methodology to name classes. This would have made it easier to understand the structure of the code and the relationships between the elements. It would also have reflected a more component-based approach, improving things like maintainability and onboarding.
