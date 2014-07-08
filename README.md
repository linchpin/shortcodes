# Linchpin Shortcodes

*A plugin that with a few short codes the Linchpin team uses on the daily*

This plugin also adds a filter to the *[Text Widget](http://codex.wordpress.org/WordPress_Widgets#Using_Text_Widgets)* to `do_shortcode`

## Available Shortcodes

* `[email]email@obfuscate.com[/email]`
	* This is taken directly from the codex.
	* Converts email addresses characters to HTML entities to block spam bots.
	* Read more about it on the [WordPress Codex](http://codex.wordpress.org/Function_Reference/antispambot)
* `[date format="Y"]` format attribute is optional
	* Just a simple utility to output a standard date format
	* Typically use it to output copyright information
	* `&copy; CompanyName [date]`

We'll be adding more over time. We have about 40 - 50 sites that utilize all sorts of shortcodes we're just trying to figure out which ones are the most useful.