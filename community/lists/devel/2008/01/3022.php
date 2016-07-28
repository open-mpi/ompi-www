<?
$subject_val = "Re: [OMPI devel] OMPI/ORTE and tools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 14:41:41 2008" -->
<!-- isoreceived="20080123194141" -->
<!-- sent="Wed, 23 Jan 2008 14:28:58 -0500" -->
<!-- isosent="20080123192858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI/ORTE and tools" -->
<!-- id="7E9D1B67-0068-43C6-82B5-70723DECAFF1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3BB5775.BDC5%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 14:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>Previous message:</strong> <a href="3021.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="3016.php">Ralph H Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gotcha; thanks for the explanation.
<br>
<p>The capabilities you added sounds good for the moment; I'm sure we'll  
<br>
think of more over time...
<br>
<p><p>On Jan 22, 2008, at 10:19 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/19/08 6:31 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm a little confused as to what you're providing.  In all 3 of the
</span><br>
<span class="quotelev2">&gt;&gt; scenarios you describe, you're saying that the external tool can
</span><br>
<span class="quotelev2">&gt;&gt; connect to the HNP for one or more jobs and execute a few discrete
</span><br>
<span class="quotelev2">&gt;&gt; functions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - find procs and/or jobs running under that HNP
</span><br>
<span class="quotelev2">&gt;&gt; - querying status of procs and/or jobs
</span><br>
<span class="quotelev2">&gt;&gt; - querying status of nodes
</span><br>
<span class="quotelev2">&gt;&gt; - spawning a new job
</span><br>
<span class="quotelev2">&gt;&gt; - terminating a job
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, that isn't quite correct - sorry for confusion. What I was  
</span><br>
<span class="quotelev1">&gt; trying
</span><br>
<span class="quotelev1">&gt; to say was that you could connect via a simple wire protocol  
</span><br>
<span class="quotelev1">&gt; (scenario #1)
</span><br>
<span class="quotelev1">&gt; to pass a few discrete commands and queries to an existing mpirun  
</span><br>
<span class="quotelev1">&gt; (and/or
</span><br>
<span class="quotelev1">&gt; persistent virtual machine). The HNP &quot;listens&quot; on the same daemon  
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; socket that it always opens, so there is no &quot;new&quot; socket for this
</span><br>
<span class="quotelev1">&gt; functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The advantages of this approach are: (a) the tool only calls simple  
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt; functions to pass commands/queries to the HNP and get answers back.  
</span><br>
<span class="quotelev1">&gt; Any
</span><br>
<span class="quotelev1">&gt; changes in APIs within ORTE are now totally hidden from the tool;  
</span><br>
<span class="quotelev1">&gt; (b) the
</span><br>
<span class="quotelev1">&gt; size of the required comm library is much smaller than all of ORTE,  
</span><br>
<span class="quotelev1">&gt; so the
</span><br>
<span class="quotelev1">&gt; tool gets a smaller memory footprint; (c) the tool &quot;lives&quot; totally
</span><br>
<span class="quotelev1">&gt; independently of the application, so you can quit (and later restart  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; reconnect) the tool without disturbing the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disadvantages are: (a) you only get access to a limited set of queries
</span><br>
<span class="quotelev1">&gt; and/or commands - what I was requesting was input on commands people  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; like that I might have missed; and (b) the mpirun and/or virtual  
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev1">&gt; must be started separately before the tool can connect to them  
</span><br>
<span class="quotelev1">&gt; (however, the
</span><br>
<span class="quotelev1">&gt; tool can be started first and simply be told to &quot;look for an mpirun&quot;  
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; the mpirun is issued).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario #2 is identical to what we have in the code releases today.  
</span><br>
<span class="quotelev1">&gt; In this
</span><br>
<span class="quotelev1">&gt; mode, the tool calls &quot;orte_init&quot; and sets itself up as an HNP. It  
</span><br>
<span class="quotelev1">&gt; then uses
</span><br>
<span class="quotelev1">&gt; the ORTE API's to execute the commands - e.g., calling  
</span><br>
<span class="quotelev1">&gt; orte_plm.spawn to
</span><br>
<span class="quotelev1">&gt; launch the specified application. The tool can also launch any  
</span><br>
<span class="quotelev1">&gt; distributed
</span><br>
<span class="quotelev1">&gt; &quot;probes&quot; (i.e., processes needed by the tool but not part of the  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; - e.g., to monitor an application's resource usage) on the backend  
</span><br>
<span class="quotelev1">&gt; nodes, if
</span><br>
<span class="quotelev1">&gt; desired, by simply calling orte_plm.spawn for a second &quot;app&quot; that  
</span><br>
<span class="quotelev1">&gt; consists
</span><br>
<span class="quotelev1">&gt; of the probe executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Advantages: full access to all ORTE functionality and internal data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disadvantages: (a) the tool's code may have to be updated to follow  
</span><br>
<span class="quotelev1">&gt; changes
</span><br>
<span class="quotelev1">&gt; in ORTE internal APIs; (b) the tool must stay alive throughout  
</span><br>
<span class="quotelev1">&gt; execution of
</span><br>
<span class="quotelev1">&gt; the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario #3 is somewhat of a combination of the prior two. If you  
</span><br>
<span class="quotelev1">&gt; invoke
</span><br>
<span class="quotelev1">&gt; mpirun to launch an application into the background, you can  
</span><br>
<span class="quotelev1">&gt; subsequently
</span><br>
<span class="quotelev1">&gt; invoke mpirun again to launch a set of distributed &quot;probes&quot; (as  
</span><br>
<span class="quotelev1">&gt; described
</span><br>
<span class="quotelev1">&gt; above) to monitor that application. In this case, you could (if  
</span><br>
<span class="quotelev1">&gt; desired)
</span><br>
<span class="quotelev1">&gt; have one or more of the &quot;probe&quot; processes contact the HNP via the  
</span><br>
<span class="quotelev1">&gt; simple
</span><br>
<span class="quotelev1">&gt; wire protocol to issue commands. Or you could just have the  
</span><br>
<span class="quotelev1">&gt; processes report
</span><br>
<span class="quotelev1">&gt; (via stdout or files) whatever info they are monitoring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The point in this scenario was mainly to show that you could launch a
</span><br>
<span class="quotelev1">&gt; distributed tool without dealing with the ORTE interfaces - the  
</span><br>
<span class="quotelev1">&gt; tool's procs
</span><br>
<span class="quotelev1">&gt; can either just do their own thing, or can use the wire protocol to
</span><br>
<span class="quotelev1">&gt; communicate with the application's HNP. In this case, the tool is  
</span><br>
<span class="quotelev1">&gt; again
</span><br>
<span class="quotelev1">&gt; independent of the application being monitored, so you could stop and
</span><br>
<span class="quotelev1">&gt; restart/reconnect it without affecting anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These were just a response to some concerns expressed about tools  
</span><br>
<span class="quotelev1">&gt; dealing
</span><br>
<span class="quotelev1">&gt; with changing APIs. The wire protocol removes that necessity/ 
</span><br>
<span class="quotelev1">&gt; annoyance, with
</span><br>
<span class="quotelev1">&gt; some (hopefully minor) limits on capability. What people had wanted  
</span><br>
<span class="quotelev1">&gt; from a
</span><br>
<span class="quotelev1">&gt; tool was the ability to spawn jobs, spawn distributed &quot;probes&quot;, and  
</span><br>
<span class="quotelev1">&gt; query
</span><br>
<span class="quotelev1">&gt; status of jobs/nodes/procs. I have provided that capability - just  
</span><br>
<span class="quotelev1">&gt; not sure
</span><br>
<span class="quotelev1">&gt; if there is more they would like to see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can see how this maps into scenario #1, but I don't quite  
</span><br>
<span class="quotelev2">&gt;&gt; understand
</span><br>
<span class="quotelev2">&gt;&gt; scenarios #2 and #3.  Is there a new API for this functionality, or  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; there a simple wire protocol that is used to connect to the HNP and
</span><br>
<span class="quotelev2">&gt;&gt; send these commands?  Does the HNP listen on a new socket for these
</span><br>
<span class="quotelev2">&gt;&gt; commands?  I.e., how does it work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 16, 2008, at 8:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summary: this note provides a brief overview of how various tools  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface to OMPI applications once the next version of ORTE is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integrated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into the trunk. It includes a request for input regarding any needs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional commands to be supported in the interface) that have not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adequately addressed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As many of you know, I have been working on a tmp branch to complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revamp of ORTE that has been in progress for quite some time. Among
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things, this revamp is intended to simplify the system, provide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enhanced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scalability, and improved reliability.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As part of that effort, I have extensively revised the support for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; external
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools. In the past, tools such as the Eclipse PTP could only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interact with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI-based applications via ORTE API's, thus exposing the tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes in those APIs. Most tools, however, do not require the level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control provided by the APIs and can benefit from a simplified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Accordingly, the revamped ORTE now offers alternative methods of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interaction. The primary change has been the creation of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library with a simple serial protocol for interacting with OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs. Thus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools now have three choices for interacting with OMPI jobs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. I have created a new communications library that tools can link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It does not include all of the ORTE or OMPI libraries, so it is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory footprint. Besides the usual calls to initialize and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finalize, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library contains utilities for finding all of the OMPI jobs running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HNP (i.e., all OMPI jobs whose mpirun was executed from that host),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; querying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the status of a job (provides the job map plus all proc states);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; querying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the status of nodes (provides node names, status, and list of procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node including their state); querying the status of a specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawning a new job; and terminating a job. In addition, you can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attach to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output streams of any process, specifying stdout, stderr, or both -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;tees&quot; the specified streams, so it won't interfere with the job's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; normal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output flow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could also create a utility to allow attachment to the input
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stream of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process. However, I'm a little concerned about possible conflicts  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whatever is already flowing across that stream. I would appreciate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestions as to whether or not to provide that capability.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note: we removed the concept of the ORTE &quot;universe&quot;, so a tool can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now talk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to any mpirun without complications. Thus, tools can simultaneously
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;connect&quot; to and monitor multiple mpiruns, if desired.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. link against all of OMPI or ORTE, and execute a standalone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program. In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this mode, your tool would act as a surrogate for mpirun by directly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawning the user's application. This provides some flexibility, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean that both the tool and the job -must- end together, and that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may need to be revised whenever OMPI/ORTE APIs are updated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. link against all of OMPI or ORTE, executing as a distributed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes. In this mode, you would execute your tool via &quot;mpirun -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pernode
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./my_tool&quot; (or whatever command is appropriate - this example would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one tool process on every node in the allocation). If the tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to communicate with each other, they can call MPI_Init or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_init,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depending upon the level of desired communication. Note that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tool job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be completely standalone from the application job and must be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated separately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In all of these cases, it is possible for tool processes to connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (via MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and/or ORTE-RML) to a job's processes provided that the application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can provide more details, of course, to anyone wishing them. What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciate, though, is any feedback about desired commands, mode of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operation, etc. that I might have missed or people would prefer be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This code is all in a private repository for my tmp branch, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that to merge with the trunk fairly soon. I have provided a couple  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example tools to illustrate the above modes of operation in that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>Previous message:</strong> <a href="3021.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="3016.php">Ralph H Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
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
