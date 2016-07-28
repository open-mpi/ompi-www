<?
$subject_val = "Re: [OMPI devel] OMPI/ORTE and tools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 10:19:13 2008" -->
<!-- isoreceived="20080122151913" -->
<!-- sent="Tue, 22 Jan 2008 08:19:01 -0700" -->
<!-- isosent="20080122151901" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI/ORTE and tools" -->
<!-- id="C3BB5775.BDC5%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E77C21A7-70B4-436F-B739-C4272A919729_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI/ORTE and tools<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-22 10:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3017.php">Jeff Squyres: "[OMPI devel] OFED 1.1 compile problems on trunk"</a>
<li><strong>Previous message:</strong> <a href="3015.php">Sharon Melamed: "Re: [OMPI devel] carto framework"</a>
<li><strong>In reply to:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/19/08 6:31 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a little confused as to what you're providing.  In all 3 of the
</span><br>
<span class="quotelev1">&gt; scenarios you describe, you're saying that the external tool can
</span><br>
<span class="quotelev1">&gt; connect to the HNP for one or more jobs and execute a few discrete
</span><br>
<span class="quotelev1">&gt; functions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - find procs and/or jobs running under that HNP
</span><br>
<span class="quotelev1">&gt; - querying status of procs and/or jobs
</span><br>
<span class="quotelev1">&gt; - querying status of nodes
</span><br>
<span class="quotelev1">&gt; - spawning a new job
</span><br>
<span class="quotelev1">&gt; - terminating a job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Actually, that isn't quite correct - sorry for confusion. What I was trying
<br>
to say was that you could connect via a simple wire protocol (scenario #1)
<br>
to pass a few discrete commands and queries to an existing mpirun (and/or
<br>
persistent virtual machine). The HNP &quot;listens&quot; on the same daemon command
<br>
socket that it always opens, so there is no &quot;new&quot; socket for this
<br>
functionality.
<br>
<p>The advantages of this approach are: (a) the tool only calls simple library
<br>
functions to pass commands/queries to the HNP and get answers back. Any
<br>
changes in APIs within ORTE are now totally hidden from the tool; (b) the
<br>
size of the required comm library is much smaller than all of ORTE, so the
<br>
tool gets a smaller memory footprint; (c) the tool &quot;lives&quot; totally
<br>
independently of the application, so you can quit (and later restart and
<br>
reconnect) the tool without disturbing the application.
<br>
<p>Disadvantages are: (a) you only get access to a limited set of queries
<br>
and/or commands - what I was requesting was input on commands people would
<br>
like that I might have missed; and (b) the mpirun and/or virtual machine
<br>
must be started separately before the tool can connect to them (however, the
<br>
tool can be started first and simply be told to &quot;look for an mpirun&quot; after
<br>
the mpirun is issued).
<br>
<p><p><p>Scenario #2 is identical to what we have in the code releases today. In this
<br>
mode, the tool calls &quot;orte_init&quot; and sets itself up as an HNP. It then uses
<br>
the ORTE API's to execute the commands - e.g., calling orte_plm.spawn to
<br>
launch the specified application. The tool can also launch any distributed
<br>
&quot;probes&quot; (i.e., processes needed by the tool but not part of the application
<br>
- e.g., to monitor an application's resource usage) on the backend nodes, if
<br>
desired, by simply calling orte_plm.spawn for a second &quot;app&quot; that consists
<br>
of the probe executable.
<br>
<p>Advantages: full access to all ORTE functionality and internal data
<br>
<p>Disadvantages: (a) the tool's code may have to be updated to follow changes
<br>
in ORTE internal APIs; (b) the tool must stay alive throughout execution of
<br>
the application.
<br>
<p><p><p>Scenario #3 is somewhat of a combination of the prior two. If you invoke
<br>
mpirun to launch an application into the background, you can subsequently
<br>
invoke mpirun again to launch a set of distributed &quot;probes&quot; (as described
<br>
above) to monitor that application. In this case, you could (if desired)
<br>
have one or more of the &quot;probe&quot; processes contact the HNP via the simple
<br>
wire protocol to issue commands. Or you could just have the processes report
<br>
(via stdout or files) whatever info they are monitoring.
<br>
<p>The point in this scenario was mainly to show that you could launch a
<br>
distributed tool without dealing with the ORTE interfaces - the tool's procs
<br>
can either just do their own thing, or can use the wire protocol to
<br>
communicate with the application's HNP. In this case, the tool is again
<br>
independent of the application being monitored, so you could stop and
<br>
restart/reconnect it without affecting anything.
<br>
<p><p><p>These were just a response to some concerns expressed about tools dealing
<br>
with changing APIs. The wire protocol removes that necessity/annoyance, with
<br>
some (hopefully minor) limits on capability. What people had wanted from a
<br>
tool was the ability to spawn jobs, spawn distributed &quot;probes&quot;, and query
<br>
status of jobs/nodes/procs. I have provided that capability - just not sure
<br>
if there is more they would like to see.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; I can see how this maps into scenario #1, but I don't quite understand
</span><br>
<span class="quotelev1">&gt; scenarios #2 and #3.  Is there a new API for this functionality, or is
</span><br>
<span class="quotelev1">&gt; there a simple wire protocol that is used to connect to the HNP and
</span><br>
<span class="quotelev1">&gt; send these commands?  Does the HNP listen on a new socket for these
</span><br>
<span class="quotelev1">&gt; commands?  I.e., how does it work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2008, at 8:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Summary: this note provides a brief overview of how various tools can
</span><br>
<span class="quotelev2">&gt;&gt; interface to OMPI applications once the next version of ORTE is
</span><br>
<span class="quotelev2">&gt;&gt; integrated
</span><br>
<span class="quotelev2">&gt;&gt; into the trunk. It includes a request for input regarding any needs
</span><br>
<span class="quotelev2">&gt;&gt; (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; additional commands to be supported in the interface) that have not
</span><br>
<span class="quotelev2">&gt;&gt; been
</span><br>
<span class="quotelev2">&gt;&gt; adequately addressed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As many of you know, I have been working on a tmp branch to complete
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; revamp of ORTE that has been in progress for quite some time. Among
</span><br>
<span class="quotelev2">&gt;&gt; other
</span><br>
<span class="quotelev2">&gt;&gt; things, this revamp is intended to simplify the system, provide
</span><br>
<span class="quotelev2">&gt;&gt; enhanced
</span><br>
<span class="quotelev2">&gt;&gt; scalability, and improved reliability.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As part of that effort, I have extensively revised the support for
</span><br>
<span class="quotelev2">&gt;&gt; external
</span><br>
<span class="quotelev2">&gt;&gt; tools. In the past, tools such as the Eclipse PTP could only
</span><br>
<span class="quotelev2">&gt;&gt; interact with
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI-based applications via ORTE API's, thus exposing the tool
</span><br>
<span class="quotelev2">&gt;&gt; to any
</span><br>
<span class="quotelev2">&gt;&gt; changes in those APIs. Most tools, however, do not require the level
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; control provided by the APIs and can benefit from a simplified
</span><br>
<span class="quotelev2">&gt;&gt; interface.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Accordingly, the revamped ORTE now offers alternative methods of
</span><br>
<span class="quotelev2">&gt;&gt; interaction. The primary change has been the creation of a
</span><br>
<span class="quotelev2">&gt;&gt; communications
</span><br>
<span class="quotelev2">&gt;&gt; library with a simple serial protocol for interacting with OMPI
</span><br>
<span class="quotelev2">&gt;&gt; jobs. Thus,
</span><br>
<span class="quotelev2">&gt;&gt; tools now have three choices for interacting with OMPI jobs:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I have created a new communications library that tools can link
</span><br>
<span class="quotelev2">&gt;&gt; against.
</span><br>
<span class="quotelev2">&gt;&gt; It does not include all of the ORTE or OMPI libraries, so it is a
</span><br>
<span class="quotelev2">&gt;&gt; very small
</span><br>
<span class="quotelev2">&gt;&gt; memory footprint. Besides the usual calls to initialize and
</span><br>
<span class="quotelev2">&gt;&gt; finalize, the
</span><br>
<span class="quotelev2">&gt;&gt; library contains utilities for finding all of the OMPI jobs running
</span><br>
<span class="quotelev2">&gt;&gt; on that
</span><br>
<span class="quotelev2">&gt;&gt; HNP (i.e., all OMPI jobs whose mpirun was executed from that host),
</span><br>
<span class="quotelev2">&gt;&gt; querying
</span><br>
<span class="quotelev2">&gt;&gt; the status of a job (provides the job map plus all proc states);
</span><br>
<span class="quotelev2">&gt;&gt; querying
</span><br>
<span class="quotelev2">&gt;&gt; the status of nodes (provides node names, status, and list of procs
</span><br>
<span class="quotelev2">&gt;&gt; on each
</span><br>
<span class="quotelev2">&gt;&gt; node including their state); querying the status of a specific
</span><br>
<span class="quotelev2">&gt;&gt; process;
</span><br>
<span class="quotelev2">&gt;&gt; spawning a new job; and terminating a job. In addition, you can
</span><br>
<span class="quotelev2">&gt;&gt; attach to
</span><br>
<span class="quotelev2">&gt;&gt; output streams of any process, specifying stdout, stderr, or both -
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tees&quot; the specified streams, so it won't interfere with the job's
</span><br>
<span class="quotelev2">&gt;&gt; normal
</span><br>
<span class="quotelev2">&gt;&gt; output flow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I could also create a utility to allow attachment to the input
</span><br>
<span class="quotelev2">&gt;&gt; stream of a
</span><br>
<span class="quotelev2">&gt;&gt; process. However, I'm a little concerned about possible conflicts with
</span><br>
<span class="quotelev2">&gt;&gt; whatever is already flowing across that stream. I would appreciate any
</span><br>
<span class="quotelev2">&gt;&gt; suggestions as to whether or not to provide that capability.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note: we removed the concept of the ORTE &quot;universe&quot;, so a tool can
</span><br>
<span class="quotelev2">&gt;&gt; now talk
</span><br>
<span class="quotelev2">&gt;&gt; to any mpirun without complications. Thus, tools can simultaneously
</span><br>
<span class="quotelev2">&gt;&gt; &quot;connect&quot; to and monitor multiple mpiruns, if desired.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. link against all of OMPI or ORTE, and execute a standalone
</span><br>
<span class="quotelev2">&gt;&gt; program. In
</span><br>
<span class="quotelev2">&gt;&gt; this mode, your tool would act as a surrogate for mpirun by directly
</span><br>
<span class="quotelev2">&gt;&gt; spawning the user's application. This provides some flexibility, but
</span><br>
<span class="quotelev2">&gt;&gt; it does
</span><br>
<span class="quotelev2">&gt;&gt; mean that both the tool and the job -must- end together, and that
</span><br>
<span class="quotelev2">&gt;&gt; the tool
</span><br>
<span class="quotelev2">&gt;&gt; may need to be revised whenever OMPI/ORTE APIs are updated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. link against all of OMPI or ORTE, executing as a distributed set of
</span><br>
<span class="quotelev2">&gt;&gt; processes. In this mode, you would execute your tool via &quot;mpirun -
</span><br>
<span class="quotelev2">&gt;&gt; pernode
</span><br>
<span class="quotelev2">&gt;&gt; ./my_tool&quot; (or whatever command is appropriate - this example would
</span><br>
<span class="quotelev2">&gt;&gt; launch
</span><br>
<span class="quotelev2">&gt;&gt; one tool process on every node in the allocation). If the tool
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; need to communicate with each other, they can call MPI_Init or
</span><br>
<span class="quotelev2">&gt;&gt; orte_init,
</span><br>
<span class="quotelev2">&gt;&gt; depending upon the level of desired communication. Note that the
</span><br>
<span class="quotelev2">&gt;&gt; tool job
</span><br>
<span class="quotelev2">&gt;&gt; will be completely standalone from the application job and must be
</span><br>
<span class="quotelev2">&gt;&gt; terminated separately.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In all of these cases, it is possible for tool processes to connect
</span><br>
<span class="quotelev2">&gt;&gt; (via MPI
</span><br>
<span class="quotelev2">&gt;&gt; and/or ORTE-RML) to a job's processes provided that the application
</span><br>
<span class="quotelev2">&gt;&gt; supports
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can provide more details, of course, to anyone wishing them. What
</span><br>
<span class="quotelev2">&gt;&gt; I would
</span><br>
<span class="quotelev2">&gt;&gt; appreciate, though, is any feedback about desired commands, mode of
</span><br>
<span class="quotelev2">&gt;&gt; operation, etc. that I might have missed or people would prefer be
</span><br>
<span class="quotelev2">&gt;&gt; changed.
</span><br>
<span class="quotelev2">&gt;&gt; This code is all in a private repository for my tmp branch, but I
</span><br>
<span class="quotelev2">&gt;&gt; expect
</span><br>
<span class="quotelev2">&gt;&gt; that to merge with the trunk fairly soon. I have provided a couple of
</span><br>
<span class="quotelev2">&gt;&gt; example tools to illustrate the above modes of operation in that code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3017.php">Jeff Squyres: "[OMPI devel] OFED 1.1 compile problems on trunk"</a>
<li><strong>Previous message:</strong> <a href="3015.php">Sharon Melamed: "Re: [OMPI devel] carto framework"</a>
<li><strong>In reply to:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
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
