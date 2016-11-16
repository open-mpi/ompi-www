<?php
  $topdir = "../..";
  $title = "Contributing to Open MPI";

  include_once("nav.inc");
  include_once("$topdir/includes/header.inc");
?>

<p>Would you like to contribute to Open MPI?

<p>We'd love it!  One of the explicit goals of the Open MPI project is
to actively engage users, third party researchers, ISVs, hardware
vendors... pretty much the entire HPC community.  So if you've got
some ideas, we'd love to hear them.

<p>That being said, we're not giving out commit access to our
repository to just anyone.  We do need to maintain production-quality
control on our code base.  It is important to remember that if you
write new components (or modify existing components) for Open MPI,
they can be published independantly of the main MPI distribution --
<strong><em>new components can be added to an existing Open MPI
installation</em></strong>.  This means that you do not have to
distribute all of Open MPI -- you can just publish your own components
on your web page, FTP site, etc.  Users can download your components
and add them to their existing Open MPI installation.

<p>Here's several typical forms of contributions to Open MPI:

<p>
<ul>

<li>Publish research results using your own modifications to Open MPI
(e.g., performance enhancements, new algorithms, etc.).  If possible,
make the code available to others.</li>

<li>Write your own components for custom functionality (e.g., support
a new network or back-end run-time environment).</li>

<li>Modify existing components for new functionality or performance
enhancements</li>

<li>Suggest new functionality to the Open MPI community.</li>

<li>Send <a href="<?php print($topdir); ?>/community/help/">complete bug
reports</a> and/or patches <a href="<?php print($topdir);
?>/community/lists/">to the mailing lists</a>.  We always appreciate
help in making Open MPI better!</li>

<li>Submit code for new functionality to Open MPI.
We love code contributions!  Keep in mind that code contributions
must be robust
enough to be suitable for widespread use.</li>

</ul>

<p> Enough talk -- how do you contribute to the Open MPI project?
Here's several ways:

<p>
<ul>

<li>Get involved -- <a href="<?php print($topdir);
?>/community/lists/">Subscribe to the Open MPI mailing lists</a>.
Talk to the developers and find out what's going on in the
project.</li>

<li>Read the developer's documentation -- <a href="<?php print($topdir);
?>/faq/?category=developers">see the "Developers" section of the
FAQ</a>.  We do not yet have a set of glossy PDF's for developer
documentation, but we are continually adding detailed, technical
information to the FAQ.</li>

<li>Read the contribution guidelines -- <a href="<?php print($topdir);
?>/faq/?category=contributing">see the "Contribution" section of the
FAQ</a>.  Determine how you want to make your contribution
available.</li>

<li>Look through the source code -- <a href="<?php print($topdir);
?>/source/">get a Git clone</a>.  Open MPI is an active
development effort -- it is usually better to work with the most
recent development version of the code than the last stable release
(especially for new projects).</li>

<li>Code contributions are submitted via pull requests at the
<a href="https://github.com/open-mpi/ompi/">Open MPI project on 
Github</a>.  All commits <em>must</em> contain a "Signed-off-by" token
in the commit message.  This constitutes your agreement with
<a href="https://github.com/open-mpi/ompi/wiki/Admistrative-rules#contributors-declaration">the
Open MPI Contributor's Declaration</a>.</li>

</ul>

<p>Probably the most important of these is the first: subscribe to the
mailing lists and become involved in the project.  If possible, let
others know what you're working on.  

<P> Make today an Open MPI day!

<?php 
  include_once("$topdir/includes/footer.inc"); 
