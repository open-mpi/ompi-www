<?
$subject_val = "Re: [OMPI devel] race condition in grpcomm/rcd";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 09:16:02 2014" -->
<!-- isoreceived="20140909131602" -->
<!-- sent="Tue, 9 Sep 2014 06:15:27 -0700" -->
<!-- isosent="20140909131527" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in grpcomm/rcd" -->
<!-- id="5120C5E6-0B09-41C4-BBEE-E008DE4FC0F1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="540ED1FB.8060504_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in grpcomm/rcd<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 09:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15782.php">Ralph Castain: "[OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Previous message:</strong> <a href="15780.php">Gilles Gouaillardet: "[OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>In reply to:</strong> <a href="15780.php">Gilles Gouaillardet: "[OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15794.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Reply:</strong> <a href="15794.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that's not the correct fix. The right way to fix it is for all three components to have their own RML tag, and for each of them to establish a persistent receive. They then can use the signature to tell which collective the incoming message belongs to.
<br>
<p>I'll fix it, but it won't be until tomorrow I'm afraid as today is shot.
<br>
<p><p>On Sep 9, 2014, at 3:10 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since r32672 (trunk), grpcomm/rcd is the default module.
</span><br>
<span class="quotelev1">&gt; the attached spawn.c test program is a trimmed version of the
</span><br>
<span class="quotelev1">&gt; spawn_with_env_vars.c test case
</span><br>
<span class="quotelev1">&gt; from the ibm test suite.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when invoked on two nodes :
</span><br>
<span class="quotelev1">&gt; - the program hangs with -np 2
</span><br>
<span class="quotelev1">&gt; - the program can crash with np &gt; 2
</span><br>
<span class="quotelev1">&gt; error message is
</span><br>
<span class="quotelev1">&gt; [node0:30701] [[42913,0],0] TWO RECEIVES WITH SAME PEER [[42913,0],1]
</span><br>
<span class="quotelev1">&gt; AND TAG -33 - ABORTING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is my full command line (from node0) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -host node0,node1 -np 2 --oversubscribe --mca btl tcp,self --mca
</span><br>
<span class="quotelev1">&gt; coll ^ml ./spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple workaround is to add the following extra parameter to the
</span><br>
<span class="quotelev1">&gt; mpirun command line :
</span><br>
<span class="quotelev1">&gt; --mca grpcomm_rcd_priority 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understanding it that the race condition occurs when all the
</span><br>
<span class="quotelev1">&gt; processes call MPI_Finalize()
</span><br>
<span class="quotelev1">&gt; internally, the pmix module will have mpirun/orted issue two ALLGATHER
</span><br>
<span class="quotelev1">&gt; involving mpirun and orted
</span><br>
<span class="quotelev1">&gt; (one job 1 aka the parent, and one for job 2 aka the spawned tasks)
</span><br>
<span class="quotelev1">&gt; the error message is very explicit : this is not (currently) supported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i wrote the attached rml.patch which is really a workaround and not a fix :
</span><br>
<span class="quotelev1">&gt; in this case, each job will invoke an ALLGATHER but with a different tag
</span><br>
<span class="quotelev1">&gt; /* that works for a limited number of jobs only */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i did not commit this patch since this is not a fix, could someone
</span><br>
<span class="quotelev1">&gt; (Ralph ?) please review the issue and comment ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;spawn.c&gt;&lt;rml.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15780.php">http://www.open-mpi.org/community/lists/devel/2014/09/15780.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15782.php">Ralph Castain: "[OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Previous message:</strong> <a href="15780.php">Gilles Gouaillardet: "[OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>In reply to:</strong> <a href="15780.php">Gilles Gouaillardet: "[OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15794.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Reply:</strong> <a href="15794.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
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
