<?php

function f($name, $description) {
    return("<p><li><code>$name</code>: $description</li>\n\n");
}

$q[] = "What is the future of the PLPA?";

$anchor[] = "plpa-is-deprecated";

$a[] = "The PLPA project is (or will be soon) deprecated by the <a
href=\"$topdir/projects/hwloc/\">Portable Hardware Locality (hwloc)</a>
project.

*To be clear: all future development work is going into hwloc.*  See the
hwloc project announcements <a
href=\"http://blogs.cisco.com/ciscotalk/performance/comments/announcing_hwloc_portable_hardware_locality_open_source_software/\">here</a>
and <a
href=\"http://www.open-mpi.org/community/lists/hwloc-announce/2009/09/0000.php\">here</a>.

The first release of hwloc won't contain all of the PLPA
functionality; the ideas of PLPA are being slowly imported into hwloc
over time.  For example, PLPA's embedding capabilities will definitely
not be in the first hwloc release -- but embedding is a feature in
hwloc's short-term roadmap (<em>Editor's note: I wouldn't consider hwloc a
wholesale replacement for PLPA until embedding is available</em>).

The PLPA API likely will not be directly carried over to hwloc; hwloc
already has its own API that will likely be extended over time to
include PLPA concepts.  Hence, there will be a (small) porting effort
involved in converting PLPA-based applications to hwloc.

Please see the <a href=\"$topdir/projects/hwloc/\">hwloc project
page</a> and/or subscribe to the <a
href=\"$topdir/community/lists/hwloc.php\">hwloc mailing lists</a> for
more information.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is the API provided by the PLPA?";

$anchor[] = "api";

$a[] = "The API provides a small number of C functions and
preprocessor macros.  The API is best described through its header
file:

<div align=\"center\"><a href=\"https://svn.open-mpi.org/trac/plpa/browser/trunk/src/libplpa/plpa.h.in\">https://svn.open-mpi.org/trac/plpa/browser/trunk/src/libplpa/plpa.h.in</a></div>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I include the PLPA in my software project?";

$anchor[] = "include-mode";

$a[] = "Yes.

The PLPA was specifically designed to be safely included in other
software projects.  The PLPA provides an M4 macro file suitable for
[acinclude]'ing in a top-level [configure] script, and also has a
name-shifting mechanism for its API so that if multiple libraries
include name-shifted versions of the PLPA, there will be no symbol
conflicts.

" . "<a href=\"https://svn.open-mpi.org/trac/plpa/browser/trunk/README\">"
. "The PLPA README file</a> has more details on the name shifting
mechanism.

The PLPA is licensed under " .
"<a href=\"https://svn.open-mpi.org/trac/plpa/browser/trunk/LICENSE\">" .
"the BSD license</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the PLPA figure out which kernel API to use?";

$anchor[] = "kernel-mode-api";

$a[] = "The PLPA uses the [syscall()] interface to bypass GLibc and
directly call the get and set affinity functions in the Linux kernel.
This is because the GLibc API has changed multiple times, and there
are buggy versions in real linux distributions that cause problems.
Bypassing it and directly callign the kernel seemed the safest route.

But even so, the kernel has slightly changed its API a few times.
Mostly, this has to deal with the [len] parameter (telling the kernel
how long the CPU set argument it).  Careful examiniation of the kernel
source code has led to a fairly small number of safe tests that can be
performed to determine which size it expects.

The PLPA hides all this from the user -- it will figure out what size
the kernel expects and use it in all the [syscall()] interactions with
the set and get affinity functions.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm having a problem!  What should I do?";

$anchor[] = "reporting-problems";

$a[] = "If you can't get the PLPA to compile, please see the Open MPI
<a href=\"$topdir/community/help/\">Getting Help</a> page to see what
details to send to the <a
href=\"$topdir/community/lists/plpa.php\">PLPA User's Mailing
List</a>.

If you are having problems with the PLPA run-time, please send a <font
color=red>detailed</font> message the <a
href=\"$topdir/community/lists/plpa.php\">PLPA User's Mailing
List</a> describing what is going wrong.  The more information that
you provide, the better.  Mails saying \"It doesn't work -- help me!\"
will simply be met with requests for more information, so please just
sent it all the first time.

Please be sure to include the output of [plpa_info] in your message.";
