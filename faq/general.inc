<?php

$q[] = "What is MPI?  What is Open MPI?";

$anchor[] = "what-is-mpi";

$a[] = "MPI stands for the Message Passing Interface.  Written by the
MPI Forum (a large committee comprised of a cross-section between
industry and research representatives), MPI is a standardized API
typically used for parallel and/or distributed computing.  The MPI
standard has been published multiple times:

<ul>
<li> MPI-1.0 (published in 1994).</li>
<li> MPI-2.0 (published in 1996).  MPI-2.0 is, for the most part,
additions and extensions to the original MPI-1.0 specification.
<ul>
<li> MPI-2.1 and MPI-2.2 were subsequently published, and contain
minor fixes, changes, and additions compared to MPI-2.0.</li>
</ul></li>
<li> MPI-3.0 (published in 2012).
<ul>
<li> MPI-3.1 was subsequently published, and contains minor fixes, changes, and
additions compared to MPI-3.0.</li>
</ul></li>
</ul>

All MPI specifications documents can be downloaded from the official
MPI Forum web site: " . "<a href=\"http://www.mpi-forum.org/\">" .
"http://www.mpi-forum.org/</a>.

Open MPI is an open source, freely available implementation of the MPI
specifications.  The Open MPI software achieves high performance; the
Open MPI project is quite receptive to community input.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where can I learn about MPI?  Are there tutorials available?";

$anchor[] = "tutorials";

$a[] = "There are many resources available on the internet for
learning MPI.

