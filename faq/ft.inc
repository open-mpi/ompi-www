<?php

$q[] = "What is \"fault tolerance\"?";

$anchor[] = "ft-definition";

$a[] = "The phrase \"fault tolerance\" means many things to many
people.  Typical definitions range from user processes dumping vital
state to disk periodically to checkpoint/restart of running processes
to elaborate recreate-process-state-from-incremental-pieces schemes to
... (you get the idea).

In the scope of Open MPI, we typically define \"fault tolerance\" to
mean the ability to recover from one or more component failures in a
well defined manner with either a transparent or application-directed
mechanism.  Component failures may exhibit themselves as a corrupted
transmission over a faulty network interface or the failure of one or
more serial or parallel processes due to a processor or node failure.
Open MPI strives to provide the application with a consistent system
view while still providing a production quality, high performance
implementation.

Yes, that's pretty much as all-inclusive as possible &mdash; intentionally
so!  Remember that in addition to being a production-quality MPI
implementation, Open MPI is also a vehicle for research.  So while
some forms of \"fault tolerance\" are more widely accepted and used,
others are certainly of valid academic interest.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What fault tolerance techniques does Open MPI plan on supporting?";

$anchor[] = "ft-future";

$a[] = "Open MPI plans on supporting the following fault tolerance
techniques:

<ul>
<li>Coordinated and uncoordinated process checkpoint and
restart. Similar to those implemented in LAM/MPI and MPICH-V,
respectively.</li>
<li>Message logging techniques. Similar to those implemented in
MPICH-V</li>
<li>Data Reliability and network fault tolerance. Similar to those
implemented in LA-MPI</li>
<li>User directed, and communicator driven fault tolerance. Similar to
those implemented in FT-MPI.</li>
</ul>

The Open MPI team will not limit their fault tolerance techniques to
those mentioned above, but intend on extending beyond them in the
future.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support checkpoint and restart of parallel jobs (similar
to LAM/MPI)?";

$anchor[] = "cr-support";

$a[] = "Yes. The v1.3 series was the first release series of Open MPI to include
support for the transparent, coordinated checkpointing and restarting of MPI
processes (similar to LAM/MPI).

Open MPI supports both the the "
. "<a href=\"http://ftg.lbl.gov/checkpoint/\">" .  "BLCR</a>
checkpoint/restart system and a \"self\" checkpointer that allows
applications to perform their own checkpoint/restart functionality while taking
advantage of the Open MPI checkpoint/restart infrastructure.
For both of these, Open MPI provides a coordinated checkpoint/restart protocol
and integration with a variety of network interconnects including shared memory,
Ethernet, InfiniBand, and Myrinet.

The implementation introduces a series of new frameworks and
components designed to support a variety of checkpoint and restart
techniques. This allows us to support the methods described above
(application-directed, BLCR, etc.) as well as other kinds of
checkpoint/restart systems (e.g., Condor, libckpt) and protocols
(e.g., uncoordinated, message induced).

<font color=\"red\"><strong>Note:</strong></font> The
checkpoint/restart support was last released as part of the v1.6
series.  The v1.7 series and the Open MPI master do not support this
functionality (most of the code is present in the repository, but it
is known to be non-functional in most cases).  This feature is looking
for a maintainer. Interested parties should inquire on the developers
mailing list.  ";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where can I find the fault tolerance development work?";

$anchor[] = "ft-location";

$a[] = "The end-to-end MPI message data reliability work is being actively
developed on the git master  (i.e., reliable message passing over
unreliable networks).  See <a href=\"#dr-support\">this FAQ entry</a>
for more details.

The coordinated checkpoint and restart process fault tolerance work is
currently available on the Open MPI development master and in the v1.3
release series. For more information about how to use this feature see
the following websites:
<ul>
<li> Fault Tolerance Research at Indiana University: " .
"<a href=\"http://osl.iu.edu/research/ft/ompi-cr/\">" . "
http://osl.iu.edu/research/ft/ompi-cr/</a>
</li>
<li> Development WIKI: " .
"<a href=\"https://github.com/open-mpi/ompi/wiki/ProcessFT_CR\">" . "
https://github.com/open-mpi/ompi/wiki/ProcessFT_CR</a>
</li>
</ul>

For information on the Fault Tolerant MPI prototype in Open MPI see the
links below:
<ul>
<li>MPI Forum's Fault Tolerance Working Group: " .
"<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage\">" . "
https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage</a>
</li>
<li>Fault Tolerant MPI Prototype: " .
"<a href=\"http://fault-tolerance.org/\">" . "
http://fault-tolerance.org/</a>
</li>
</ul>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support end-to-end data reliability in MPI
message passing?";

$anchor[] = "dr-support";

$a[] = "The current release of Open MPI does not support end-to-end
data reliability in message passing any more than the underlying
network already guarantees.  Future releases of Open MPI will include
explicit data reliability support (i.e., more functionality than is
provided by the underlying network).

Specifically, the data reliability (\"dr\") PML component (available
on the master, but not yet in a stable release) assumes that the
underlying network is unreliable.  It can drop / restart connections,
retransmit corrupted or lost data, etc.  The end effect is that data
sent through MPI API functions will be guaranteed to be reliable.

For example, if you're using TCP as a message transport, chances of
data corruption are fairly low.  However, other interconnects do _not_
guarantee that data will be uncorrupted when traveling across the
network.  Additionally, there are nonzero possibilities that data can
be corrupted while traversing PCI buses, etc. (some corruption errors
at this level can be caught/fixed, others cannot).  Such errors are
not uncommon at high altitudes (!).

Note that such added reliability does incur a performance cost &mdash;
latency and bandwidth suffer when Open MPI performs the consistency
checks that are necessary to provide such guarantees.

Many clusters/networks will not need data reliability.  But some do
(e.g., those operating at high altitudes).  The dr PML is intended for
environments where reliability is an issue; users are willing to
tolerate slightly slower applications in order to guarantee that their
job does not crash (or worse, produce wrong answers).";
