How do I add questions to this FAQ?

It's a quite simple PHP format; it tries to let you focus on content
rather than be overly clever and difficult to maintain.  Yes, some of
the work is manual, but 95% of the text herein is content, and that's
good enough for me (the majority of the [simple] machinery is in
index.php).


To add a category:
------------------

Edit the file categories.inc.  Each category has an entry in 3 arrays:

   - $titles[]: the text that is shown on the main FAQ menu page
   - $short_titles[]: the text that is shown in the left-hand
     navigation (it should be shorter version of the category's
     corresopnding $titles[] entry)
   - $names[]: the name that is used to index the FAQ (internally, and
     shows up in URLs in the form "?category=<name>").  It's also the
     name of the file where the questions for that category appear in
     this directory (e.g., if <name> is foo, then foo.inc is where the
     questions/answers for that category must live).

A category's entries are added to the 3 arrays in order -- so the
categories.inc file has a bunch of triples adding an entry to each of
the three arrays for a single category.  Add your new category within
the list of triples wherever you see fit.  Here's an example:

$titles[] = "This is my new category";
$short_titles[] = "New category";
$names[] = "new_category";

The ordering of the arrays is the same as the ordering used on the web
pages, so if you want to add a category at the end, add a new triple
at the end, etc.

Once you have added to the categories.inc file, create a new file
named <names>.inc (e.g., "new_category.inc") and put your questions in
this file.


To add a question:
------------------

Similar to categories, questions are added by adding entries to three
arrays:

    - $q[]: the question
    - $anchor[]: the HTML anchor used to locate this question (i.e.,
      an "<a name=anchor>" is placed at the top of each question)
    - $a[]: the answer

Answers use a primitive wiki-like markup for various forms of HTML
encoding.  Here's what is done to the answer string before it is
displayed (note that the parser in index.php is not perfect -- double
check that your markup renders properly; specifically, the _, *, [,
and ] characters may get missed if they are against some
non-whitespace characters like < or >):

    - blank lines before text have <p>'s insertted in them

    - strings *enclosed in asterisks* will be rendered as:

      <strong>enclosed in asterisks</strong>

    - strings _enclosed in underscores_ will be rendered as:

      <em>enclosed in underscores</em>

    - strings [enclosed in brackets] will be rendered as:

      <code>enclosed in brackets</code>

    - the special HTML-like tag <geshi NAME></geshi> can be used to
      delimit verbatim / code-like sections.  These sections will be
      rendered inside a <pre> HTML block, and on a grey background,
      with syntax highlighting according to NAME.  We use the Geshi
      syntax highlighter; the NAME token tells Geshi how to syntax
      highlight the enclosed block.  Common NAME tokens used in the
      FAQ include:

      - c: for C source code
      - bash: for shell prompts and shell code
      - diff: for showing diffs
      - make: for showing Makefiles
      - text: for plain text (no highlighting)
      - ini: INI-style files

      Many other syntax highlighting contexts are available; see the
      list of .php files in include/geshi, and/or the Geshi web site
      for more info (http://qbnz.com/highlighter/ and
      https://en.wikipedia.org/wiki/GeSHi).

That's about it.  I told you it was simple.


Are there any conventions to adding questions?
----------------------------------------------

The biggest convention that I have used is to add ficticious shell
prompts when I am depicting commands that users are expected to type
in a command shell.  For example:

<geshi bash>
shell$ ompi_info --param coll sm
</geshi>

The "shell" label makes it 100% blatently obvious that we're talking
about a shell prompt, and the "$" indicates that it is a Bourne-like
shell.  Use "%" if you want to indicate a C-flavored shell.
