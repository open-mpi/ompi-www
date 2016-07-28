<?
$subject_val = "[OMPI devel] OMPI/ORTE and tools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 08:47:15 2008" -->
<!-- isoreceived="20080116134715" -->
<!-- sent="Wed, 16 Jan 2008 06:47:02 -0700" -->
<!-- isosent="20080116134702" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI/ORTE and tools" -->
<!-- id="C3B358E6.4288%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] OMPI/ORTE and tools<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 08:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2983.php">Josh Hursey: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2983.php">Josh Hursey: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="2983.php">Josh Hursey: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Summary: this note provides a brief overview of how various tools can
<br>
interface to OMPI applications once the next version of ORTE is integrated
<br>
into the trunk. It includes a request for input regarding any needs (e.g.,
<br>
additional commands to be supported in the interface) that have not been
<br>
adequately addressed.
<br>
<p>As many of you know, I have been working on a tmp branch to complete the
<br>
revamp of ORTE that has been in progress for quite some time. Among other
<br>
things, this revamp is intended to simplify the system, provide enhanced
<br>
scalability, and improved reliability.
<br>
<p>As part of that effort, I have extensively revised the support for external
<br>
tools. In the past, tools such as the Eclipse PTP could only interact with
<br>
Open MPI-based applications via ORTE API's, thus exposing the tool to any
<br>
changes in those APIs. Most tools, however, do not require the level of
<br>
control provided by the APIs and can benefit from a simplified interface.
<br>
<p>Accordingly, the revamped ORTE now offers alternative methods of
<br>
interaction. The primary change has been the creation of a communications
<br>
library with a simple serial protocol for interacting with OMPI jobs. Thus,
<br>
tools now have three choices for interacting with OMPI jobs:
<br>
<p>1. I have created a new communications library that tools can link against.
<br>
It does not include all of the ORTE or OMPI libraries, so it is a very small
<br>
memory footprint. Besides the usual calls to initialize and finalize, the
<br>
library contains utilities for finding all of the OMPI jobs running on that
<br>
HNP (i.e., all OMPI jobs whose mpirun was executed from that host), querying
<br>
the status of a job (provides the job map plus all proc states); querying
<br>
the status of nodes (provides node names, status, and list of procs on each
<br>
node including their state); querying the status of a specific process;
<br>
spawning a new job; and terminating a job. In addition, you can attach to
<br>
output streams of any process, specifying stdout, stderr, or both - this
<br>
&quot;tees&quot; the specified streams, so it won't interfere with the job's normal
<br>
output flow.
<br>
<p>I could also create a utility to allow attachment to the input stream of a
<br>
process. However, I'm a little concerned about possible conflicts with
<br>
whatever is already flowing across that stream. I would appreciate any
<br>
suggestions as to whether or not to provide that capability.
<br>
<p>Note: we removed the concept of the ORTE &quot;universe&quot;, so a tool can now talk
<br>
to any mpirun without complications. Thus, tools can simultaneously
<br>
&quot;connect&quot; to and monitor multiple mpiruns, if desired.
<br>
<p><p>2. link against all of OMPI or ORTE, and execute a standalone program. In
<br>
this mode, your tool would act as a surrogate for mpirun by directly
<br>
spawning the user's application. This provides some flexibility, but it does
<br>
mean that both the tool and the job -must- end together, and that the tool
<br>
may need to be revised whenever OMPI/ORTE APIs are updated.
<br>
<p><p>3. link against all of OMPI or ORTE, executing as a distributed set of
<br>
processes. In this mode, you would execute your tool via &quot;mpirun -pernode
<br>
./my_tool&quot; (or whatever command is appropriate - this example would launch
<br>
one tool process on every node in the allocation). If the tool processes
<br>
need to communicate with each other, they can call MPI_Init or orte_init,
<br>
depending upon the level of desired communication. Note that the tool job
<br>
will be completely standalone from the application job and must be
<br>
terminated separately.
<br>
<p><p>In all of these cases, it is possible for tool processes to connect (via MPI
<br>
and/or ORTE-RML) to a job's processes provided that the application supports
<br>
it.
<br>
<p>I can provide more details, of course, to anyone wishing them. What I would
<br>
appreciate, though, is any feedback about desired commands, mode of
<br>
operation, etc. that I might have missed or people would prefer be changed.
<br>
This code is all in a private repository for my tmp branch, but I expect
<br>
that to merge with the trunk fairly soon. I have provided a couple of
<br>
example tools to illustrate the above modes of operation in that code.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2983.php">Josh Hursey: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2983.php">Josh Hursey: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="2983.php">Josh Hursey: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
