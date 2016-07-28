<?
$subject_val = "Re: [OMPI devel] MPI_Com_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 10:49:48 2008" -->
<!-- isoreceived="20081029144948" -->
<!-- sent="Wed, 29 Oct 2008 08:49:39 -0600" -->
<!-- isosent="20081029144939" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Com_spawn" -->
<!-- id="0697D71D-9395-492F-90D6-5443B356FB99_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1F056959-9DC9-4BD5-AF21-5A9B6443ED03_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Com_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 10:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4826.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>Your help is welcome! See below for some thoughts
<br>
<p>On Oct 29, 2008, at 8:12 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph, this indeed fixed my problem. However, I run in more  
</span><br>
<span class="quotelev1">&gt; troubles ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a simple application that keep spawning MPI processes,  
</span><br>
<span class="quotelev1">&gt; exchange some data and then the children disconnect and vanish. But  
</span><br>
<span class="quotelev1">&gt; I keep doing this in a loop ... absolutely legal from the MPI  
</span><br>
<span class="quotelev1">&gt; standard perspective. However, with Open MPI trunk I run in two  
</span><br>
<span class="quotelev1">&gt; kinds of troubles:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I run out of fds. Apparently the orteds don't close the  
</span><br>
<span class="quotelev1">&gt; connections when the children disconnect, and after few iterations I  
</span><br>
<span class="quotelev1">&gt; exhaust the available fd, the orted start complaining and everything  
</span><br>
<span class="quotelev1">&gt; end up being killed. If I check with lsof I can see the pending fd  
</span><br>
<span class="quotelev1">&gt; (in an invalid state) but still attached to the orted.
</span><br>
<p>Good point - this was actually the case with the old system too, IIRC.  
<br>
We didn't have a mechanism by which the orted could reach down into  
<br>
the iof and &quot;close&quot; the file descriptors from a child process when it  
<br>
terminates.
<br>
<p>Here is what I suggest:
<br>
<p>1. in orte/mca/odls/base/ 
<br>
odls_base_default_fns.c:odls_base_default_wait_local_proc function,  
<br>
add a call to orte_iof.close(child-&gt;name)
<br>
<p>2. in orte/mca/iof/orted/iof_orted.c:orted_close, look up the read  
<br>
events and sinks that refer to that process and close those fds. Be  
<br>
sure to also terminate the read events, cleanup any outputs still on  
<br>
the sink's write event, and release those objects
<br>
<p>That should do the trick.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I tried to be helpful and provide a host file describing the  
</span><br>
<span class="quotelev1">&gt; cluster. I even annotate the nodes with he number of slots and max- 
</span><br>
<span class="quotelev1">&gt; slots. When we spawn processes we correctly load balance them on the  
</span><br>
<span class="quotelev1">&gt; available nodes, but when they finish we do not release the  
</span><br>
<span class="quotelev1">&gt; resources. After few iterations we run out of available nodes, and  
</span><br>
<span class="quotelev1">&gt; the application exit with the following error:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2  
</span><br>
<span class="quotelev1">&gt; slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  ./slave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots  
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, at this point there is only one MPI process running, the  
</span><br>
<span class="quotelev1">&gt; master. All other resources are fully available for the children.
</span><br>
<p>This isn't an IOF issue, but rather a problem in how we track resource  
<br>
usage in mpirun. When a job completes, we don't &quot;release&quot; its  
<br>
resources back to the node pool.
<br>
<p>Been that way since day one, now that I think about it - just nobody  
<br>
noticed! :-)
<br>
<p>Here is what I suggest.In orte/mca/plm/base/plm_base_launch_support.c:  
<br>
orte_plm_base_check_job_completed - this is where we detect that a job  
<br>
has actually completed. You could add a function call here to a new  
<br>
routine that:
<br>
<p>1. calls orte_rmaps.get_job_map(job) to get the map for this job -  
<br>
that will tell you exactly which nodes and how many slots on each of  
<br>
those nodes was used
<br>
<p>2. the nodes in the map are stored as pointers to the corresponding  
<br>
orte_node_t object in the global orte_node_pool. So all you would need  
<br>
to do is cycle through the resulting array of node pointers,  
<br>
decrementing their slots_in_use by the appropriate amount.
<br>
<p>That should do the trick. I can't think of anything else that would be  
<br>
required, though I can't swear I didn't miss something.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to get involved in this and help fix the two problems.  
</span><br>
<span class="quotelev1">&gt; But I have a hard time figuring out where to start. Any pointers  
</span><br>
<span class="quotelev1">&gt; will be welcomed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 10:50 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Done...r19820
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2008, at 8:37 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, of course it does - the problem is in a sanity check I just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed over the weekend.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Easily fixed...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 28, 2008, at 8:33 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run in troubles with the new IO framework when I spawn a new  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process. The following error message is dumped and the job is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a process rank that is greater than the number of process in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Specified target: INVALID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Number of procs: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target, or by mistyping the desired rank. Please correct the cmd  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is the new IO framework supposed to support MPI2 dynamics ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4826.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
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