<ul>
<li> The definitive reference for MPI is " . "<a href=\"http://www.mpi-forum.org\">" . "the MPI Forum Web site</a>.  It has
copies of the MPI standards documents and all of the errata.  This is
not recommended for beginners, but is an invaluable reference.</li>
<li> Several books on MPI are available (search your favorite book
     sellers for availability):
     <ul>
     <li> _MPI: The Complete Reference_, Marc Snir et al. (an annotated
          version of the MPI-1 and MPI-2 standards; a 2 volume set,
          also known as \"The orange book\" and \"The yellow
          book\")</li>
     <li> _Using MPI_, William Gropp et al. (2nd edition, also known as
          \"The purple book\")</li>
     <li> _Parallel Programming With MPI_, Peter Pacheco</li>
     <li> ...and others.  This is _not_ a definitive list!</li>
     </ul>
</li>
<li> " . "<a href=\"http://www.citutor.org/browse.php\">"
.  "The \"Introduction to MPI\" and \"Intermediate MPI\" tutorials</a> are
excellent web-based MPI instruction offered by the NCSA.
<font color=\"red\"><strong>This is a great place for
beginners.</strong></font></li>
<li> Last but not least, "
. "<a href=\"http://www.google.com/search?q=MPI+tutorial\">"
. "searching for \"MPI tutorial\" on Google</a> turns up a wealth of
information (some good, some bad).</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are the goals of the Open MPI Project?";

$anchor[] = "goals";

$a[] = "We have several top-level goals:

<ul>
<li> Create a free, open source, peer-reviewed, production-quality
complete MPI implementation.</li>
<li> Provide extremely high, competitive performance (latency,
bandwidth, ...pick your favorite metric).</li>
<li> Directly involve the HPC community with external development
and feedback (vendors, 3rd party researchers, users, etc.).</li>
<li> Provide a stable platform for 3rd party research and commercial
development.</li>
<li> Help prevent the \"forking problem\" common to other MPI
projects.</li>
<li> Support a wide variety of HPC platforms and environments.</li>
</ul>

In short, we want to work _with_ and _for_ the HPC community to make a
world-class MPI implementation that can be used on a huge number and
kind of systems.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Will you allow external involvement?";

$anchor[] = "3rd-parties";

$a[] = "<font size=+3 color=red><strong>ABSOLUTELY.</strong></font>

Bringing together smart researchers and developers to work on a common
product is not only a good idea, it's the open source model.  Merging
the multiple MPI implementation teams has worked extremely well for us
over the past year &mdash; extending this concept to the HPC open source
community is the next logical step.

The component architecture that Open MPI is founded upon (see the
\"Publications\" link for papers about this) is designed to foster 3rd
party collaboration by enabling independent developers to use Open MPI
as a production quality research platform.  Although Open MPI is a
relatively large code base, it is rarely necessary to learn much more
than the interfaces for the component type which you are
implementing.  Specifically, the component architecture was designed
to allow small, discrete implementations of major portions of MPI
functionality (e.g., point-to-point messaging, collective
communications, run-time environment support, etc.).

We envision at least the following forms of collaboration:

<ul>
<li> Peer review of the Open MPI code base</li>
<li> Discussion with Open MPI developers on public mailing lists</li>
<li> Direct involvement from HPC software and hardware vendors</li>
<li> 3rd parties writing and providing their own Open MPI
     components</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How is this software licensed?";

$anchor[] = "license";

$a[] = "The Open MPI code base is licensed under <a
href=\"$topdir/community/license.php\">the new BSD license</a>.

That being said, although we are an open source project, we recognize
that everyone does not provide free, open source software.  Our
collaboration models allow (and encourage!)  3rd parties to write and
distribute their own components &mdash; perhaps with a different license,
and perhaps even as closed source.  This is all perfectly acceptable
(and desirable!).";

/////////////////////////////////////////////////////////////////////////

$q[] = "I want to redistribute Open MPI.  Can I?";

$anchor[] = "redistribute-ompi";

$a[] = "Absolutely.

*NOTE:* We are not lawyers and this is not legal advice.

Please read the <a href=\"$topdir/community/license.php\">Open MPI
license</a> (the BSD license).  It contains extremely liberal
provisions for redistribution.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Preventing forking is a goal; how will you enforce that?";

$anchor[] = "preventing-forking";

$a[] = "By definition, we can't.  If someone really wants to fork the Open MPI code base, they can.
By virtue of our extremely liberal <a
href=\"$topdir/community/license.php\">license</a>, it is possible for
anyone to fork at any time.

However, we hope that no one does.

We intend to distinguish ourselves from other projects by:

<ul>
<li> Working with the HPC community to accept best-in-breed
improvements and functionality enhancements.
<li> Providing a flexible framework and set of APIs that allow a
wide variety of different goals within the same code base through the
combinatorial effect of mixing-and-matching different components.
</ul>

Hence, we hope that no one ever has a reason to fork the main code
base.  We intend to work with the community to accept the best
improvements back into the main code base.  And if some developers
want to do things to the main code base that are different from the
goals of the main Open MPI Project, it is our hope that they can do
what they need in components that can be distributed without forking
the main Open MPI code base.

Only time will tell if this ambitious plan is feasible, but we're going
to work hard to make it a reality!";

/////////////////////////////////////////////////////////////////////////

$q[] = "How are 3rd party contributions handled?";

$anchor[] = "3rd-party-contrib";

$a[] = "Before accepting any code from 3rd parties, we require an original
signed contribution agreement from the donator.

These agreements assert that the contributor has the right to donate
the code and allow the Open MPI Project to perpetually distribute it
under <a href=\"$topdir/community/license.php\">the project's
licensing terms</a>.

This prevents a situation where intellectual property gets into the
Open MPI code base and then someone later claims that we owe them
money for it.  Open MPI is a free, open source code base.  And we
intend it to remain that way.

The <a href=\"?category=contributing\">Contributing to Open MPI</a> FAQ
topic contains more information on this issue.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is this just YAMPI (yet another MPI implementation)?";

$anchor[] = "what";

$a[] = "*No!*

Open MPI initially represented the merger between three well-known MPI
implementations (none of which are being developed any more):

<ul>
<li> FT-MPI from the University of Tennessee</li>
<li> LA-MPI from Los Alamos National Laboratory</li>
<li> LAM/MPI from Indiana University</li>
</ul>

with contributions from the PACX-MPI team at the University of
Stuttgart.

Each of these MPI implementations excelled in one or more areas.  The
driving motivation behind Open MPI is to bring the best ideas and
technologies from the individual projects and create one world-class
open source MPI implementation that excels in _all_ areas.

Open MPI was started with the best of the ideas from these four MPI
implementations and ported them to an entirely new code base: Open
MPI.  This also had the simultaneous effect of enabling us to jettison
old, crufty code that was only maintained for historical reasons from
each project.  We started with a clean slate and decided to \"do it
Right this time.\" As such, Open MPI also contains many new designs
and methodologies based on (literally) years of MPI implementation
experience.

After version 1.0 was released, the Open MPI Project grew to include
<a href=\"$topdir/about/members/\">many other
members</a> who have each brought their knowledge, expertise, and
resources to Open MPI.  Open MPI is now <em>far</em> more than just
the best ideas of the founding for MPI implementation projects.";

/////////////////////////////////////////////////////////////////////////

$q[] = "But I love [FT-MPI | LA-MPI | LAM/MPI | PACX-MPI]!
Why should I use Open MPI?";

$anchor[] = "why";

$a[] = "Here's a few reasons:

<ul>
<li>Open MPI represents the next generation of each of these
implementations.</li>
<li>Open MPI effectively contains the union of features from each of
the previous MPI projects.  If you find a feature in one of the prior
projects that is not in Open MPI, chances are that it will be
soon.</li>
<li>The vast majority of our future research and development work will
be in Open MPI.</li>
<li>All the same developers from your favorite project are working on
Open MPI.</li>
</ul>

Not to worry &mdash; each of the respective teams has a vested interest in
bringing over the \"best\" parts of their prior implementation to Open
MPI.  Indeed, we would love to migrate each of our current user bases
to Open MPI as their time, resources, and constraints allow.

In short: we believe that Open MPI &mdash; its code, methodology, and open
source philosophy &mdash; is the future.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What will happen to the prior projects?";

$anchor[] = "prior-projects";

$a[] = "Only time will tell (we cannot predict the future), but it is
likely that each project will eventually either end when funding stops
or be used exclusively as a research vehicle.  Indeed, some of the
projects _must_ continue to exist at least until their existing
funding expires.";

/////////////////////////////////////////////////////////////////////////

$q_not_used[] = "How did Open MPI get started?";

$anchor_not_used[] = "history";

$a_not_used[] = "The lead developers for LAM/MPI, LA-MPI, and FT-MPI kept
bumping into each other at various HPC conferences in 2003.  At each
conference, our lunch/dinner-table conversations got more and more
technically involved when it finally dawned on us that we are doing a
_lot_ of the same things in each of our respective implementations.
Although each MPI implementation focused on different areas of
excellence, we all shared the same common core values:

<ul>
<li>A full MPI implementation</li>
<li>Production quality code &mdash; it has to \"just work\"</li>
<li>A desire to explore lots of things that an MPI implementation can
do that we've never had the time/resources to investigate because we
are bound to bug fixing, etc.</li>
</ul>

Hence, we decided to collaborate and pool our resources.  At SC2003,
we decided to start an entire new code base &mdash; leaving all the cruft
and legacy code of our prior implementations behind.  Take the best,
leave the rest.  The source tree's first commit was on November 22,
2003; development work started in earnest on January 5, 2004.  Since
then, we have met together as a group once a month (for at least a
week) to meet our goal of a world-class MPI implementation, bar none.

One of the UTK developers moved back to the University of Stuttgart in
late 2004, which effectively brought their team into the project.";
