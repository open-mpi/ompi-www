<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "What is special about MPI performance analysis?";

$anchor[] = "MPI-special";

$a[] = "The synchronization among the MPI processes can be a key
performance concern.  For example, if a serial program spends a lot of
time in function [foo()], you should optimize [foo()].  In contrast,
if an MPI process spends a lot of time in [MPI_Recv()], not only is
the optimization target probably not [MPI_Recv()], but you should in
fact probably be looking at some other process altogether.  You should
ask, \"What is happening on other processes when this process has the
long wait?\"

Another issue is that a parallel program (in the case of MPI, a
multi-process program) can generate much more performance data than a
serial program due to the greater number of execution threads.
Managing that data volume can be a challenge.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are \"profiling\" and \"tracing\"?";

$anchor[] = "prof-vs-trace";

$a[] = "These terms are sometimes used to refer to two different kinds
of performance analysis.

In profiling, one aggregates statistics at run time &mdash; e.g., total
amount of time spent in MPI, total number of messages or bytes sent,
etc.  Data volumes are small.

In tracing, an event history is collected.  It is common to display
such event history on a timeline display.  Tracing data can provide
much interesting detail, but data volumes are large.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I sort out busy wait time from idle wait, user time
from system time, and so on?";

$anchor[] = "busy-idle-etc";

$a[] = "Don't.

MPI synchronization delays, which are key performance inhibitors you
will probably want to study, can show up as user or system time, all
depending on the MPI implementation, the type of wait, what run-time
settings you have chosen, etc.  In many cases, it makes most sense for
you just to distinguish between time spent inside MPI from time spent
outside MPI.

Elapsed wall clock time will probably be your key metric.  Exactly how
the MPI implementation spends time waiting is less important.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is PMPI?";

$anchor[] = "PMPI";

$a[] = "PMPI refers to the MPI standard profiling interface.

Each standard MPI function can be called with an [MPI_] or [PMPI_]
prefix.  For example, you can call either [MPI_Send()] or
[PMPI_Send()].  This feature of the MPI standard allows one to write
functions with the [MPI_] prefix that call the equivalent [PMPI_]
function.  Specifically, a function so written has the behavior of the
standard function plus any other behavior one would like to add.  This
is important for MPI performance analysis in at least two ways.

First, many performance analysis tools take advantage of PMPI.  They
capture the MPI calls made by your program.  They perform the
associated message-passing calls by calling PMPI functions, but also
capture important performance data.

Second, you can use such wrapper functions to customize MPI behavior.
E.g., you can add barrier operations to collective calls, write out
diagnostic information for certain MPI calls, etc.

OMPI generally layers the various function interfaces as follows:
<ul>
<li> Fortran [MPI_] interfaces are weak symbols for...
<li> Fortran [PMPI_] interfaces, which call...
<li> C [MPI_] interfaces, which are weak symbols for...
<li> C [PMPI_] interfaces, which provide the specified functionality.
</ul>

Since OMPI generally implements MPI functionality for all languages in
C, you only need to provide profiling wrappers in C, even if your
program is in another programming language.  Alternatively, you may
write the wrappers in your program's language, but if you provide
wrappers in both languages then both sets will be invoked.

There are a handful of exceptions.  For example,
[MPI_ERRHANDLER_CREATE()] in Fortran does not call
[MPI_Errhandler_create()].  Instead, it calls some other low-level
function.  Thus, to intercept this particular Fortran call, you need a
Fortran wrapper.

Be sure you make the library dynamic.  A static library can experience
the linker problems described in the Complications section of the
Profiling Interface chapter of the MPI standard.

See the section on " . "<a
href=\"http://www.mpi-forum.org/docs/mpi22-report/node312.htm#Node312\">"
. "Profiling Interface</a> in the MPI standard for more details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Should I use those switches <code>--enable-mpi-profile</code> and
<code>--enable-trace</code> when I configure OMPI?";

$anchor[] = "configure-switches";

$a[] = "Probably not.

The [--enable-mpi-profile] switch enables building of the PMPI
interfaces.  While this is important for performance analysis, this
setting is already turned on by default.

The [--enable-trace] enables internal tracing of OMPI/ORTE/OPAL calls.
It is used only for developer debugging, not MPI application
performance tracing.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What support does OMPI have for performance analysis?";

$anchor[] = "OMPI-support";

$a[] = "The OMPI source base has some instrumentation to capture
performance data, but that data must be analyzed by other non-OMPI
tools.

"

. "PERUSE was a proposed MPI standard that gives information about
low-level behavior of MPI internals.  Check the PERUSE web site for
any information about analysis tools.  When you configure OMPI, be
sure to use [--enable-peruse].  Information is <a
href=$topdir/papers/euro-pvmmpi-2006-peruse/>available</a> describing
its integration with OMPI.

Unfortunately, PERUSE didn't win standardization, so it didn't really
go anywhere.  Open MPI may drop PERUSE support at some point in the
future.

MPI-3 standardized the MPI_T tools interface API (see Chapter 14 in
the MPI-3.0 specification).  MPI_T is fully supported starting with
v1.7.3.

" . "<a href=\"http://www.tu-dresden.de/zih/vampirtrace\">"
. "VampirTrace</a> traces the entry to and exit from the MPI layer,
along with important performance data, writing data using the open OTF
format.  VT is available freely and can be used with any MPI.
Information is <a href=$topdir/faq/?category=vampirtrace>available</a>
describing its integration with OMPI.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I view VampirTrace output?";

$anchor[] = "view-VT";

$a[] = "While OMPI includes VampirTrace instrumentation, it does not
provide a tool for viewing OTF trace data.  There is simply a
primitive [otfdump] utility in the same directory where other OMPI
commands (<code>mpicc</code>, [mpirun], etc.) are located.

Another simple utility, [otfprofile], comes with " . "<a
href=\"http://www.tu-dresden.de/zih/otf/\">" . "OTF software</a> and
allows you to produce a short profile in LaTeX format from an OTF
trace.

The main way to view OTF data is with the "
. "<a href=\"http://www.vampir.eu\">"
. "Vampir</a> tool.  Evaluation licenses are available.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Are there MPI performance analysis tools for OMPI that I can download for free?";

$anchor[] = "free-tools";

$a[] = "The OMPI distribution includes no such tools, but some general
MPI tools can be used with OMPI.

...we used to maintain a list of links here.  But the list changes
over time; projects come, and projects go.  Your best bet these days
is simply to use Google to find MPI tracing and performance analysis
tools.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Any other kinds of tools I should know about?";

$anchor[] = "other-tools";

$a[] = "Well, there are other tools you should consider.  Part of
performance analysis is not just analyzing performance per se, but
generally understanding the behavior of your program.

As such, debugging tools can help you step through or pry into the
execution of your MPI program.  Popular tools include " . "<a
href=\"http://www.totalviewtech.com\">" . "TotalView</a>, which can be
downloaded for free trial use, and " . "<a
href=\"https://www.arm.com/products/development-tools/server-and-hpc/forge/ddt\">" . "Arm DDT</a> which
also provides evaluation copies.

The command-line job inspection tool " . "<a
href=\"http://padb.pittman.org.uk\">" . "padb</a> has been ported to
ORTE and OMPI.";
