<?php

$q[] = "Can I contribute to Open MPI?";

$anchor[] = "can-i-contribute";

$a[] = "<font size=+3 color=red><strong>YES!</strong></font>

One of the main goals of the Open MPI project is to involve the
greater HPC community.

There are many ways to contribute to Open MPI.  Here are a few:

<ul>
<li>Subscribe to <a href=\"$topdir/community/lists/\">the mailing
lists</a> and become active in the discussions</li>
<li>Obtain <a href=\"$topdir/source/\">a source code checkout</a> of Open
MPI's code base and start looking through the code (be sure to see <a
href=\"?category=developers\">the Developers category</a> for
technical details about the code base)</li>
<li>Write your own components and distribute them yourself (i.e.,
outside of the main Open MPI distribution)</li>
<li>Write your own components and contribute them back to the main
code base</li>
<li>Contribute bug fixes and feature enhancements to the main code
base</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I found a bug!  How do I report it?";

$anchor[] = "reporting-bugs";

$a[] = "First check that this is not already a known issue by checking
the <a href=\"$topdir/faq/\">FAQ</a> and the
<a href=\"$topdir/community/lists/\">mailing list archives</a>.  If you
can't find your problem mentioned anywhere, it is most helpful if you
can create a \"recipe\" to replicate the bug.

Please see the <a href=\"$topdir/community/help/\">Getting
Help</a> page for more details on submitting bug reports.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What license is Open MPI distributed under?";

$anchor[] = "ompi-license";

$a[] = "Open MPI is distributed under <a
href=\"$topdir/community/license.php\">the 3-clause BSD license</a>.";

/////////////////////////////////////////////////////////////////////////

//$q[] = "How do I join Open MPI?";

//$anchor[] = "joining-open-mpi";

//$a[] = "The first thing to do is to get involved.
//
//---Need more----";

/////////////////////////////////////////////////////////////////////////

//$q[] = "How do I get commit access to Open MPI?";

//$anchor[] = "commit-access-open-mpi";

//$a[] = "This is something that we're going to be fairly stingy about
//-- we must maintain a balance between actively soliciting the HPC
//community and maintaining a high-quality, high-performance,
//production-quality code base.  As such, we won't be giving commit
//access to too many 3rd parties.
//
//---Need more ---";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I contribute code to Open MPI?";

$anchor[] = "contribute-code";

$a[] = "We love code contributions!

All code contributions are submitted as pull requests on the
<a href=\"https://github.com/open-mpi/ompi/\">Open MPI GitHub project</a>.

We need to have an established intellectual property pedigree of the
code in Open MPI.  This means being able to ensure that all code
included in Open MPI is free, open source, and able to be distributed
under <a href=\"$topdir/community/license.php\">the BSD license</a>.
This prevents a situation where intellectual property gets into the
Open MPI code base and then someone later claims that we owe them
money for it.  Open MPI is a free, open source code base.  And we
intend it to remain that way.

We enforce this policy by requiring all git commits to include a
\"Signed-off-by\" token in the commit message, indicating your
agreement to the <a href=\"https://github.com/open-mpi/ompi/wiki/Administrative-rules#contributors-declaration\">Open
MPI Contributor's Declaration</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I can't submit an Open MPI Third Party Contribution Agreement;
how can I contribute to Open MPI?";

$anchor[] = "cant-sign-agreement";

$a[] = "This question is obsolete (as of November 2016).  The Open MPI
project *used* to require a signed Open MPI Third Party Contribution
Agreement before we could accept code contributions.

However, we have changed our policy and now only require agreement
with the <a href=\"https://github.com/open-mpi/ompi/wiki/Administrative-rules#contributors-declaration\">Open
MPI Contributor's Declaration</a>.

See <a href=\"#contribute-code\">this FAQ entry for more details</a>.

If you are unable to agree to the Contributor's Declaration, fear not &mdash;
there are
other ways to contribute to Open MPI.  Here are some examples:

<ul>
<li>Become an active participant in the mailing lists</li>
<li>Write and distribute your own components (remember: Open MPI
components can be distributed completely separately from the main Open
MPI distribution &mdash; they can be added to existing Open MPI
installations, and don't even need to be open source)</li>
<li>Report bugs</li>
<li>Do a good deed daily</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What if I don't want my contribution to be free / open source?";

$anchor[] = "not-free-open-source";

$a[] = "No problem.

While we are creating free / open-source software, and we would prefer
if everyone's contributions to Open MPI were also free / open-source,
we certainly recognize that other organizations have different goals
from us.  Such is the reality of software development in today's
global economy.

As such, it is perfectly acceptable to make non-free / non-open-source
contributions to Open MPI.

We obviously cannot accept such contributions into the main code base,
but you are free to distribute plugins, enhancements, etc. as you see
fit.  Indeed, the <a href=\"$topdir/community/license.php\">the BSD
license</a> is extremely liberal in its redistribution provisions.

Please also see <a href=\"#forking-ompi\">this FAQ entry about forking
the Open MPI code base</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I want to fork the Open MPI code base.  Can I?";

$anchor[] = "forking-ompi";

$a[] = "Yes... but we'd prefer if you didn't.

Although <a href=\"$topdir/community/license.php\">Open MPI's
license</a> allows third parties to fork the code base, we would
strongly prefer if you did not.  Forking is not necessarily a Bad
Thing, but history has shown that creating too many forks in MPI
implementations leads to massive user and system administrator
confusion.  We have personally seen parallel environments loaded with
tens of MPI implementations, each only slightly different from the
others.  The users then become responsible for figuring out which MPI
they want / need to use, which can be a daunting and confusing task.

We do periodically have \"short\" forks.  Specifically, sometimes an
origanization needs to release a version of Open MPI with a specific
feature.

If you're thinking of forking the Open MPI code base, please let us
know &mdash; let's see if we can work something out so that it is not
necessary.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Rats!  My contribution was not accepted into the main Open MPI
code base.  What now?";

$anchor[] = "external-contributions";

$a[] = "If your contribution was not accepted into the main Open MPI
code base, there are likely to be good reasons for it (perhaps
technical, perhaps due to licensing restrictions, etc.).

If you wrote a standalone component, you can still distribute this
component independent of the main Open MPI distribution.  Open MPI
components can be installed into existing Open MPI installations.  As
such, you can distribute your component &mdash; even if it is closed source
(e.g., distributed as binary-only) &mdash; via any mechanism you choose,
such as on a web site, FTP site, etc.";
