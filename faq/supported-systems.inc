<?php
$q[] = "What operating systems does Open MPI support?";

$anchor[] = "os";

$a[] = "We primarily develop Open MPI on Linux,
OS X, Solaris (both 32 and 64 on all platforms) and
Windows (Windows XP, Windows HPC Server 2003/2008 and also Windows 7 RC).

Open MPI is fairly POSIX-neutral, so it will run without too many
modifications on most POSIX-like systems.  Hence, if we haven't listed
your favorite operating system here, it should not be difficult to get
Open MPI to compile and run properly.  The biggest obstacle is
typically the assembly language, but that's fairly modular and we're
happy to provide information about how to port it to new platforms.

It should be noted that we are quite open to accepting patches for
operating systems that we do not currently support.  If we do not have
systems to test these on, we probably will only claim to
\"unofficially\" support those systems.

Microsoft Windows support has been added in v1.3.3, please see the file
README.WINDOWS.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What hardware platforms does Open MPI support?";

$anchor[] = "hardware";

$a[] = "Essentially all the common platforms that the operating
systems listed in the previous question support.

For example, Linux runs on a *wide* variety of platforms, and we
certainly can't claim to support all of them (e.g., Open MPI does not
run in an embedded environment), but we include assembly for support
Intel, AMD, and PowerPC chips, for example.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What network interconnects does Open MPI support?";

$anchor[] = "network-interconnects";

$a[] = "Open MPI is based upon a component architecture; support for its MPI
point-to-point functionality only utilize a small number of components
at run-time.  Adding native support for a new network interconnect was
specifically designed to be easy.

Here's the list of networks that we natively support for
point-to-point communication:

<ul>
<li> TCP / ethernet</li>
<li> Shared memory</li>
<li> Loopback (send-to-self)</li>
<li> Myrinet / GM</li>
<li> Myrinet / MX</li>
<li> Infiniband / OpenIB</li>
<li> Infiniband / mVAPI</li>
<li> Portals</li>
</ul>

Is there a network that you'd like to see supported that is not shown
above?  <a href=\"$topdir/community/lists/\">Contributions are
welcome!</a>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What run-time environments does Open MPI support?";

$anchor[] = "rte";

$a[] = "Open MPI is layered on top of the Open Run-Time Environment (ORTE),
which originally started as a small portion of the Open MPI code base.
However, ORTE has effectively spun off into its own sub-project.

ORTE is a modular system that was specifically architected to abstract
away the back-end run-time environment (RTE) system, providing a
neutral API to the upper-level Open MPI layer.  Components can be
written for ORTE that allow it to natively utilize a wide variety of
back-end RTEs.

ORTE currently natively supports the following run-time environments:

<ul>
<li> Recent versions of BProc (e.g., Clustermatic)</li>
<li> Sun Grid Engine</li>
<li> PBS Pro, Torque, and Open PBS (the TM system)</li>
<li> LoadLeveler </li>
<li> LSF </li>
<li> POE</li>
<li> rsh / ssh</li>
<li> SLURM</li>
<li> XGrid</li>
<li> Yod (Red Storm)</li>
</ul>

Is there a run-time system that you'd like to use Open MPI with that
is not listed above?  <a href=\"$topdir/community/lists/\">Component
contributions are welcome!</a>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support LSF?";

$anchor[] = "rte-lsf-support";

$a[] = "Starting with Open MPI v1.3, yes!  

Prior to Open MPI v1.3, Platform released a script-based integration
in the LSF 6.1 and 6.2 maintenance packs around November of 2006.  If
you want this integration, please contact your normal Platform support
channels.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How much MPI does Open MPI support?";

$anchor[] = "mpi-support";

$a[] = "Open MPI 1.2 supports all of MPI-2.0.

Open MPI 1.3 supports all of MPI-2.1.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is Open MPI thread safe?";

$anchor[] = "thread-support";

$a[] = "Support for [MPI_THREAD_MULTIPLE] (i.e., multiple threads
executing within the MPI library) and asynchronous message passing
progress (i.e., continuing message passing operations even while no
user threads are in the MPI library) has been designed into Open MPI
from its first planning meetings.

Support for [MPI_THREAD_MULTIPLE] is included in the first version of
Open MPI, but it is only lightly tested and likely still has some
bugs.  Support for asynchronous progress is included in the TCP
point-to-point device, but it, too, has only had light testing and
likely still has bugs.

Completing the testing for full support of [MPI_THREAD_MULTIPLE] and
asynchronous progress is planned in the near future.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support 64 bit environments?";

$anchor[] = "64-bit-support";

$a[] = "Yes, Open MPI is 64 bit clean. You should be able to use Open
MPI on 64 bit architectures and operating systems with no
difficulty.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support execution in heterogeneous environments?";

$anchor[] = "heterogeneous-support";

$a[] = "As of v1.1, Open MPI requires that the size of C, C++, and
Fortran datatypes be the same on all platforms within a single
parallel application with the exception of types represented by
[MPI_BOOL] and [MPI_LOGICAL] -- size differences in these types
between processes are properly handled.  Endian differences between
processes in a single MPI job are properly and automatically handled.

Prior to v1.1, Open MPI did not include any support for data size or
endian heterogeneity.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support parallel debuggers?";

$anchor[] = "parallel-debuggers";

$a[] = "Yes.  Open MPI supports the TotalView API for parallel process
attaching, which several parallel debuggers support (e.g., DDT, fx2).
As part of v1.2.4 (released in September 2007), Open MPI also supports the
TotalView API for viewing message queues in running MPI processes.

See <a href=\"./?category=running#run-with-tv\">this FAQ entry</a> for
details on how to run Open MPI jobs under TotalView, and <a
href=\"./?category=running#run-with-ddt\">this FAQ entry</a> for
details on how to run Open MPI jobs under DDT.

<strong><font color=red>NOTE:</font></strong> The integration of Open
MPI message queue support is problematic with 64 bit versions of
TotalView prior to v8.3:

<ul>
<li> The message queues views will be truncated</li>
<li> Both the communicators and requests list will be incomplete</li>
<li> Both the communicators and requests list may be filled with wrong
values (such as an MPI_Send to the destination ANY_SOURCE)</li>
</ul>

There are two workarounds:

<ul>
<li> Use a 32 bit version of TotalView</li>
<li> Upgrade to TotalView v8.3</li>
</ul>";
