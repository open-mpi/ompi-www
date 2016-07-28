<?
$subject_val = "Re: [OMPI devel] OMPI/ORTE and tools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 10:58:56 2008" -->
<!-- isoreceived="20080116155856" -->
<!-- sent="Wed, 16 Jan 2008 09:58:43 -0600" -->
<!-- isosent="20080116155843" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI/ORTE and tools" -->
<!-- id="5C15DEF9-E534-4EF3-A4D3-D7F81365ADD0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3B358E6.4288%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 10:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="2982.php">Ralph Castain: "[OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="2982.php">Ralph Castain: "[OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This looks interesting. Can you point me to the header files and any  
<br>
ORTE tools that you may have converted to use this library already  
<br>
(e.g., orte-ps)? I can port the checkpoint/restart tools to this  
<br>
library and start sending you some feedback on the API.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 16, 2008, at 7:47 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary: this note provides a brief overview of how various tools can
</span><br>
<span class="quotelev1">&gt; interface to OMPI applications once the next version of ORTE is  
</span><br>
<span class="quotelev1">&gt; integrated
</span><br>
<span class="quotelev1">&gt; into the trunk. It includes a request for input regarding any needs  
</span><br>
<span class="quotelev1">&gt; (e.g.,
</span><br>
<span class="quotelev1">&gt; additional commands to be supported in the interface) that have not  
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev1">&gt; adequately addressed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As many of you know, I have been working on a tmp branch to  
</span><br>
<span class="quotelev1">&gt; complete the
</span><br>
<span class="quotelev1">&gt; revamp of ORTE that has been in progress for quite some time. Among  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; things, this revamp is intended to simplify the system, provide  
</span><br>
<span class="quotelev1">&gt; enhanced
</span><br>
<span class="quotelev1">&gt; scalability, and improved reliability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As part of that effort, I have extensively revised the support for  
</span><br>
<span class="quotelev1">&gt; external
</span><br>
<span class="quotelev1">&gt; tools. In the past, tools such as the Eclipse PTP could only  
</span><br>
<span class="quotelev1">&gt; interact with
</span><br>
<span class="quotelev1">&gt; Open MPI-based applications via ORTE API's, thus exposing the tool  
</span><br>
<span class="quotelev1">&gt; to any
</span><br>
<span class="quotelev1">&gt; changes in those APIs. Most tools, however, do not require the  
</span><br>
<span class="quotelev1">&gt; level of
</span><br>
<span class="quotelev1">&gt; control provided by the APIs and can benefit from a simplified  
</span><br>
<span class="quotelev1">&gt; interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Accordingly, the revamped ORTE now offers alternative methods of
</span><br>
<span class="quotelev1">&gt; interaction. The primary change has been the creation of a  
</span><br>
<span class="quotelev1">&gt; communications
</span><br>
<span class="quotelev1">&gt; library with a simple serial protocol for interacting with OMPI  
</span><br>
<span class="quotelev1">&gt; jobs. Thus,
</span><br>
<span class="quotelev1">&gt; tools now have three choices for interacting with OMPI jobs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I have created a new communications library that tools can link  
</span><br>
<span class="quotelev1">&gt; against.
</span><br>
<span class="quotelev1">&gt; It does not include all of the ORTE or OMPI libraries, so it is a  
</span><br>
<span class="quotelev1">&gt; very small
</span><br>
<span class="quotelev1">&gt; memory footprint. Besides the usual calls to initialize and  
</span><br>
<span class="quotelev1">&gt; finalize, the
</span><br>
<span class="quotelev1">&gt; library contains utilities for finding all of the OMPI jobs running  
</span><br>
<span class="quotelev1">&gt; on that
</span><br>
<span class="quotelev1">&gt; HNP (i.e., all OMPI jobs whose mpirun was executed from that host),  
</span><br>
<span class="quotelev1">&gt; querying
</span><br>
<span class="quotelev1">&gt; the status of a job (provides the job map plus all proc states);  
</span><br>
<span class="quotelev1">&gt; querying
</span><br>
<span class="quotelev1">&gt; the status of nodes (provides node names, status, and list of procs  
</span><br>
<span class="quotelev1">&gt; on each
</span><br>
<span class="quotelev1">&gt; node including their state); querying the status of a specific  
</span><br>
<span class="quotelev1">&gt; process;
</span><br>
<span class="quotelev1">&gt; spawning a new job; and terminating a job. In addition, you can  
</span><br>
<span class="quotelev1">&gt; attach to
</span><br>
<span class="quotelev1">&gt; output streams of any process, specifying stdout, stderr, or both -  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; &quot;tees&quot; the specified streams, so it won't interfere with the job's  
</span><br>
<span class="quotelev1">&gt; normal
</span><br>
<span class="quotelev1">&gt; output flow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could also create a utility to allow attachment to the input  
</span><br>
<span class="quotelev1">&gt; stream of a
</span><br>
<span class="quotelev1">&gt; process. However, I'm a little concerned about possible conflicts with
</span><br>
<span class="quotelev1">&gt; whatever is already flowing across that stream. I would appreciate any
</span><br>
<span class="quotelev1">&gt; suggestions as to whether or not to provide that capability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: we removed the concept of the ORTE &quot;universe&quot;, so a tool can  
</span><br>
<span class="quotelev1">&gt; now talk
</span><br>
<span class="quotelev1">&gt; to any mpirun without complications. Thus, tools can simultaneously
</span><br>
<span class="quotelev1">&gt; &quot;connect&quot; to and monitor multiple mpiruns, if desired.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. link against all of OMPI or ORTE, and execute a standalone  
</span><br>
<span class="quotelev1">&gt; program. In
</span><br>
<span class="quotelev1">&gt; this mode, your tool would act as a surrogate for mpirun by directly
</span><br>
<span class="quotelev1">&gt; spawning the user's application. This provides some flexibility,  
</span><br>
<span class="quotelev1">&gt; but it does
</span><br>
<span class="quotelev1">&gt; mean that both the tool and the job -must- end together, and that  
</span><br>
<span class="quotelev1">&gt; the tool
</span><br>
<span class="quotelev1">&gt; may need to be revised whenever OMPI/ORTE APIs are updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. link against all of OMPI or ORTE, executing as a distributed set of
</span><br>
<span class="quotelev1">&gt; processes. In this mode, you would execute your tool via &quot;mpirun - 
</span><br>
<span class="quotelev1">&gt; pernode
</span><br>
<span class="quotelev1">&gt; ./my_tool&quot; (or whatever command is appropriate - this example would  
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev1">&gt; one tool process on every node in the allocation). If the tool  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; need to communicate with each other, they can call MPI_Init or  
</span><br>
<span class="quotelev1">&gt; orte_init,
</span><br>
<span class="quotelev1">&gt; depending upon the level of desired communication. Note that the  
</span><br>
<span class="quotelev1">&gt; tool job
</span><br>
<span class="quotelev1">&gt; will be completely standalone from the application job and must be
</span><br>
<span class="quotelev1">&gt; terminated separately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In all of these cases, it is possible for tool processes to connect  
</span><br>
<span class="quotelev1">&gt; (via MPI
</span><br>
<span class="quotelev1">&gt; and/or ORTE-RML) to a job's processes provided that the application  
</span><br>
<span class="quotelev1">&gt; supports
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can provide more details, of course, to anyone wishing them. What  
</span><br>
<span class="quotelev1">&gt; I would
</span><br>
<span class="quotelev1">&gt; appreciate, though, is any feedback about desired commands, mode of
</span><br>
<span class="quotelev1">&gt; operation, etc. that I might have missed or people would prefer be  
</span><br>
<span class="quotelev1">&gt; changed.
</span><br>
<span class="quotelev1">&gt; This code is all in a private repository for my tmp branch, but I  
</span><br>
<span class="quotelev1">&gt; expect
</span><br>
<span class="quotelev1">&gt; that to merge with the trunk fairly soon. I have provided a couple of
</span><br>
<span class="quotelev1">&gt; example tools to illustrate the above modes of operation in that code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="2982.php">Ralph Castain: "[OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="2982.php">Ralph Castain: "[OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Reply:</strong> <a href="2984.php">Ralph Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
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
