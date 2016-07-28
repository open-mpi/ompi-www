<?
$subject_val = "Re: [OMPI devel] rankfile syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 13:23:50 2009" -->
<!-- isoreceived="20090723172350" -->
<!-- sent="Thu, 23 Jul 2009 11:23:36 -0600" -->
<!-- isosent="20090723172336" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile syntax" -->
<!-- id="642B933F-E2F8-4F25-A77E-D44E46A1C350_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A689B86.1040107_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rankfile syntax<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 13:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Previous message:</strong> <a href="6513.php">Eugene Loh: "[OMPI devel] rankfile syntax"</a>
<li><strong>In reply to:</strong> <a href="6513.php">Eugene Loh: "[OMPI devel] rankfile syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;laughing&gt; oops....definitely looks like a bug to me! I gather you  
<br>
only have 4 cores on that node?
<br>
<p>I'll take a look at it. I assume this is on the trunk?
<br>
<p>On Jul 23, 2009, at 11:19 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Oh ye gods of rankfiles:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a node that has two sockets, each with four cores.  If I use  
</span><br>
<span class="quotelev1">&gt; a rankfile, I can bind to a specific core, a specific range of  
</span><br>
<span class="quotelev1">&gt; cores, or a specific core or range of cores of a specific socket.   
</span><br>
<span class="quotelev1">&gt; I'm having trouble binding to all cores of a specific socket.  It's  
</span><br>
<span class="quotelev1">&gt; looking for core 4 on socket 0.  I understand why it can't find it,  
</span><br>
<span class="quotelev1">&gt; but I don't understand why it's looking for it.  Bug?  My error/ 
</span><br>
<span class="quotelev1">&gt; misunderstanding?  Here's what the flight recorder black box says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=saem9 slot=0:*
</span><br>
<span class="quotelev1">&gt; % mpirun -np 1 --host saem9 --rankfile rankfile --mca  
</span><br>
<span class="quotelev1">&gt; paffinity_base_verbose 5 ./a.out
</span><br>
<span class="quotelev1">&gt; [saem9:20649] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [saem9:20649] mca:base:select:(paffinity) Query of component [linux]  
</span><br>
<span class="quotelev1">&gt; set priority to 10
</span><br>
<span class="quotelev1">&gt; [saem9:20649] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [saem9:20650] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [saem9:20650] mca:base:select:(paffinity) Query of component [linux]  
</span><br>
<span class="quotelev1">&gt; set priority to 10
</span><br>
<span class="quotelev1">&gt; [saem9:20650] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [saem9:20650] paffinity slot assignment: slot_list == 0:*
</span><br>
<span class="quotelev1">&gt; [saem9:20650] Rank 0: PAFFINITY cannot get physical core id for  
</span><br>
<span class="quotelev1">&gt; logical core 4 in physical socket 0 (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_paffinity_base_slot_list_set() returned an error
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [saem9:20650] Abort before MPI_INIT completed successfully; not able  
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 20650 on
</span><br>
<span class="quotelev1">&gt; node saem9 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Previous message:</strong> <a href="6513.php">Eugene Loh: "[OMPI devel] rankfile syntax"</a>
<li><strong>In reply to:</strong> <a href="6513.php">Eugene Loh: "[OMPI devel] rankfile syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
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
