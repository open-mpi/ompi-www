ompi-www Style Guide
===========================

This is a brief Style Guide for code and prose to be included on the Open MPI web site
(which is contained in this `ompi-www` repo).


# Code Style

## HTML and PHP Style

* Manually hard-wrap lines at about 80 characters

## HTML Style

* Tag and attribute names in lower case
* Otherwise, do whatever works, I guess

## PHP Style

* Avoid PHP warnings that will show up in the web server logs.


# Prose Style

## Typesetting Conventions

Code-like things are set in fixed width font, using `<code>...</code>` in regular HTML
and `[...]` in FAQ answers:

* Code things
  * Literal code snippets
  * Command names
  * File names and paths
  * MCA parameter names
  * Environment variables
  * Stuff like that

Not in bold or italics or double-quotes; fixed-width font.

Use bold for emphasis, or names of things that have particular technical meaning, but aren't code snippets or command names per se. Italics is fine for emphasis, too.

Use em dashes, surrounded by spaces, wherever a dash (as opposed to a hyphen) is needed. Use an `&mdash;` HTML entity to get these in HTML, rather than a literal Unicode em dash character (which is hard to read in a text editor using fixed-width font).

## Style and Usage

* Use Oxford commas.
* American style, not British style.
  * "-ize", not "-ise"
* "different than" is fine; you don't have to stick to "different from".
* Use "i.e." and "e.g." correctly.
  * "i.e." means "that is" — fully explains the referent
  * "e.g." means "for example" — gives one or a few examples of something
* Respect other brands' stylings.
  * "GitHub", not "Github"  
* Don't bother putting explicit trademark notations like "(R)" or "®" or "™".
* In lists, periods at the ends of items that are full sentences; no periods at the end of items that are sentence fragments
  * Nice-looking parallelism takes precedence over this rule.

## Spellings and Capitalizations

* "Open MPI", not "OpenMPI" or "Open-MPI"
  * "OMPI" is an acceptable abbreviation when addressing the Open MPI developer
    community. For user-facing docs, stick with "Open MPI".
  * It is not styled in fixed-width or italics or anything special like that.
* When referring to Open MPI versions or series, use "vX.Y" or "vX.Y.Z", instead of "version X.Y" or "version vX.Y".
* "UNIX", not "Unix"

And these are some provisional ones based on usage counts from `grep-variants`; they are not
consistently used throughout the code base yet:

* "seg fault", not "segfault"
* "email", not "e-mail"
