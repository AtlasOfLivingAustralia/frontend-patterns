## How to add new patterns

The [`_patterns.php`](https://github.com/AtlasOfLivingAustralia/ui-pattern-library/blob/master/_patterns.php) file in the root directory iterates over all the `*.html` files in this directory and displays them in alphabetic order. The associated help text is loaded from the matching markdown file with the `*.md` extension.

To create a new pattern file, copy and paste the contents of a simlar html file and give it name so that it appears in the correct order via the filename ordering. You then need to create the matching markdown file that has the same file prefix but with the suffix `.md`. That's it.
