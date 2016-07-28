<?
$subject_val = "Re: [OMPI devel] OMPI/ORTE and tools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 11:32:12 2008" -->
<!-- isoreceived="20080116163212" -->
<!-- sent="Wed, 16 Jan 2008 09:31:59 -0700" -->
<!-- isosent="20080116163159" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI/ORTE and tools" -->
<!-- id="C3B37F8F.4295%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3B37E02.4292%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 11:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2986.php">Don Kerr: "[OMPI devel] Open IB BTL development question"</a>
<li><strong>Previous message:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have also stated that one other difference in the &quot;tool&quot; setup is
<br>
that the tool does not create a session directory (you can override that if
<br>
you need one). This simplifies cleanup of the tool, and helps with tools
<br>
like orte-clean. Note that the session directory's main function is to house
<br>
the shared memory backing files and other temporary files that typically
<br>
aren't used by tools as they are more MPI-specific.
<br>
<p>So the default behavior is to -not- create the session dir - like I said,
<br>
though, you can override that if you need it.
<br>
<p>Ralph
<br>
<p><p><p>On 1/16/08 9:25 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I already converted orte-ps and orte-clean in the tmp/rhc-step2b branch on
</span><br>
<span class="quotelev1">&gt; OMPI's svn repository. Shouldn't be hard to convert the checkpoint/restart
</span><br>
<span class="quotelev1">&gt; tools to use it too - I may have already done some of that work, but I may
</span><br>
<span class="quotelev1">&gt; not be remembering it correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll do some cleanup on the code in my private repository and put the rest
</span><br>
<span class="quotelev1">&gt; of the implementation in the svn repository next week. I mostly just needed
</span><br>
<span class="quotelev1">&gt; to talk to Jeff this morning about setting up the comm library - he pointed
</span><br>
<span class="quotelev1">&gt; out that if I create a special &quot;orte_tool_init&quot; function that only calls
</span><br>
<span class="quotelev1">&gt; what is needed, then the linker won't bring everything else into the
</span><br>
<span class="quotelev1">&gt; executable, so a separate &quot;library&quot; may not be required. Still needs to be
</span><br>
<span class="quotelev1">&gt; tested to ensure I can make that work as neatly as desired.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appreciate the feedback
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/16/08 8:58 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This looks interesting. Can you point me to the header files and any
</span><br>
<span class="quotelev2">&gt;&gt; ORTE tools that you may have converted to use this library already
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., orte-ps)? I can port the checkpoint/restart tools to this
</span><br>
<span class="quotelev2">&gt;&gt; library and start sending you some feedback on the API.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 16, 2008, at 7:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summary: this note provides a brief overview of how various tools can
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
<span class="quotelev3">&gt;&gt;&gt; As many of you know, I have been working on a tmp branch to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete the
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
<span class="quotelev3">&gt;&gt;&gt; changes in those APIs. Most tools, however, do not require the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level of
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
<span class="quotelev3">&gt;&gt;&gt; process. However, I'm a little concerned about possible conflicts with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whatever is already flowing across that stream. I would appreciate any
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
<span class="quotelev3">&gt;&gt;&gt; spawning the user's application. This provides some flexibility,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it does
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
<span class="quotelev3">&gt;&gt;&gt; 3. link against all of OMPI or ORTE, executing as a distributed set of
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
<span class="quotelev3">&gt;&gt;&gt; that to merge with the trunk fairly soon. I have provided a couple of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example tools to illustrate the above modes of operation in that code.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2986.php">Don Kerr: "[OMPI devel] Open IB BTL development question"</a>
<li><strong>Previous message:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
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
