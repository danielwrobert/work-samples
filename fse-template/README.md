# Full Site Editing Template

This is an example of a full-site editing `.html` template with a dynamic string showing the current date.

It is used in the `footer.html` template part to render the current year in the copyright notice. It is part of the [Demeter](https://github.com/danielwrobert/demeter) theme that I built for my personal blog.

Lines 74-105 of `functions.php` are the relevant code for registering the binding and returning the current year.

You can view the full codebase in the project's [GitHub repository](https://github.com/danielwrobert/demeter).

## Technical Decisions

There are several ways to approach this but I chose to utilize the Block Bindings API. I used the core Paragraph block to render the copyright notice and then use the Block Bindings API to prepend the current year. This is a simple use case and the Block Bindings API is a good fit.

An alternative approach would have been to create a custom Copyright block to handle the output of the icon, current year, and site title. However, this would have required me to create a new block, which would have been more complex and unnecessary in this scenario.
